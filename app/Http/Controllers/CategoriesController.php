<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use DB;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $view = DB::table('categories')->get();
        return view('category.all_categories',compact('view'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.add_categories');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'categories_name' => 'required',
        ],[
            'categories_name.required'=>" Enter The Categories Name"
        ]
    );
       $data = array();
       $data['categories_name']=$request->categories_name;
       $store = DB::table('categories')->insert($data);
       if ($store) {
        $notification = array(
            'message' => 'Categories Add Successfully ',
            'alert-type' => 'success'
        );
       
        return redirect()->route('allCategories')->with($notification);
    }else {
       
        $notification = array(
            'message' => 'Categories did not add',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
       }
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = DB::table('categories')
                        ->where('id',$id)
                        ->first();
                        return view('category.edit_categories',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'categories_name' => 'required',
        ]);

        $data = array();
        $data['categories_name']=$request->categories_name;
        $store = DB::table('categories')->where('id',$id)->update($data);
        if ($store) {
            $notification = array(
                'message' => 'Categories Name Update Successfully',
                'alert-type' => 'success'
            ); ;
            return redirect()->route('allCategories')->with($notification);
           }else {
            $notification = array(
                'message' => 'Categories is not update',
                'alert-type' => 'success'
            ); 
            return redirect()->route('allCategories')->with($notification);
           }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $delete = DB::table('categories')->where('id',$id)->delete();
        if ($delete) {
            $notification = array(
                'message' => 'Delete Categories Successfully',
                'alert-type' => 'success'
            ); 
            return redirect()->route('allCategories')->with($notification);
           }else {
            $notification = array(
                'message' => 'Failed to Delete ',
                'alert-type' => 'error'
            ); 
            return redirect()->route('allCategories')->with($notification);
           }
    }
}
