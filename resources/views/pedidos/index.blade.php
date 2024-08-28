<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de pedidos</title>
    <link 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script
    scr="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"> </script>
</head>
<body>
    <h1> pedidos</h1>
    <a href="{{ route('pedidos.create') }}">Adicionar pedidos<a>
    <ul>
        @foreach ($pedidos as $pedido)
        <li> {{ $pedido->nome }} -  {{ $pedido->numero }}
            <a href="{{ route('pedidos.show', $pedido->id) }}"> Ver</a>
            <a href="{{ route ('pedidos.edit', $pedido->id)}}">Editar</a>

            <form action="{{ route('pedidos.destroy', $pedido->id) }}" 
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