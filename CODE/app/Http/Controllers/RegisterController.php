<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\User;

class RegisterController extends Controller
{
    public function getRegister()
    {
        return view('layouts/register');
    }
    public function postRegister(Request $req)
    {
        $this->validate($req,
            [
                'email' =>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'name'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng Nhập email',
                'email.email'=>'không đúng định dạng  email',
                'email.unique'=>'email đã có người sử dụng',
                'password.required'=>'vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không trùng khớp',
                'password.min'=>'Mật Khẩu ít nhất 6 kí tự'
            ]
        );
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email ;
        $user->password = Hash::make($req->password);

        $user->address = $req->address ;
        $user->mobile = $req->mobile ;
        $user->gender = $req->gender ;

        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }
}
