<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        User::create([
            "first_name"    =>  "Donald",
            "last_name"     =>  "Miguel",
            "email"         =>  "donald@simple.com",
            "address"     =>    "No.1 Olufemi Samson Street Ilasamaja",
            "phone"         =>  "09089457312",
            "city"          =>  "Lagos",
            "password"      =>  Hash::make("password"),
            "zip_code"      =>  "1004"
        ]);
    }
}

