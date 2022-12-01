<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appController extends Controller
{
    public function app() {
        return view('interface.appChat');
    }
}
