<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
</head>
<body>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <input type="text" placeholder="assunto" name="subject">
        <textarea name="description" placeholder="descrição" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="enviar">
    </form>
</body>
</html>
