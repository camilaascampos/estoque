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
    <h1> Editar clientes </h1>
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nome:</label>
        <input type="text" name="nome" value="{{$cliente->nome }}" required>
        <br>
        <label>cpf;</label>
        <input type="text" name="cpf" value="{{$cliente->cpf }}" required>
        <br>
        <label>telefone:</label>
        <input type="text" name="telefone" value="{{$cliente->telefone }}" required>
        <br>
        <label>endereco:</label>
        <input type="text" name="endereco" value="{{$cliente->endereco }}" required>
        <br>
        <label>Email:</label>
        <input type="text" name="email" value="{{$cliente->email }}" required>
        <br>
  
        <button type="submit">Atualizar</button>
    </form>
        

   
</body>
</html>