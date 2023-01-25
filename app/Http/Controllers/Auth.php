<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth as checked;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class Auth extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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
