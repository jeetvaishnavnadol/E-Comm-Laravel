<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB; 

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('products')->insert(
     
   
    [
        'name'=>'Mi Tv',
        'price'=>'42500',
        'description'=>'A tv with 40 cm display retina display ',
        'category'=>'Televission',
        'gallary'=>'file:///C:/Users/Jeet/Desktop/project/tv.jpeg',
    ]
    );
        //
    }
}
