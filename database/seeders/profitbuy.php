<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon as Carbon;

class profitbuy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $profitbuy = [
            [
                'mode' => 'BTC',
                'entrymin' => '0.05',
                'entrymedium' => '0.03',
                'entrymax' => '0.02',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'mode' => 'アルトシーズン',
                'entrymin' => '0',
                'entrymedium' => '0.05',
                'entrymax' => '0.05',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('profitbuy')->insert($profitbuy);

    }
}
