<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use Illuminate\Support\Facades\DB;

class users extends Seeder
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
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('1234'),
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'binnaceKey' => 'rru3lgLTl3u7BKvNhmMrcqOjW7n2VW50yn4aF4xXygWgv8sLKM705UYnlusEklwN',
                'binnaceSecretKey' => 'dg1GzDyJzVnJBYPk06EfuZdAbzh9ZwOgieRpteyLIE6oHSptayXnnJydnYlo41ep',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'password' => bcrypt('1234'),
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'binnaceKey' => 'rru3lgLTl3u7BKvNhmMrcqOjW7n2VW50yn4aF4xXygWgv8sLKM705UYnlusEklwN',
                'binnaceSecretKey' => 'dg1GzDyJzVnJBYPk06EfuZdAbzh9ZwOgieRpteyLIE6oHSptayXnnJydnYlo41ep',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('users')->insert($users);

    }
}
