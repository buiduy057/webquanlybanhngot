<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('companies')->insert([
            'name' => 'Quán bánh kem IQ',
            'address' => '11 Lê Văn sỹ, Hòa Khánh ,Thành Phố Đà Nẵng', 
            'phone'=>'0386556593', 
            'email'=>'webbanhkem02022018@gmail.com',         
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d")
        ]);
    }
}
