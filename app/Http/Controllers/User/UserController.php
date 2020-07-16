<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Model\User;
use Validator;

class UserController extends Controller
{
    public function reg(){
        return view('user.reg');
    }
    public function regs(){
        $post=request()->except(['_token']);
        dd($post);
        $validator = Validator::make($post, [
            'u_name' => 'required|unique:Admin|max:20',
            'u_email' => 'required',
            'u_pwd' => 'required',
            'u_pwds'=>'required|between:6,20',
        ],[
            'admin_email.required'=>'管理员邮箱必填',
            'admin_name.required'=>'管理员名称必填',
            'admin_name.unique'=>'管理员名称已存在',
            'admin_tel.required'=>'管理员手机号必填',
            'admin_pwd.required'=>'管理员密码必填',
            'admin_pwd.between'=>'管理员密码必须是6致20为数字',
            'admin_pwds.required'=>'确认密码必填',
            'admin_pwds.same'=>'确认密码与密码不对必填',
        ]);
        if ($validator->fails()) {
            return redirect('/user/reg') ->withErrors($validator) ->withInput();die;
        }
    }
}
