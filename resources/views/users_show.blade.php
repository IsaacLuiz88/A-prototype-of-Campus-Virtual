<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>User Show - {{ $user->name }} </h2>
<a href="/users">Users</a>

<form action="{{ route('users.destroy', ['user'=> $user->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Delete</button>

</body>
</html>