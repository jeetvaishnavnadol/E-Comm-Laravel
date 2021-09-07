<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")
        ->insert([
            'name'=>'mohit',
            'email'=>'mohit@gmail.com',
            'password'=>Hash::make('as1234')
        ]);
        //
    }
}
