<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form class="form-signin" action="/kirimdata" method="POST">
    {{csrf_field()}}
        <input type="text" name="username">
        <input type="password" name="password">

        <button class="btn btn-lg btn-primary btn-block" type submit>Login</button>
    </form>
</body>
</html>