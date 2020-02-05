<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>删除</title>
</head>
<body>
    <form action="{{ url('web_picture/update') }}" method="post">
        <table>
            <tr>
                {{ csrf_field() }}
                <td>请输入所想删除图片的id:</td>
                <td><input type="text" name="id"></td>
                <td><input type="submit" value="删除" ></td>
            </tr>
        </table>
    </form>
</body>
</html>