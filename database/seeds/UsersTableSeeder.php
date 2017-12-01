<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('secret'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'name' => 'anonymous',
                'email' => '',
                'password' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => Carbon::now(),
            ]
        ];
        DB::table('users')->insert($users);
    }
}
