<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user->name = "adminQ";
        $user->email = "adminQ@gmail.com";
        $user->password = bcrypt("admin123");
        $user->save();
    }
}
