<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>咕咕咕</title>
</head>
<body>
<h1>
    咕咕咕,{{ $user }}
</h1>
{{strtolower($user)}}
@if(strlen($user) > 8)
    名字很长
@else
    名字不长
@endif
</body>
</html>
