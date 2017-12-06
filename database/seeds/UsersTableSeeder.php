<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\User;

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
                'enabled' => true,
            ],
            [
                'id' => 1000,
                'name' => 'anonymous',
                'email' => '',
                'password' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'enabled' => false,
            ]
        ];
        DB::table('users')->insert($users);

        $admin = User::findOrFail(1);
        $admin->update([
            'access_token' => $admin->createToken('dropzone')->accessToken
        ]);
        anonymous()->update([
            'access_token' => anonymous()->createToken('dropzone')->accessToken
        ]);
    }
}
