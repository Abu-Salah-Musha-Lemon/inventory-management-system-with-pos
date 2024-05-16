<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = DB::table('customers')->get();
        return view('customer.all_customer',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.add_customer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'unique:customers,email',
            'phone' => 'required|unique:customers,phone|digits_between:10,11',
            'city' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
        $data =array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        //$data['shopeName']=$request->shopeName;
        // $data['photo']=$request->photo;
        $data['account_holder']=$request->account_holder;
        
        $data['account_number']=$request->account_number;
        $data['bank_name']=$request->bank_name;
        $data['bank_branch']=$request->bank_branch;
        $data['city']=$request->city;

        $image = $request->file('photo');
        // print_r($data);

        if ($image) {
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $upload_path = 'image/customer/';
            $image_url = $upload_path . $image_name;
            $success = $image->move($upload_path, $image_name);
            
            if ($success) {
                $data['photo'] = $image_url;
                $insert = DB::table('customers')->insert($data);
                $notification = array(
                    'message' => 'Customer add successfully',
                    'alert-type' => 'success'
                );
                // return redirect()->route('customer.all-customer');
                return redirect()->back()->with($notification);
                }
            } else {
                $notification = array(
                    'message' => 'Customer add successfully',
                    'alert-type' => 'success'
                );
                $insert = DB::table('customers')->insert($data);
                // return redirect()->back()->withErrors(['image' => 'Failed to upload image']);
                return redirect()->back()->with($notification);
            }
            $notification = array(
                'message' => 'Customer add successfully',
                'alert-type' => 'success'
            );
            $insert = DB::table('customers')->insert($data);
            
            return redirect()->route('customer.all-customer')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $single = DB::table('customers')
        ->where('id',$id)
        ->first();
        // var_dump( $singleUser);
        return view('customer.view_customer',compact('single'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editUser = DB::table('customers')
                        ->where('id',$id)
                        ->first();
                return view('customer.edit_customer',compact('editUser'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required|digits_between:10,11',
            'city' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
        $data =array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
       // $data['shopeName']=$request->shopeName;
        $data['account_holder']=$request->account_holder;
        
        $data['account_number']=$request->account_number;
        $data['bank_name']=$request->bank_name;
        $data['bank_branch']=$request->bank_branch;
        $data['city']=$request->city;
     

        $image = $request->file('photo');


        if ($image) {
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $upload_path = 'image/customer/';
            $image_url = $upload_path . $image_name;
            $success = $image->move($upload_path, $image_name);
            
            if ($success) {
                $data['photo'] = $image_url;

                // Retrieve old image path
                $img = DB::table('customers')->where('id', $id)->first();
                $img_path = $img->photo;

                // Delete old image
                if (file_exists($img_path)) {
                    unlink($img_path);
                }

                // Update customer record
                $updateUser = DB::table('customers')->where('id', $id)->update($data);

                if ($updateUser) {
                    $notification = array(
                        'message' => 'Successfully Updated',
                        'alert-type' => 'success'
                    );
                    return redirect()->route('customer.all-customer')->with($notification);
                } else {
                    $notification = array(
                        'message' => 'Failed to Update',
                        'alert-type' => 'error'
                    );
                    return redirect()->route('customer.all-customer')->with($notification);
                }
            } else {
                // return redirect()->back()->withErrors(['image' => 'Failed to upload image']);
                return redirect()->route('customer.all-customer')->with($notification);
            }
        } else {
            // Update employee record without changing the photo
            $user = DB::table('customers')->where('id', $id)->update($data);
            if ($user) {
                    $notification = array(
                            'message' => 'customer Updated Successfully',
                            'alert-type' => 'success'
                    );
                    return redirect()->route('customer.all-customer')->with($notification);
            } else {
                    // return redirect()->back();
                    return redirect()->route('customer.all-customer');
            }
        }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = DB::table('customers')
        ->where('id',$id)
        ->first();
        $photo=$delete->photo;
        // var_dump( $singleUser);
        if($photo){
            unlink($photo);
            $deleteUser=DB::table('customers')
                        ->where('id',$id)
                        ->delete();
                        $notification = array(
                            'message' => 'customer Delete Successfully',
                            'alert-type' => 'success'
                    );
                        return redirect()->route('customer.all-customer')->with($notification);
        }else{
            $deleteUser=DB::table('customers')
            ->where('id',$id)
            ->delete();
            $notification = array(
                'message' => 'customer Delete Successfully',
                'alert-type' => 'success'
                );
            return redirect()->route('customer.all-customer')->with($notification);
        }
    }
}
