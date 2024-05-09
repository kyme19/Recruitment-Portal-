<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .welcome-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .btn-custom {
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Recruitment Portal </h1>
        <h3>Welcome please login or Signup</h3>
        <div class="d-flex justify-content-center">
            <a href="{{ route('login') }}" class="btn btn-primary btn-custom">Login</a>
            <a href="{{ route('register') }}" class="btn btn-success btn-custom">Sign Up</a>
            <a href="{{ route('job-listings.index') }}" class="btn btn-info btn-custom">Take a Tour</a>
        </div>
    </div>
</body>
</html>