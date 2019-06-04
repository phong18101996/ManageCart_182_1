<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\User;

class loginController extends Controller
{
    public function getLogin()
    {
        return view('layouts/login');
    }
    public function postLogin(Request $request)
    {


        $this->validate($request ,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập địa chỉ email',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Mật khẩu không được để trống',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự ',
                'password.max'=>'Mật khẩu không quá 20 kí tự'
            ]);
        $credentials = array('email'=>$request->email,'password'=>$request->password);
        if(Auth::attempt($credentials)) {
            return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
        } else {
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập thất bại']);
        }


    }
    public function postLogout()
    {
        Auth::logout();
        return redirect()->back();
    }


}

