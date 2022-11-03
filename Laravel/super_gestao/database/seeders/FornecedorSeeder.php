<?php

namespace Database\Seeders;

use App\Models\Fornecedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$fornecedor = new Fornecedor();
        //$fornecedor->name = 'seedName';
        //$fornecedor->uf = 'BR';
        //$fornecedor->email = 'emailteste@teste.com';
        //$fornecedor->save();

        Fornecedor::create([
            'nome' => 'tete',
            'uf' => 'AM',
            'email' => 'tete@teste.com',
            'site'=>'www.dd.com.br'
        ]);

    }
}
