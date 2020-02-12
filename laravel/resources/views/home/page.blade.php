<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>分页</title>
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
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>头像</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td>{{$user -> id}}</td>
            <td>{{$user -> name}}</td>
            <td>{{$user -> email}}</td>
            <td ><img src=" {{ ltrim($user -> avatar,'.') }}" alt="" style="height: 50px"></td>
        </tr>
    @endforeach
    </tbody>
</table>
<div style="float: left">
    {{ $users->links() }}
</div>

</body>
</html>
        