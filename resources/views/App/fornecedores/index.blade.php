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

{{-- (unless) da o retorno de false --}}

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}

@if ( !($fornecedores[0]['status'] == 'Disponivel'))
    Fornecedor Indisponivel
@endif
<br>
@unless($fornecedores[0] ['status'] == 'Disponivel')
    Fornecedor Indisponivel
@endunless
  
</body>
</html>