<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="shortcut icon" href="{{ asset('img') }}/LogoSekolah.png" type="image">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card h2 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-group input:focus {
            outline: none;
            border-color: #007BFF;
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .remember-me {
            margin: 0;
        }

        .forgot-password {
            text-align: right;
        }

        .btn-container {
            text-align: center;
        }

        .btn {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }
        .background{
            background: rgba(0,0,0,0.7) url('../img/sekolah1.jpg');
            background-size: cover;
            background-blend-mode: darken;
        }
    </style>
        <script type="text/javascript">
            window.history.forward();
            function noBack() {
                window.history.forward();
            }
        </script>
</head>
<body class="background">
    <div class="card">
        <h2>Login</h2>
        <form action="/sesi/login" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" value="{{Session::get('username')}}" id="username" name="username" style="width: 280px;" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" style="width: 280px;" placeholder="Enter your password" required>
            </div>
            <div class="remember-forgot">
                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember Me</label>
                </div>
                <div class="forgot-password">
                    <a href="#">Forgot Password?</a>
                </div>
            </div>
            <br />
            <div class="btn-container">
                <button name="submit" type="submit" class="btn">Login</button>
            </div>
        </form>
        <?php

        ?>
    </div>
</body>
</html>
