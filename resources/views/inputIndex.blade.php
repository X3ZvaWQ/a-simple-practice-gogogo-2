<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MessageBoard</title>
</head>
<style>
    body{
        background-image: url("{{ URL::asset('images/BackgroundAdd.jpg') }}");
    }
    .whole{
            display: block;
            margin:0 auto;
            width: 800px;
            text-align: center;
            color:aliceblue;
            background-color: rgba(0, 0, 0, 0.5);

        }
    table,tr,td{
        border:1px solid gray;
        width: 800px;
    }
    a#edit:link{color:aliceblue;}
    a#edit:hover{color:gray;}
</style>
<body>
<br/><br/><br/><br/><br/>
    <div class="whole">
    <table>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>SUGGESTION</td>
            <td></td>
        </tr>
        @foreach ($ref as $item)
        <tr>
            <td>{{ $item -> id }}</td>
            <td>{{ $item -> username }}</td>
            <td>{{ $item -> content }}</td>
        <td><a id="edit" href="/MessageBoard/edit/{{ $item -> id }}">EDIT</a></td>
        </tr>
        @endforeach
    </table>
    </div>
</body>
</html>
