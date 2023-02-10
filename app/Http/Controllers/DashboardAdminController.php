<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as database;
/**
 * extend class for admin controlling all user chat and transaction!
 */
class DashboardAdminController extends Controller
{
/**index data dashboard */
public function index(){
    $data = User::all();
    return view('dashboard.dashboard-admin', compact('data'));
    }
/**information user can be edited by admin */
public function editprofile($id){
    $data = User::find($id);
    return view('editprofile.edit-profile', compact(['data']));
    }
/**the game category displaying in landing page */
public function gamecategory(){
    return view('dashboard.gamecategory');
    }
/**deleting account user*/
public function deleteaccountUser($id){
    $User = User::where('id', $id)->delete();

    return redirect()->route('backdashboard');
}
public function upload(Request $request){
    $this->validate($request, [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
  
      $cusava = new User();
  
      if ($request->hasFile('image')) {
          $image = $request->file('image');
          $name = $request->image.'.'.$image->getClientOriginalExtension();
          $destinationPath = public_path('avatars/');
          $imagePath = $destinationPath. "/".  $name;
          $image->move($destinationPath, $name);
          $cusava->image = $name;
        }

        $data = User::Update([
            'cusava' => $name,
        ]);
  
        return back()->with('success', 'Your article has been added successfully. Please wait for the admin to approve.');
  }
}
