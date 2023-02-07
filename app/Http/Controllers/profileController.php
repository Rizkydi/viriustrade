<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class profileController extends Controller
{
    public function index() {
        if (auth()->user())
        { 
            return view('homepage.profileinfo');
        }
        else
        {      
              // return view('pages.session.login');
               return redirect(route('view.login'));
        }
    }

    public function profileinfo(){
       
    }
}