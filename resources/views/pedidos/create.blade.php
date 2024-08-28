<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar pedido</title>
    <link 
    href= "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel ="stylesheet">

    <script 
    scr="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <form action="{{ route('pedidos.store') }}" method="POST">
        @csrf
        <label>numero:</label>
        <input type="text" name="numero" required>
        <br>
        <label>data;</label>
        <input type="date" name="data" required>
        <br>
        <label>status:</label>
        <input type="text" name="status"  required>
        <br>
        <label>item:</label>
        <input type="text" name="item" required>
        <br>
    
        

        <button type="submit">Salvar</button>
    </form>
        


</body>
</html>