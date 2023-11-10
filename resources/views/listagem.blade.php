<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de usuarios </title>
</head>
<body>
    <li>
        <ul>
            @foreach($users as $user)
                <li>
                    {{ $user->name }} | 
                    {{ $user->email }} |
                    {{ $user->password }} | <a href=" {{ route('users.edit', ['user'=>$user->id]) }} ">&#9989;</a> | <a href="{{ route('users.show',['user'=>$user->id]) }}">&#128465;</a>
            @endforeach
        </ul>
    </li>
</body>
</html>