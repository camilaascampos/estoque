<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Editar Clientes </title>
        <link href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js">
        </script>
</head> 
        

<body>
    <h1> Editar pedidos </h1>
    <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>numero:</label>
        <input type="text" name="numero" value="{{$pedido->numero }}" required>
        <br>
        <label>Data;</label>
        <input type="text" name="data" value="{{$pedido->data }}" required>
        <br>
        <label>status:</label>
        <input type="text" name="status" value="{{$pedido->status }}" required>
        <br>
        <label>Item:</label>
        <input type="text" name="item" value="{{$pedido->item }}" required>
        <br>
        <button type="submit">Atualizar</button>
    </form>
        

   
</body>
</html>