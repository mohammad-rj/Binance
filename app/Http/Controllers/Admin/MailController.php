<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function index()
    {
        return view('admin.mail');
    }
    public function save(Request $request)
    {
        // $validator=Validator::make($request->all(), [
        //     'name' => 'required|string|unique:users',
        //     'email' => 'required|string|email|unique:users',
        //     'password' => 'required|string|min:6|confirmed',
        //     'password_confirmation' => 'required', //|size:11
        // ],
        // [
        //     'name.required'  => '名前を入力してください。',
        //     'name.string'  => '名前に特殊記号が含まれていました。正確に入力してください。',
        //     'name.unique'  => '文字の数が255個を克服できません。',
        //     'email.required'    => 'メールアドレスを入力してください。',
        //     'email.unique'    => 'このメールアドレスは既に存在します。',
        //     'email.email'    => 'メールを正確に入力してください。',
        //     'email.max'    => '文字の数が255個を克服できません。',
        //     'password.required'    => 'パスワードを入力してください。',
        //     'password.min'    => 'パスワードは6文字以上である必要があります。',
        //     'password.confirmed'    => 'パスワード確認入力が正しくありません。',
        // ]);
        // if ($validator->fails()) {
        //     return view('admin.admininfo')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
        $data=$request->all();
        $results = DB::insert('insert  into mailhistory ',array($data['name'],$data['email'],$data['password']));
        \Session::flash('message', '正常に更新されました!');
        return view('admin.admininfo');
    }
    public function send(){
        $data=$request->all();
    }
}
