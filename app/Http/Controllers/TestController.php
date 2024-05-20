<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testNplus1()
    {

        //N+1 probelm 
        $users = User::all();

        //use below code to avoid N+1 problem
        //$users = User::with('grade')->get();

        return view('test', compact('users'));
    }
}
