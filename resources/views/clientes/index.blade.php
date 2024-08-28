<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de clientes</title>
    <link 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script
    scr="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"> </script>
</head>
<body>
    <h1> clientes</h1>
    <a href="{{ route('clientes.create') }}">Adicionar clientes<a>
    <ul>
        @foreach ($clientes as $cliente)
        <li> {{ $cliente->nome }} -  {{ $cliente->email }}
            <a href="{{ route('clientes.show', $cliente->id) }}"> Ver</a>
            <a href="{{ route ('clientes.edit', $cliente->id)}}">Editar</a>

            <form action="{{ route('clientes.destroy', $cliente->id) }}" 
                method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit"> Excluir</button>
            </form>
        </li>
        @endforeach
    </ul> 


    
</body>
</html>