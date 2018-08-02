<?php

use Illuminate\Database\Seeder;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            "name"          =>  "Donald",
            "email"         =>  "donald@simple.com",
            "job_title"     =>  "Engineer",
            "password"      =>  Hash::make("password")
        ]);
    }
}
