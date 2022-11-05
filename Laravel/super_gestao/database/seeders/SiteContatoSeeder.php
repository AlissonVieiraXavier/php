<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*  SiteContato::create([
            'name' =>'Fabricio',
            'telefone' => '4166666666',
            'email' => 'testew@teste.com',
            'mensagem'=>'iametekudesai',
            'motivo_contato'=> 1
        ]); */
        //factory(SiteContatoFactory::class,30)->create();
        SiteContato::factory()->count(100)->create();
    }
}
