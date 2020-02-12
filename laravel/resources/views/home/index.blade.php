<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="" method="post">
    姓名：<input type="text" name="name">
    <br>
    邮箱：<input type="text" name="email">
    <br>
    年龄：<input type="text" name="age">
    <br>
    <input type="submit" value="提交">
    {{ csrf_field() }}
</form>
</body>
</html>
        