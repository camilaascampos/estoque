<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de fornecedors</title>
    <link 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script
    scr="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"> </script>
</head>
<body>
    <h1> fornecedors</h1>
    <a href="{{ route('fornecedors.create') }}">Adicionar fornecedors<a>
    <ul>
        @foreach ($fornecedors as $fornecedor)
        <li> {{ $fornecedor->nome }} -  {{ $fornecedor->tipo_de_fornecedor }}
            <a href="{{ route('fornecedors.show', $fornecedor->id) }}"> Ver</a>
            <a href="{{ route ('fornecedors.edit', $fornecedor->id)}}">Editar</a>

            <form action="{{ route('fornecedors.destroy', $fornecedor->id) }}" 
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