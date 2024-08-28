<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Ver cliente</title>
    <link href=" https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel= "strylesheet">
    <script
    scr="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>


<body>

    <h1> Nome: {{ $cliente->nome }} </h1>
    <p> cpf: {{ $cliente->cpf }}</p>
    <p> telefone: {{ $cliente->telefone }}</p>
    <p> endereco: {{ $cliente->endereco }}</p>
    <p> Email: {{ $cliente->email }}</p>
    <a href="{{ route('clientes.index') }}">Voltar</a>
    
</body>
</html>