<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProfitManagement extends Controller
{
    //
    public function index()
    {
        $btcbuy=DB::select('select entrymin,entrymedium,entrymax from profitbuy where id=1');
        $altobuy=DB::select('select entrymin,entrymedium,entrymax from profitbuy where id=2');
        $btcsell=DB::select('select firstprofit,secondprofit,thirdprofit from profitsell where id=1');
        $altosell=DB::select('select firstprofit,secondprofit,thirdprofit from profitsell where id=2');
        $data=array('btcbuy'=>$btcbuy[0],'altobuy'=>$altobuy[0],'btcsell'=>$btcsell[0],'altosell'=>$altosell[0]);
        return view('admin.profitmanagement',compact('data'));
    }
    
    public function buysetting(Request $request){
        $validator=Validator::make($request->all(), [
            'btcentrymax' => 'required|numeric',
            'btcentrymedium' => 'required|numeric',
            'btcentrymin' => 'required|numeric',
            'altoentrymax' => 'required|numeric',
            'altoentrymedium' => 'required|numeric',
            'altoentrymin' => 'required|numeric'
        ],
        [
            'btcentrymax.numeric'    => '数を入力してください。',
            'btcentrymedium.numeric'    => '数を入力してください。',
            'btcentrymin.numeric'    => '数を入力してください。',
            'altoentrymax.numeric'    => '数を入力してください。',
            'altoentrymedium.numeric'    => '数を入力してください。',
            'altoentrymin.numeric'    => '数を入力してください。'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)
                        ->withInput();
        }
        $data=$request->all();
        $results = DB::update('update profitbuy set entrymax=?,entrymedium=?,entrymin=? where id=1',array($data['btcentrymax'],$data['btcentrymedium'],$data['btcentrymin']));
        $results = DB::update('update profitbuy set entrymax=?,entrymedium=?,entrymin=? where id=2',array($data['altoentrymax'],$data['altoentrymedium'],$data['altoentrymin']));
        \Session::flash('message', '正常に更新されました!');
        return view('admin.profitmanagement');
    }

    public function sellsetting(Request $request){
        $validator=Validator::make($request->all(), [
            'btcfirstprofit' => 'required|numeric',
            'btcsecondprofit' => 'required|numeric',
            'btcthirdprofit' => 'required|numeric',
            'altofirstprofit' => 'required|numeric',
            'altosecondprofit' => 'required|numeric',
            'altothirdprofit' => 'required|numeric',
        ],
        [
            'btcfirstprofit.numeric'    => '数を入力してください。',
            'btcsecondprofit.numeric'    => '数を入力してください。',
            'btcthirdprofit.numeric'    => '数を入力してください。',
            'altofirstprofit.numeric'    => '数を入力してください。',
            'altosecondprofit.numeric'    => '数を入力してください。',
            'altothirdprofit.numeric'    => '数を入力してください。',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)
                        ->withInput();
        }
        $data=$request->all();
        $results = DB::update('update profitsell set firstprofit=?,secondprofit=?,thirdprofit=? where id=1',array($data['btcfirstprofit'],$data['btcsecondprofit'],$data['btcthirdprofit']));
        $results = DB::update('update profitsell set firstprofit=?,secondprofit=?,thirdprofit=? where id=2',array($data['altofirstprofit'],$data['altosecondprofit'],$data['altothirdprofit']));
        \Session::flash('message', '正常に更新されました!');
        return view('admin.profitmanagement');
    }
}
