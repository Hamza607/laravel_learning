<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Page </h1>
    <ul>
        @foreach($name as $n)
            <li>{{ $n }}</li>
        @endforeach
    </ul>
    <ul>
        list of users
        @for($i = 0; $i < 10; $i++)
            <li>Current loop value  : {{ $i }}</li>
        @endfor
    </ul>
</body>
</html>