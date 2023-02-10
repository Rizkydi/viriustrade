<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth as checked;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class Authentication extends Controller{
    public function login() {
        return view('login.login');
    }
    
    public function register() {
        return view('register.register');
    }
    
    public function forgotpassword() {
        return view('forgotpassword.forgot');
    }

    public function validate_logins(Request $request)
    {
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(checked::attempt($credentials))
        {
            return redirect(route('homepages'));
        }

        return redirect('budi')->with('success', 'Login details are not valid');
    }


     public function validate_registration(Request $request)
     {
         $request->validate([
             'name'         =>   'required',
             'email'        =>   'required|email|unique:users',
             'password'     =>   'required|min:6'
         ]);

         $data = $request->all();

         client::create([
             'name'  =>  $data['name'],
             'email' =>  $data['email'],
             'provider_name' => 'local',
             'avatar' => 'https://camo.githubusercontent.com/e19b1e10b2ba3c51d606ebc4de9b26ef9e143b2084f88e7b05411d4ad09e1c6f/68747470733a2f2f692e6962622e636f2f6774385876764e2f6c6f676f2d76697269757374726164652e706e67',
             'password' => Hash::make($data['password'])
         ]);

         return redirect('login')->with('success', 'Registration Completed, now you can login');

 }

    public function create()
    {

      
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
