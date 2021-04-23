<?php

namespace App\Listeners;

use App\Events\OrderSellEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class OrderSellListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderSellEvent  $event
     * @return void
     */
    public function handle(OrderSellEvent $event)
    {
        //
        
    }
}
