<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>{{$title}}</h1>

    <ul>
        <li><a href="{{ route('articoli')}}">Articoli</a></li>
        <li><a href="{{ route('contatti')}}">Chi sono</a></li>
    </ul>

</body>
</html>