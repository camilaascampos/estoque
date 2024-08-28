<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Editar Fornecedores </title>
        <link href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js">
        </script>
</head> 
        

<body>
    <h1> Editar fornecedors </h1>
    <form action="{{ route('fornecedors.update', $fornecedor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nome:</label>
        <input type="text" name="nome" value="{{$fornecedor->nome }}" required>
        <br>
        <label>Validade;</label>
        <input type="text" name="cnpj" value="{{$fornecedor->cnpj }}" required>
        <br>
        <label>Peso:</label>
        <input type="text" name="endereco" value="{{$fornecedor->endereco }}" required>
        <br>
        <label>Tamanho:</label>
        <input type="text" name="telefone" value="{{$fornecedor->telefone }}" required>
        <br>
        <label> Tipo de fornecedor </label>

        <input type="text" name="tipo_de_fornecedor" value="{{$fornecedor->tipo_de_fornecedor }}" required>
        <button type="submit">Atualizar</button>
    </form>
        

   
</body>
</html>