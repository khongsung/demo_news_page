<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class LoginController extends Controller
{
    public function getLogin()
    {
    	if(Auth::check()){
    		return redirect('admin');
    	} else {
    		return view('backend.verify.login');
    	}
    }

    public function postLogin(LoginRequest $request)
    {
    	$login = [
    				'username' => $request->username,
    				'password' => $request->password,
    				'level' => 1,
    			];
    	 if (Auth::attempt($login)) {
            // Authentication passed...
            return redirect('admin');
        } else {
            $error = 'sai tk or mk';
            return view('backend.verify.login');
        	/*return redirect()->back();*/
        }
    }

    public function getLogout()
    {
    	Auth::logout();
    	return redirect()->route('login');
    }
}
