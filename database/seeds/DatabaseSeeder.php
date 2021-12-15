<?php

use Illuminate\Database\Seeder;
use App\Scholarship;
use App\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Scholarship::create([
            'name' => "Batch 1",
            'startStepOne' => date("2021-12-01"),
            'endStepOne' => date("2021-12-02"),
            'announceStepOne' => date("2021-12-03"),
            'startStepTwo' => date("2021-12-04"),
            'endStepTwo' => date("2021-12-05"),
            'announceStepTwo' => date("2021-12-06"),
            'onlineTest' => "https://facebook.com",
            'status' => 1,
        ]);

        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@kynesia.com',
            'password' => Hash::make("superadmin123"),
            'role' => 1,
            'status' => 1,
        ]);
    }
}
