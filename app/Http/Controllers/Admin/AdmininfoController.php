<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AdmininfoController extends Controller
{
    //
    public function index()
    {
        return view('admin.admininfo');
    }
    
    public function register(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required', //|size:11
        ],
        [
            'password.required'    => 'パスワードを入力してください。',
            'password.min'    => 'パスワードは6文字以上である必要があります。',
            'password.confirmed'    => 'パスワード確認入力が正しくありません。',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)
                        ->withInput();
        }
        $data=$request->all();
        $results = DB::update('update users set name=?,email=?,password=? where role=9999',array($data['name'],$data['email'],Hash::make($data['password'])));
        \Session::flash('message', '正常に更新されました!');
        return view('admin.admininfo');
    }
}
