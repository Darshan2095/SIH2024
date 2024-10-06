<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedLab Hospital - Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style>
    
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

header {
    background-color: #fff;
    padding: 10px 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-around;
}

nav ul li {
    margin: 0 10px;
}

nav ul li a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

.hero {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 50px 20px;
    background: linear-gradient(to right, #f7f7f7 50%, #e0f7fa 50%);
}

.content {
    max-width: 50%;
}

.content h1 {
    font-size: 2.5em;
    margin-bottom: 20px;
}

.content p {
    font-size: 1em;
    line-height: 1.6;
}

.illustration img {
    max-width: 100%;
    height: auto;
}

.signup {
    background-color: #fff;
    padding: 40px 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin: -30px 20px 20px;
    border-radius: 10px;
}

.signup h2 {
    text-align: center;
    font-size: 2em;
    margin-bottom: 10px;
}

.signup p {
    text-align: center;
    margin-bottom: 30px;
}

form {
    max-width: 500px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
}

.role-selector {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}

.role {
    padding: 10px 20px;
    border: 1px solid #ddd;
    background-color: #eee;
    margin: 0 5px;
    border-radius: 5px;
    cursor: pointer;
}

.role.active {
    background-color: #9c27b0;
    color: #fff;
}

input[type="text"], input[type="email"], input[type="password"], input[type="date"], select {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button[type="submit"] {
    padding: 10px;
    background-color: #9c27b0;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
}

button[type="submit"]:hover {
    background-color: #7b1fa2;
}

footer {
    display: flex;
    justify-content: space-around;
    padding: 20px;
    background-color: #333;
    color: #fff;
    margin-top: 20px;
}

footer h4 {
    margin-bottom: 10px;
}

footer ul {
    list-style: none;
    padding: 0;
}

footer ul li {
    margin-bottom: 5px;
}

footer ul li a {
    color: #fff;
    text-decoration: none;
}

footer p {
    margin: 5px 0;
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
   
    <section class="signup">
        <h2>Sign Up</h2>
        <p>Please Sign Up To Continue</p>
        <form action="login.php" method="post">
            <div class="role-selector">
                <select name="role" id="">
                   <option value="patient"> <button type="button" class="role" >Patient</button></option>
                   <option value="doctor"><button type="button" class="role">Doctor</button></option>
            </select>
                
            </div>
            <input type="text" placeholder="First Name" name="FirstName">
            <input type="text" placeholder="Last Name" name="LastName">
            <input type="email" placeholder="Email" name="Email">
            <input type="text" placeholder="Mobile Number" name="MobileNo">
            <input type="date" placeholder="Date of Birth" name="DOB">
            <input type="text" placeholder="Address" name="Address">


            <input type="radio" id="male" name="gender" value="m">
            <label for="male"> Male</label><br>
            <input type="radio" id="female" name="gender" value="f">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="o">
            <label for="other">Other</label>


            <input type="password" placeholder="Password" name="PassWord">
            <input type="password" placeholder="Confirm Password">
            <button type="submit">Register</button>
        </form>
    </section>

    <footer>
        <div class="quick-links">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="#">Appointment</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="hours">
            <h4>Hours</h4>
            <ul>
                <li>Mon - Fri: 9:00 - 18:00</li>
                <li>Sat - Sun: 10:00 - 16:00</li>
            </ul>
        </div>
        <div class="contact">
            <h4>Contact</h4>
            <p>Tel: 123-456-7890</p>
            <p>Email: info@medlab.com</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>