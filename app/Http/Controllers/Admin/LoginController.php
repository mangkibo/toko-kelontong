<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Redirect;	
use Auth;

class LoginController extends AdminController {
	public function login(Request $request) {
		if ($request->method('post')) {
			if (Auth::attempt(['email' => $email, 'password' => $password])) {
	            return redirect()->intended('/cms');
	        }
		}
		return view('admin.login');
	}

	public function dologout() {

	}
}