<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Roboto', sans-serif;
            background: #f5f5f5;
        }
        .container {
            background: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
            position: relative;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            padding-left: 40px;
            border: 1px solid #ddd;
            border-radius: 4px;
            outline: none;
            font-size: 16px;
        }
        .form-group i {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #888;
        }
        .form-group input:focus {
            border-color: #3f51b5;
        }
        .form-group input:focus + i {
            color: #3f51b5;
        }
        .btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background: #3f51b5;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .btn:hover {
            background: #303f9f;
        }
        .footer {
            text-align: center;
            margin-top: 15px;
            color: #888;
        }
        .footer a {
            color: #3f51b5;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Register</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" name="name" placeholder="Name" required>
            <i class="fas fa-user"></i>
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email" required>
            <i class="fas fa-envelope"></i>
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" required>
            <i class="fas fa-lock"></i>
        </div>
        <div class="form-group">
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <i class="fas fa-lock"></i>
        </div>
        <button type="submit" class="btn">Register</button>
    </form>
    <div class="footer">
        <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </div>
</div>
</body>
</html>
