<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Admin;

class Admincontroller extends Controller
{
    function postAdmin(Request $request){
		$email=$request->input('email');
		$password=$request->input('password');
		$admin=Admin::where('email',$email)->where('password',$password)->first();
		if($admin==null){
			$alert='email or password wrong!';
			return view('admin.login',compact('alert'));
		}
		$request->session()->put('admin',$email);
		return redirect('admin/user');
	}

	function admin(){
		return view('admin.login');
	}
	function logout(Request $request){
		$request->session()->flush();
		return redirect('admin');
	}
}