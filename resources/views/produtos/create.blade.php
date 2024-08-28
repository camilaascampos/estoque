<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Porduto</title>
    <link 
    href= "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel ="stylesheet">

    <script 
    scr="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <br>
        <label>Validade;</label>
        <input type="date" name="validade" required>
        <br>
        <label>Peso:</label>
        <input type="text" name="peso"  required>
        <br>
        <label>Tamanho:</label>
        <input type="text" name="tamanho" required>
        <br>
        <label>Preço:</label>
        <input type="text" name="preco" required>
        <br>
        <label> Codigo do Produto </label>
        <input type="text" name="cod_produto" required>
        <br>

        <button type="submit">Salvar</button>
    </form>
        


</body>
</html>