<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>增加</title>
</head>
<body>
    <form action="{{ url('web_picture/store') }}" method="post">
        <table>
            <tr>
                {{ csrf_field() }}
                <td>请输入所想嵌入图片的地址:</td>
                <td><input type="text" name="href"></td>
                <td><input type="submit" value="增加" ></td>
            </tr>
        </table>
    </form>
</body>
</html>