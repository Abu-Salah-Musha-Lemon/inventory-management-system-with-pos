<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function index()
    {
        $settings = DB::table('settings')->get();
        return view('settings.index', compact('settings'));
    }

    // public function update(Request $request)
    // {   
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //          'old_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the size limit and allowed file types as needed
    //     ]);
    //     $settings = DB::table('settings')->first();
    
    //     if ($settings === null) {
    //         // If no settings exist, insert new settings
    //         $insertdata = DB::table('settings')->insert([
    //             'name' => $request->name,
    //             'logo_path' => $request->logo->store('logos'), // Store the logo file
    //         ]);
    //         $notification = array(
    //             'message' => 'Data Insert Successfully',
    //             'alert-type' => 'success'
    //         );
    //         return redirect()->back()->with($notification);
    //     } else {
    //         // If settings exist, update existing settings
    //         $Updatedata = DB::table('settings')->update([
    //             'name' => $request->name,
    //             'logo_path' => $request->logo->store('logos'), // Store the logo file
    //         ]);
    //         $notification = array(
    //             'message' => 'Data update  Updated',
    //             'alert-type' => 'success'
    //         );
    //         return redirect()->back()->with($notification);
    //     }

    //     return redirect()->back()->with('success', 'Settings updated successfully');
    // }

//     public function update(Request $request)
// {   
//     $request->validate([
//         'name' => 'required|string|max:255',
//         'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Allow null or image file
//     ]);

//     // Retrieve the current settings
//     $settings = DB::table('settings')->first();

//     if ($settings === null) {
//         // If no settings exist, insert new settings
//         $insertdata = DB::table('settings')->insert([
//             'name' => $request->name,
//             'logo_path' => $request->hasFile('logo') ? $request->logo->store('logos') : null, // Store the logo file if uploaded
//         ]);
//         $notification = array(
//             'message' => 'Data Insert Successfully',
//             'alert-type' => 'success'
//         );
//     } else {
//         // If settings exist, update existing settings
//         $dataToUpdate = [
//             'name' => $request->name,
//         ];

//         // Update logo path only if a new logo has been uploaded
//         if ($request->hasFile('logo')) {
//             $dataToUpdate['logo_path'] = $request->logo->store('logos');
//         }

//         $Updatedata = DB::table('settings')->update($dataToUpdate);
//         $notification = array(
//             'message' => 'Data Updated Successfully',
//             'alert-type' => 'success'
//         );
//     }

//     return redirect()->back()->with($notification);
// }
public function update(Request $request)
{   
    $request->validate([
        'name' => 'required|string|max:255',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Allow null or image file
    ]);

    // Retrieve the current settings
    $settings = DB::table('settings')->first();

    if ($settings === null) {
        // If no settings exist, insert new settings
        $insertData = [
            'name' => $request->name,
        ];

        // Store the logo file if uploaded
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $image_name = uniqid() . '.' . $image->getClientOriginalExtension();
            $upload_path = 'image/setting/';
            $image_url = $upload_path . $image_name;
            $success = $image->move($upload_path, $image_name);
            $insertData['logo_path'] = $image_url;
        }

        DB::table('settings')->insert($insertData);

        $notification = [
            'message' => 'Data Insert Successfully',
            'alert-type' => 'success'
        ];
    } else {
        // If settings exist, update existing settings
        $dataToUpdate = [
            'name' => $request->name,
        ];

        // Check if a new logo has been uploaded
        if ($request->hasFile('logo')) {
            // Delete the old image if it exists
            if (!empty($settings->logo_path)) {
                unlink(public_path($settings->logo_path)); // Delete the old image file
            }
            
            // Upload the new logo
            $image = $request->file('logo');
            $image_name = uniqid() . '.' . $image->getClientOriginalExtension();
            $upload_path = 'image/setting/';
            $image_url = $upload_path . $image_name;
            $success = $image->move($upload_path, $image_name);
            $dataToUpdate['logo_path'] = $image_url;
        }

        DB::table('settings')->update($dataToUpdate);

        $notification = [
            'message' => 'Data Updated Successfully',
            'alert-type' => 'success'
        ];
    }

    return redirect()->back()->with($notification);
}




}

