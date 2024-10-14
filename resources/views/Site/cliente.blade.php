<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cliente</title>
</head>
<body>

    <h4>Pagina do Cliente(view)</h4>
    
    <ul>
        <li>
            <a href="{{ route('site.index') }}">Principal</a>
        </li>
        <li>
            <a href="{{ route('site.contato') }}">Contato</a>
        </li>
        <li>
            <a href="{{ route('site.nos') }}">Nos</a>
        </li>
    </ul>

</body>
</html>