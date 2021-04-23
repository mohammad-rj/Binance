<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon as Carbon;

class profitsell extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $profitsell = [
            [
                'mode' => 'BTC',
                'firstprofit' => '0.8',
                'secondprofit' => '0.1',
                'thirdprofit' => '0.1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'mode' => 'アルトシーズン',
                'firstprofit' => '0.5',
                'secondprofit' => '0.5',
                'thirdprofit' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('profitsell')->insert($profitsell);

    }
}
