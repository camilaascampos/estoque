<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Ver Produto</title>
    <link href=" https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel= "strylesheet">
    <script
    scr="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>


<body>

    <h1> {{ $produto->nome }} </h1>
    <p> Validade: {{ $produto->validade }}</p>
    <p> Peso: {{ $produto->peso }}</p>
    <p> Tamanho: {{ $produto->tamanho }}</p>
    <p> preço: {{ $produto->preco }}</p>
    <p> Codigo do Produto: {{ $produto->Cod_produto }}</p>
    <a href="{{ route('produtos.index') }}">Voltar</a>
    
</body>
</html>