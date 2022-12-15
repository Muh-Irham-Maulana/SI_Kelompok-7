<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Admin Panel Rumah Kucing Neko</title>
</head>
<body>
    <div class="container">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="card">
            <h4 class="title">Login</h4>
            <div class="form-input">
                <label for="username">Email</label>
                <input type="email" id="username" placeholder="example@example.com">
            </div>
            <div class="form-input">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="">
            </div>
            <button onclick="window.location.href='/admin'" class="login-btn">Login</button>
        </div>
    </div>
</body>
</html>
