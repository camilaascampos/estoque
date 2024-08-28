<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Ver fornecedor</title>
    <link href=" https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel= "strylesheet">
    <script
    scr="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>


<body>

    <h1> {{ $fornecedor->nome }} </h1>
    <p> nome: {{ $fornecedor->nome }}</p>
    <p> cnpj: {{ $fornecedor->cnpj }}</p>
    <p> endereco: {{ $fornecedor->endereco }}</p>
    <p> telefone: {{ $fornecedor->telefone }}</p>
    <p> Tipo de fornecedor: {{ $fornecedor->tipo_de_fornecedor }}</p>
    <a href="{{ route('fornecedors.index') }}">Voltar</a>
    
</body>