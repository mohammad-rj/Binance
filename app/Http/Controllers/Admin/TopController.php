<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Telegram\Bot\Api;
class TopController extends Controller
{
    //
    public function index()
    {
        $telegram = new Api('BOT TOKEN');
        $updates = $telegram->getUpdates();
        $response = $telegram->getMe();
        // Laravel
        $response = Telegram::getMe();

        $botId = $response->getId();
        $firstName = $response->getFirstName();
        $username = $response->getUsername();
        echo $botId."\r\n";
        echo $firstName."\r\n";
        echo $username."\r\n";
        //return view('admin.top');
    }
}
