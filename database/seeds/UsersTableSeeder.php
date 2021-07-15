<?php

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
        for($i = 2; $i<=10; $i++){
            $user = new \App\User([
                'id' => $i,
                'name' => '名前'.$i,
                'email' => 'email'.$i.'@email.com',
                'password' => "password".$i,
            ]);
            $user -> save();
        }
    }
}
