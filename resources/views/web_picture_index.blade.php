<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>web照片墙</title>
    <style type="text/css">
     *{
    padding: 0;
    margin: 0;    
    }
    .image{
    width: 660px;
    height: 660px;
    margin:0px auto;
    }
    li{
        list-style: none;
        float: left;
        width: 200px;
        height: 200px;
        margin: 10px;
    }
    </style>
</head>
<body>
    <div class="image">
    @foreach ($href as $qq)
    <li><img src="{{ $qq }}"></li>
    @endforeach
    </div>
</body>
</html>