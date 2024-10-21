<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fornecedores</title>
</head>
<body>
    <h1>Fornecedores</h1>
    {{-- Comentario puro do Blade --}}


    {{-- Enquanto (if) executa se o retorno for true --}}
    @php
    // CONDIÇÃO TERNARIA
    $TesteCNPJ = isset($fornecedores[1]['CNPJ']) ? 'CNPJ informado' : 'CNPJ não informado';
    echo $TesteCNPJ;
    
    // Para comentarios de uma unica linha

        /*
            Para comentarios de multiplas linhas
        */
   

    /*
    @if (count($fornecedores) > 0 && count($fornecedores)< 10)
        <h4>Há fornecedores em sua lista</h4>
    @elseif (count($fornecedores) > 10)
        <h4>Há muitos fornecedores em sua lista</h4>
    @else 
        <h4>Não há fornecedores em sua lista</h4>
    @endif
    */
     @endphp

<br>
<hr>
{{--Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}

@if ( !($fornecedores[0]['status'] == 'Disponivel'))
    Fornecedor Indisponivel
@endif
<br>
<hr>
--}}

{{-- (unless) da o retorno de false --}}
@unless($fornecedores[0] ['status'] == 'Disponivel')
    Fornecedor Indisponivel
@endunless

@isset($fornecedores)

    {{-- (foreach e forelse) ja faz o loop  --}}

    @forelse($fornecedores as $indice => $fornecedor)
    
    Fornecedor: {{ $fornecedor['nome'] }}
<br>
    Status: {{ $fornecedor['status'] }}
<br>
    CNPJ: {{ $fornecedor['CNPJ'] ?? 'Dado não preenchido'}}
<br>
    Celular: {{ $fornecedor['DDD'] ?? 'Dado não preenchido'}} {{ $fornecedor['Celular'] ?? ''}}
<hr>
total de Registros: {{ $loop->count }}
@empty
    Não existe fornecedores cadastrados!
{{--@switch($fornecedores[$i]['DDD'])
    @case('11')
    São Paulo - SP
    @break
    @case('62')
    Jaragua - GO
    @break
    @case('63')
    Brasilia - DF
    @break
    @default
@endswitch --}}
<hr>
@endforelse
@endisset
</body>
</html>