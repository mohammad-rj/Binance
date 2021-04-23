<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use Illuminate\Support\Facades\DB;

class signals extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Add the master administrator, user id of 1
        $signals=[
            [
            'mark' => 'ALICE',
            'mode' => 'BTC',
            'entrymin' => '0.00017000',
            'entrymax' => '0.00019900',
            'firstprofit' => '0.00020890',
            'secondprofit' => '0.00021940',
            'thirdprofit' => '0.00024140',
            'lossprofit' => '0.00016000'
            ],
           
        ];

        DB::table('signals')->insert($signals);

    }
}
