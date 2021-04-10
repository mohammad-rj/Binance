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
        $users = [
            [
                'mode' => 'BTC',
                'firstprofit' => '80',
                'secondprofit' => '10',
                'thirdprofit' => '10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'mode' => 'アルトシーズン',
                'firstprofit' => '80',
                'secondprofit' => '10',
                'thirdprofit' => '10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('profitsell')->insert($users);

    }
}
