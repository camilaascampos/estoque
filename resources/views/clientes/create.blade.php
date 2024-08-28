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
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <br>
        <label>cpf;</label>
        <input type="text" name="cpf" required>
        <br>
        <label>telefone:</label>
        <input type="text" name="telefone"  required>
        <br>
        <label>endereco:</label>
        <input type="text" name="endereco" required>
        <br>
        <label>email:</label>
        <input type="text" name="email" required>
        <br>
    

        <button type="submit">Salvar</button>
    </form>
        
   
</body>
</html>