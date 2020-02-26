<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{
            background-image: url("{{ URL::asset('images/BackgroundAdd.jpg') }}");
            text-align: center;
        }
        .whole{
            display: block;
            margin: 0 auto;
            width: 400px;
            text-align: center;
        }
        #input{
            background-color:rgba(0, 0, 0, 0.5);
            border: none;
            margin:0 auto;
            width: 400px;
            height: 50px;
            font-size: 1rem;
            color:aliceblue;
            border-bottom:1px solid aliceblue;
        }
        input::-webkit-input-placeholder{
            color: aliceblue;
            font-weight: lighter;
        }
        #textarea{
            width:400px;
            border: none;
            font-size: 1rem;
            background-color: rgba(0, 0, 0, 0.5);
        }
        textarea::-webkit-input-placeholder{
            color: aliceblue;
            font-size: 1rem;
            font-weight: lighter;
        }
        .topic{
            color: aliceblue;
            font-size: 3rem;
            font-weight: lighter;
            margin-top: 50px;
            margin-bottom: 30px;
        }
        .buttom{
            margin-top: 10px;
            border-radius: 5px;
            background-color: black;
            border: none;
            width: 150px;
            height: 50px;
            font-size: 1rem;
            color: aliceblue;
        }
        </style>
    <title>MessageBoard</title>
</head>
<body>
    <div class="topic">
        The Message Board
    </div>
    <form action="{{ url('MessageBoard/store') }}" method="post">
        <div class="whole">
            <table>
                <tr>
                    {{ csrf_field() }}
                    <td><input placeholder="Your Name" name="username" type="text" id="input"></td>
                </tr>
                <tr>
                    <td><textarea placeholder="Your Suggestion" name="content" rows="30" cols="50" id="textarea"></textarea></td>
                </tr>
            </table>
        </div>
            <button type="submit" class="buttom">Submit</button>
    </form>
</body>
</html>
