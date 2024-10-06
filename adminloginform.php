<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Login</title>
    <link rel="stylesheet" href="plog.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<style>
   
    
    .login-container {
        background-color: #fff;
        padding: 5%;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: max-content;
        margin: auto;
        max-width: 400px;
    }
    
    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }
    
    .input-group {
        margin-bottom: 15px;
    }
    
    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #333;
    }
    
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    
    input[type="email"]:focus,
    input[type="password"]:focus {
        border-color: #007bff;
        outline: none;
    }
    
    .login-button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
    }
    
    .login-button:hover {
        background-color: #0056b3;
    }
    .navbar{
        background-color: #6c757d;
        height: 10vh;
        color: #ddd;
    }
    .navbar a{
        color: #ddd;
        font-size: large;
    }
    .title{
        position: relative;
        right: 40%;
    }
</style>
<body>
<ul class="nav navbar justify-content-end">
        <span class="title">
            <h1>CareCoders</h1>
        </span>
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="adminloginform.php">Admin</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#departments">Departments</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="docdas.php">Doctors</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Login
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="plogin.php">Sign In</a>
                <a class="dropdown-item" href="signup.php">Sign Up</a>

            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Management
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="aj dropdown-item" href="staff.php">Staff</a>
                <a class="aj dropdown-item" href="docdas.php">doctor</a>
                <a class="aj dropdown-item" href="invantory.php">Pharmacy</a>
                <a class="aj dropdown-item" href="medicinemanage.php">Medicine</a>

            </div>
        </li>

    </ul>

    <div class="login-container">
        <h2>Admin</h2>
        <form action="adminlogin.php" method="post">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="Email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="Password" required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>