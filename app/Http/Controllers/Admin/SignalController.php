<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Signal;

class SignalController extends Controller
{
    public function index()
    {
        $signals = Signal::paginate(12);
        return view('admin.signal' ,compact('signals'));
    }
    public function receiveSignal(Request $request)
    {
        $signal = new Signal;
       // $chat_id = $request['message']['chat']['id'];
        //$username = $request['message']['from']['username'];
        $text = "銘柄：KAVA
        建玉：BTC
        エントリーポイント：0.00008500～0.00010900
        第１利確ポイント：0.00011445
        第２利確ポイント：0.00012000
        第３利確ポイント：0.00013220++
        損切りポイント：0.00008000";
        $signal_data = $text;//$request['message']['text'];
        $signal_data = str_replace(' ', '', $signal_data);
        $signal_list = explode("\r\n",$signal_data);
        if(count($signal_list) == 7)
        {
            for($i = 0; $i < count($signal_list); $i++)
            {
                $signal_entry = explode("：" , $signal_list[$i]);
                if(count($signal_entry) == 2)
                {
                    switch($signal_entry[0])
                    {
                        case "銘柄":
                            $signal->mark = $signal_entry[1];
                            break;
                        case "建玉":
                            $signal->mode = $signal_entry[1];
                            break;
                        case "エントリーポイント":
                            var_dump($signal_entry[1]);
                            $entries = explode("～",$signal_entry[1]);
                            var_dump($entries);
                            if(count($entries) ==2 )
                            {
                                $signal->entrymin = $entries[0];
                                $signal->entrymax = $entries[1];
                            }
                            else{
                                dd("error Message min max");
                            }
                            break;
                        case "第１利確ポイント":
                            $signal->firstprofit = $signal_entry[1];
                            break;
                        case "第２利確ポイント":
                            $signal->secondprofit = $signal_entry[1];
                            break;
                        case "第３利確ポイント":
                            $signal->thirdprofit = $signal_entry[1];
                            break;
                        case "損切りポイント":
                            $signal->lossprofit = $signal_entry[1];
                            break;
                    }
                }
                else{
                    var_dump($signal_entry);
                    dd("error message");
                }

            }
            $signal->receivetime = date("Y-m-d H:i:s");
            $signal->save();

        }
        else{
            dd("normal message size not 7");
        }
    }
}
