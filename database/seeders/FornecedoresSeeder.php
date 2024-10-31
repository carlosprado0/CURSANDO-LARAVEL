<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedores;

class FornecedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
     public function run(): void
    {/*
    $fornecedores= new fornecedores();
    $fornecedores->name = 'Carlos';
    $fornecedores->site = 'carlosfornecedorb2b.com.br';

    $fornecedores->uf = 'GO';
    $fornecedores->email = 'carlosfornecedor@contato.com';
    $fornecedores->save();
    */
    \App\Models\Fornecedores::factory()->count(100)->create();
}

    
}
