<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <div class="login-form">
        <form action="/login" method="POST">
            @csrf
            <div class="login">
                <input type="text" name="username" placeholder="Username" id="">
            </div>
            <div class="login">
                <input type="password" name="password" placeholder="Password" id="">
            </div>

            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>