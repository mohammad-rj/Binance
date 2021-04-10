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
        $users = [
            [
                'mode' => 'BTC',
                'entrymin' => '5',
                'entrymedium' => '3',
                'entrymax' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'mode' => 'アルトシーズン',
                'entrymin' => '0',
                'entrymedium' => '5',
                'entrymax' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('profitbuy')->insert($users);

    }
}
