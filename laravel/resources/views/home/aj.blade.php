<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
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
    姓名：<input type="text" name="name" id="name">
    <br>
    邮箱：<input type="text" name="email" id="email">
    <br>
    年龄：<input type="text" name="age" id="age">
    <br>
    <button type="button" id="btn">提交</button>
    {{ csrf_field() }}
</form>
</body>
<script>
$('#btn').click(function () {
    alert(111);
    $.get('/home/index/res',function (data) {
        console.log(1111)
        console.log(data)
    })
    // $.ajax({
    //     dateType: 'json',
    //     url: '/home/index/res',
    //     data: {'name':$('#name').val(),'email':$('#email').val(),'age':$('#age').val()}
    //     success: function (res) {
    //         alert("ok")
    //     }
    // })
})
</script>
</html>
        