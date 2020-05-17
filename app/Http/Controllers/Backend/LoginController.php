<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
      public function getLogin()
    {
        return view('backend.login.login');
    }
    public function postLogin(LoginRequest $request)
    {
    	$email = $request->email;
    	$password = $request->password;

       if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
       	 return redirect('admin');
        }
        else{
        	return redirect()->back()->with('thongbao','Tài Khoản Hoặc Mật Khẩu Không Chính Xác!')->withInput();
        }
    }
}
