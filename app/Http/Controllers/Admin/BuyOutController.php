<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use adman9000\binance\BinanceAPI;
use Illuminate\Support\Facades\DB;

class BuyOutController extends Controller
{
    //
    public function index()
    {
        // $signal=array(
        //     'mark' => 'SNGLS',
        //     'mode' => 'BTC',
        //     'entrymin' => '0.00000048',
        //     'entrymax' => '0.00000059',
        //     'profitfirst' => '0.00000062',
        //     'profitsecond' => '0.00000065',
        //     'profitthird' => '0.00000071',
        //     'lossprofit' => '0.00000046'
        // );
        // $buysetting=array(
        //     'topbuy' => $signal['entrymax'],
        //     'mediumbuy' => $signal['entrymax']-$signal['entrymin'],
        //     'bottombuy' => $signal['entrymin']
        // );
        // $brand = $signal['mark'].$signal['mode'];
        $results = DB::select('select binanceKey,binanceSecretKey from users where status = ?', array(1));
        foreach($results as $user){
            $binance=new BinanceAPI($user);
            // $btc_amount = $binance->cancelOrder('ALICEBTC','22614385','22OrlRtMTjeSNvRFQT3Yss');
            // print_r($btc_amount);
            // $btc_amount = $binance->getOpenOrders('ALICEBTC');
            // foreach($btc_amount as $coin){
            //     $price = $binance->getTicker($coin['asset'].'BTC');
            //     if(isset($price['code'])){
            //        continue;
            //     }else{
            //          $amount=$coin['free']*$price['price'];
            //         if($amount>0.0001){
            //             $buyresult=$binance->marketSell($coin['asset'].'BTC', 51.94800000);
            //         }
            //     }
               
            // }
            // $val=$current_btc_amount/30;
            // echo $val;
            // $price = $binance->getTicker($brand);
            // print_r($price);
            // $buyresult=$binance->marketBuy('MDTBTC', 500);
            // $rate=DB::table('profitbuy')->select('entrymin','entrymedium','entrymax')->get();
            // $buyresult=$binance->limitBuy('UTKBTC', 40,'0.00000700');
            // if($buyresult['code']=="-2010"){
            //     print_r("アカウントの残高が要求されたアクションに対して不十分です");
            // }
        //     $buyresult=$binance->limitSell('MDTBTC', 500,'0.00000131','0.00000065');
        //   print_r($buyresult);
            // print_r($binance->getBalances());
            print_r($binance->getOpenOrders());
            // print_r($binance->cancelAllOrder('UTKBTC'));

            // if($price){
                
            // }
            
        }
        // $this->buy();
        // return view('admin.buyoutlog');
    }
    public function buy(){
        
    }
   
    /**
     * the time when the signal is recived
     * 
     * get the btc amount of current account
     * get the price of the received coin.
     * btc_amount/receved_coin_price/%count
     * start the limit buy due to the signal.
     * if error is occured print the errors.
     * if the coin's price overlap the first profit,cancel the coin's buy order
     * 
     * put the order sell due to the amount of current coin.
     * (1,2,3 step)
     * 
     * 
     */
}

