<?php

namespace Database\Seeders;

use App\Models\test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class testSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        test::create([
            'name'=>'fulano',
            'idade' => 22,
            'data_nascimento'=>'2000-06-20'
        ]);
    }
}
