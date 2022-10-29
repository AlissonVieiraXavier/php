<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //use HasFactory;
    protected $table = 'fornecedores';
    protected $fillable = ['nome','uf','email'];


}
//tinker;
//>>> \App\Models\Fornecedor::create(['nome'=>'hu','uf'=>'PR','email'=>'email@email.com']);