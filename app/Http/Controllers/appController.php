<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appController extends Controller
{
    public function homepage(){
        return view('homepage.home');
    }

    public function hotitems(){
        return view('hotitems.hotitems');
    }

    public function chatting(){
        return view('chatter.chatting');
    }

    public function itemsinfo(){
        return view('homepage.itemsinfo');
    }

    public function offersinfo(){
        return view('homepage.offersinfo');
    }

    public function dashboard(){
        return view('dashboard.dashboard-admin');
    }

    public function editprofile(){
        return view('editprofile.edit-profile');
    }
}