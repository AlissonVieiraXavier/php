<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    protected $table = 'tests';
    protected $fillable = ['nome','data_nascimento','idade']; 
}
