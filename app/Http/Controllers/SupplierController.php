<?php

namespace App\Http\Controllers;

use App\Models\supplier;
use Illuminate\Http\Request;
use DB;
class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = DB::table('suppliers')->get();
        return view('supplier.all_supplier',compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier.add_supplier');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'nullable|email|unique:suppliers,email',
            'phone' => 'required|unique:suppliers,phone|digits_between:10,11',
            'address' => 'required',
            'type' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'shopeName' => 'required',
            'account_holder' => 'nullable',
            'account_number' => 'nullable|unique:suppliers,account_number',
            'bank_name' => 'nullable',
            'bank_branch' => 'nullable',
            'city' => 'required',
        ]);
        
       
        $data =array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $data['shopeName']=$request->shopeName;
        $data['photo']=$request->photo;
        $data['account_holder']=$request->account_holder;
        
        $data['account_number']=$request->account_number;
        $data['bank_name']=$request->bank_name;
        $data['bank_branch']=$request->bank_branch;
        $data['city']=$request->city;
        $data['type']=$request->type;

        $image = $request->file('photo');
        // print_r($data);

        if ($image) {
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $upload_path = 'image/supplier/';
            $image_url = $upload_path . $image_name;
            $success = $image->move($upload_path, $image_name);
            
            if ($success) {
                $data['photo'] = $image_url;
                $insert = DB::table('suppliers')->insert($data);
                $notification = array(
                    'message' => 'Supplier & image  add successfully',
                    'alert-type' => 'success'
                );
                return redirect()->route('supplier.all-supplier')->with($notification);
                }
            } else {
                $notification = array(
                    'message' => 'Supplier add Successfully',
                    'alert-type' => 'warning'
                );
                $insert = DB::table('suppliers')->insert($data);
                return redirect()->route('supplier.all-supplier')->with($notification);
            }
            $notification = array(
                'message' => 'Supplier add Successfully',
                'alert-type' => 'success'
            );
            $insert = DB::table('suppliers')->insert($data);
            return redirect()->route('supplier.all-supplier')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $single = DB::table('suppliers')
        ->where('id',$id)
        ->first();
        // var_dump( $singleUser);
        return view('supplier.view_supplier',compact('single'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editUser = DB::table('suppliers')
                        ->where('id',$id)
                        ->first();
                return view('supplier.edit_supplier',compact('editUser'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'nullable|email|unique:employees,email,' . $id,
            'phone' => 'required|digits_between:11,14',
            'address' => 'required',
            'type' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'shopeName' => 'required',
            'account_holder' => 'nullable',
            'account_number' => 'nullable',
            'bank_name' => 'nullable',
            'bank_branch' => 'nullable',
            'city' => 'required',
        ]);
    
        // Retrieve the existing record from the database
        $existingRecord = DB::table('suppliers')->where('id', $id)->first();
    
        // Merge the existing record with the new data
        $data = array_merge((array) $existingRecord, $request->except(['_token', '_method', 'photo']));
    
        // Check if a new photo is uploaded
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $upload_path = 'image/supplier/';
            $image_url = $upload_path . $image_name;
            $success = $image->move($upload_path, $image_name);
    
            if ($success) {
                // Delete old image if exists
                if ($existingRecord->photo && file_exists($existingRecord->photo)) {
                    unlink($existingRecord->photo);
                }
    
                // Update data with new image URL
                $data['photo'] = $image_url;
            } else {
                $notification = array(
                    'message' => 'Failed to upload image',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }
        }
    
        // Update supplier record
        $updateUser = DB::table('suppliers')->where('id', $id)->update($data);
    
        if ($updateUser) {
            $notification = array(
                'message' => 'Successfully Updated',
                'alert-type' => 'success'
            );
            return redirect()->route('supplier.all-supplier')->with($notification);
        } else {
            $notification = array(
                'message' => 'Failed to Update',
                'alert-type' => 'error'
            );
            return redirect()->route('supplier.all-supplier')->with($notification);
        }
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = DB::table('suppliers')
            ->where('id', $id)
            ->first();
    
        if ($delete) {
            $photo = $delete->photo;
            
            // Check if the photo exists before attempting to delete it
            if ($photo && file_exists($photo)) {
                unlink($photo);
            }
    
            $deleteUser = DB::table('suppliers')
                ->where('id', $id)
                ->delete();
                $notification = array(
                    'message' => 'Supplier Deleted Successfully',
                    'alert-type' => 'success'
                );
            return redirect()->route('supplier.all-supplier')->with($notification);
        } else {
            
                $notification = array(
                    'message' => 'Supplier not Deleted ',
                    'alert-type' => 'warning'
                );
            // Handle case where supplier with the given ID doesn't exist
            return redirect()->route('supplier.all-supplier')->with($notification);
        }
    }
    
}
