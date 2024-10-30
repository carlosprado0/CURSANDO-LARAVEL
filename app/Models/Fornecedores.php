<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedores extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'fornecedores';
    protected $fillable = ['name', 'site', 'uf', 'email'];
}