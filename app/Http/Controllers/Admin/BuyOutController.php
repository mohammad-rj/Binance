<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use adman9000\binance\BinanceAPI;

class BuyOutController extends Controller
{
    //
    public function index()
    {
        $binance=new BinanceAPI();
        print_r($binance->getMarkets());
        // print_r($binance->getOpenOrders());
        // return view('admin.buyoutlog');
    }
}
