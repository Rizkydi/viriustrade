<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index() {
     $data = User::all();

     return view('dashboard.dashboard', compact('data'));
    }

    public function editprofile($id){

    $data = User::find($id);
        return view('editprofile.edit-profile', compact('data'));
    }

    public function gamecategory(){

        return view('dashboard.gamecategory');
    }
}
