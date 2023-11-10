<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>User_edit</h2>
<a href="/users">Users</a>

@if(session()->has('message'))
{{ session()->get('message') }}
@endif

<!-- adicionar esse metodo ao form: action="{{ route('users.update', $user->id) }}"  -->

<form method="POST">
    <!-- @csrf é necessario para que não de um erro na pagina. É mostrado o seguinte erro: 419 | Page Expired -->
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="name" value=" {{ $user->name }} ">
    <input type="text" name="email" value=" {{ $user->email }} ">
    <button type="submit">Enviar</button>
</form>
</body>
</html>

