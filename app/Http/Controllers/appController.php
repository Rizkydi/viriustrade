<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appController extends Controller
{
    public function appChat() {
        return view('interface.landing');
    }
    
    public function landingpage() {
        return view('landingpage.landingpage');
    }

    public function kategori() {
        return view('kategori.kategori');
    }

    public function login() {
        return view('login.login');
    }
    
    public function register() {
        return view('register.register');
    }
    
    public function forgotpassword() {
        return view('forgotpassword.forgot');
    }

    public function homepage(){
        return view('homepage.home');
    }

    public function hotitems(){
        return view('homepage.hotitems');
    }
}