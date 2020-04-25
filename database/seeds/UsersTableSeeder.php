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
         $faker = Faker\Factory::create();
         DB::table('users')->insert([
           'name'=> 'duy', 
           'email'=> 'buiduy057@gmail.com',  
            'phone'=>'0386556593',
            'address'=>'11 Lê văn sỹ, Đà Nẵng',
            'level' =>'1',
            'password'=>bcrypt('123123'),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('users')->insert([
           'name'=> 'thao', 
           'email'=> 'hoangthithao2101@gmail.com',
            'phone'=>'0386556593',
            'address'=>'11 Lê văn sỹ, Đà Nẵng',  
            'level' =>rand(0, 1),
            'password'=>bcrypt('123123'),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
          DB::table('users')->insert([
            'name'=> 'mai', 
            'email'=> 'mai555@gmail.com', 
            'phone'=>'0386556593',
            'address'=>'11 Lê văn sỹ, Đà Nẵng', 
            'level' =>rand(0, 1),
            'password'=>bcrypt('123123'),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
    }
}
