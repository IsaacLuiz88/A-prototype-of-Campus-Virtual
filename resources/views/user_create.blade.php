<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>User_create</h2>
<a href="/users">Users</a>

@if(session()->has('message'))
{{ session()->get('message') }}
@endif

<form action="{{ route('users.store')}}" method="POST">
    <!-- @csrf é necessario para que não de um erro na pagina. É mostrado o seguinte erro: 419 | Page Expired -->
    @csrf
    <input type="hidden" name="_method">
    <input type="text" name="name" placeholder="Your name">
    <input type="text" name="email" placeholder="Your email" value="@gmail.com">
    <input type="text" name="password" placeholder="Your password" value="123">
    <button type="submit">Create</button>
</form>

</body>
</html>