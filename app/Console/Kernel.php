<?php

namespace App\Console;
use Illuminate\Support\Facades\DB;
use adman9000\binance\BinanceAPI;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Events\OrderSellEvent;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->job(
            function(){
                $users=DB::select('select binanceKey,binanceSecretKey from users where status = ?', array(1));
                foreach($users as $user){
                    $binance=new BinanceAPI($user);
                    
                    $btc_amount = $binance->getBalances();
                    if($btc_amount){
                        foreach($btc_amount as $val){
                            if($val['free']>=0.01){
                                $price=DB::select('SELECT firstprofit,secondprofit,thirdprofit FROM signals WHERE  mark=? and ID = (SELECT MAX(ID) FROM signals)',array($val['asset']));
                                if(empty($price)){
                                    // print_r("信号がありません。");
                                    print_r("no signal ");
                                    continue;
                                }
                                $rate=DB::select('SELECT firstprofit,secondprofit,thirdprofit FROM profitsell WHERE  mode=?',array('BTC'));
                                if(($val['free']*$rate[0]->secondprofit)>=0.01){
                                    $buyresult=$binance->limitSell('ALICEBTC', $val['free']*$rate[0]->firstprofit,$price[0]->firstprofit,$price[0]->lossprofit);
                                    if(($val['free']*$rate['thirdprofit'])>=0.01){
                                        $buyresult=$binance->limitSell('ALICEBTC', $val['free']*$rate[0]->secondprofit,$price[0]->secondprofit,$price[0]->firstprofit);
                                        $buyresult=$binance->limitSell('ALICEBTC', $val['free']*$rate[0]->thirdprofit,$price[0]->thirdprofit,$price[0]->secondprofit);
                                    }else{
                                        $buyresult=$binance->limitSell('ALICEBTC', $val['free']*($rate[0]->secondprofit+$rate[0]->thirdprofit),$price[0]->secondprofit,$price[0]->firstprofit);
                                    }
                                }else{
                                    $buyresult=$binance->limitSell('ALICEBTC', $val['free'],$price[0]->firstprofit,$price[0]->lossprofit);
                                }
                                if(empty($buyresult['code'])){
                                    continue;
                                }else{
                                    // print_r("アカウントの残高が要求されたアクションに対して不十分です");
                                    print_r("account is not confident");
                                }
                            }
                        }
                    }
                }
            }
        )->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
