<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function info(){
        return view('test.info');
    }
    public function contacts(){
        return view('contacts.contacts');
    }
    public function help(){
        return view('help.help');
    }
    public function regresar(){
        return view('welcome');
    }
}
