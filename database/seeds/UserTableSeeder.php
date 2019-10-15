<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'insight', // nah ini buat seeder datanya
            'username' => 'insightnesia',
            'email' => 'insightnesia@insight.com',
            'password' => bcrypt('insight123'),
            'email_verified_at' => Carbon::now(),
            'created_at' =>  Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
    }
}
