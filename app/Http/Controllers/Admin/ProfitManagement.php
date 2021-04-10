<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfitManagement extends Controller
{
    //
    public function index()
    {
        return view('admin.profitmanagement');
    }
    
    public function buysetting(Request $req){
        $userdata = $req->all();
        $returndata = "";
        $data = DB::select('select * from profitbuy where email = ?', [$userdata['email']]);

        if (count($data) > 0) {
            $returndata = "すでにそのような識別子のユーザーが存在します";
        }
        else{
            $now = date("y-m-d");
            $shopid = null;
            $shop = DB::select("select id from shop where name = ? and area = ?", [$userdata['shopname'], $userdata['shoparea']]);
            if(count($shop)>0)
            {
                $shopid = $shop[0]->id;
            }
            else
            {
                DB::insert('INSERT INTO shop(name,area) VALUES(?,?)', [$userdata['shopname'], $userdata['shoparea']]);
                $shop = DB::select("select id from shop where name = ? and area = ?", [$userdata['shopname'], $userdata['shoparea']]);
                $shopid = $shop[0]->id;
            }
           
            DB::insert('INSERT INTO stylist(name_m, name_s,  email, password, shop, shoparea,company,regdate) VALUES(?,?,?,md5(?),?,?,?,?)',
            [$userdata['name_m'],$userdata['name_s'], $userdata['email'], $userdata['password'], $shopid, $userdata['shoparea'], $userdata['company'],$now]);
            DB::update('UPDATE shop set user_id = (select id from stylist where email = ?) where id = ?',[$userdata['email'], $shopid ]);
            $req->session()->put('email', $userdata['email']);
            $req->session()->put('userpwd', $userdata['password']);
            $req->session()->put('role', "stylist");
            $returndata = "true";
        }
        echo $returndata;
        DB::table('profitbuy')->insert($userdata);
    }

    public function sellsetting(Request $req){
        $userdata = $req->all();
        print_r($userdata);
    }
}
