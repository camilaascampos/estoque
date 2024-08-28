<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Ver pedido</title>
    <link href=" https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel= "strylesheet">
    <script
    scr="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>


<body>

    <h1> {{ $pedido->numero }} </h1>
    <p> numero: {{ $pedido->numero }}</p>
    <p> data: {{ $pedido->data }}</p>
    <p> status: {{ $pedido->status }}</p>
    <p> item: {{ $pedido->item }}</p>
    <a href="{{ route('pedidos.index') }}">Voltar</a>
    
</body>