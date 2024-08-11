<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Glassmorphic Login Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            /* background: linear-gradient(45deg, #FF6B6B, #4ECDC4); */
            background: linear-gradient(45deg, #5b5656, #000000);
            height: 100vh;
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            position: relative;
        }

        form {
            background: rgba(255, 255, 255, 0.2);
            padding: 3em;
            height: auto;
            border-radius: 20px;
            border-left: 1px solid rgba(255, 255, 255, 0.3);
            border-top: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, 0.2);
            text-align: center;
            position: relative;
            transition: all 0.2s ease-in-out;
        }

        form p {
            font-weight: 500;
            color: #fff;
            opacity: 0.7;
            font-size: 1.4rem;
            margin-top: 0;
            margin-bottom: 60px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        form a {
            text-decoration: none;
            color: #ddd;
            font-size: 12px;
        }

        form a:hover {
            text-shadow: 2px 2px 6px #00000040;
        }

        form input {
            background: rgba(255, 255, 255, 0.2);
            width: 200px;
            padding: 1em;
            margin-bottom: 2em;
            border: none;
            border-radius: 5000px;
            backdrop-filter: blur(5px);
            box-shadow: 4px 4px 60px rgba(0, 0, 0, 0.2);
            color: #fff;
            font-family: Montserrat, sans-serif;
            font-weight: 500;
            transition: all 0.2s ease-in-out;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        form input[type="email"],
        form input[type="password"] {
            color: #fff;
        }

        form input[type="button"] {
            background: rgba(255, 255, 255, 0.3);
            width: 150px;
            font-size: 1rem;
        }

        form input[type="button"]:hover {
            cursor: pointer;
            background: rgba(255, 255, 255, 0.4);
        }

        ::placeholder {
            font-family: Montserrat, sans-serif;
            font-weight: 400;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
        }

        .drop {
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            border-left: 1px solid rgba(255, 255, 255, 0.3);
            border-top: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 10px 10px 60px -8px rgba(0, 0, 0, 0.2);
            position: absolute;
            transition: all 0.2s ease;
        }

        .drop-1 {
            height: 80px;
            width: 80px;
            top: -20px;
            left: -40px;
            z-index: -1;
        }

        .drop-2 {
            height: 80px;
            width: 80px;
            bottom: -30px;
            right: -10px;
        }

        .drop-3 {
            height: 100px;
            width: 100px;
            bottom: 120px;
            right: -50px;
            z-index: -1;
        }

        .drop-4 {
            height: 120px;
            width: 120px;
            top: -60px;
            right: -60px;
        }

        .drop-5 {
            height: 60px;
            width: 60px;
            bottom: 170px;
            left: 90px;
            z-index: -1;
        }
    </style>
</head>

<body>
    <div class="container">
        <form id="loginForm" method="POST" action="{{ route('register') }}">
            @csrf
            <p>Welcome</p>
            <input type="name" name="name" placeholder="Name" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="register"><br>
            <a href="#">Forgot Password?</a>
        </form>

        <div class="drops">
            <div class="drop drop-1"></div>
            <div class="drop drop-2"></div>
            <div class="drop drop-3"></div>
            <div class="drop drop-4"></div>
            <div class="drop drop-5"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>

</html>