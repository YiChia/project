<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MyController extends Controller
{
    public function test()
    {
    	//phpinfo();
    	$user = DB::table('users')->get();
    	dd($user);
    }
}
