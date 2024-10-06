<?php

$id = $_GET['id'];
if (isset($id) && !empty($id)) {

    $conn = new mysqli('localhost', 'root', '', 'bedmanage');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query2 = "UPDATE beds SET bookstatus = 'p' WHERE id = $id";
    $result2 = mysqli_query($conn, $query2);


    if ($result2) {
       echo "Login  Success";


    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }



}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        </head><style>h2 {
            text-align: center;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #6c757d;
            height: 10vh;
            color: #ddd;
        }

        .navbar a {
            color: #ddd;
            font-size: large;
        }

        .aj {
            color: #131313;
        }

        .title {
            position: relative;
            right: 40%;
        }

        /* Footer Styles */
        .footer {
            background-color: #f8f9fa;
            padding: 40px 20px;
            text-align: center;
            font-family: Arial, sans-serif;
            color: #333;
            border-top: 1px solid #ddd;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .footer-section {
            margin: 15px;
            flex: 1;
            min-width: 200px;
        }

        .footer-section h4 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #0056b3;
        }

        .footer-section p {
            margin: 5px 0;
        }

        .footer-section a {
            color: #0056b3;
            text-decoration: none;
        }

        .footer-section a:hover {
            text-decoration: underline;
        }

        .footer-bottom {
            margin-top: 20px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
            color: #666;
        }

        .footer-bottom p {
            margin: 0;
            font-size: 14px;
        }

        form {
            margin: 0 auto;
            width: 300px;
            font-family: Arial, sans-serif;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
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
    <div class="text-center">
    <h3>please fill this form within</h3>
    <span><h3 id="timer"></h3></span>
    </div>

    <!-- <script>
        let tm = document.getElementById("timer");
        let i = 10;
        setInterval(() => {
            tm.innerHTML = i;
            i--; 
            if (i < 0) {
                clearInterval(); 
                window.location.href = 'bedbook.php'; 
            }
        }, 1000);
    </script> -->


   
    <h2 class="text-center">Input Form</h2>
    <form action="submit_form.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="namee" required><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" required><br><br>

        <label for="id">Bed ID:</label><br>
        <input type="text" id="patientid" value="<?php echo $_GET['id']?>" name="id" required><br><br>

        <input type="submit" value="Submit">
    </form>



    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section contact">
                <h4>Contact Us</h4>
                <p>Email: <a href="mailto:info@hospital.com">carecodes@hospital.com</a></p>
                <p>Phone: <a href="tel:+1234567890">+1 234 567 890</a></p>
            </div>

            <div class="footer-section info">
                <h4>More Information</h4>
                <p>Address: 123 Hospital Street, Chandkheda,Ahemdabad,India</p>
                <p><a href="/about-us">About Us</a></p>
                <p><a href="/privacy-policy">Privacy Policy</a></p>
            </div>

            <div class="footer-section social">
                <h4>Follow Us</h4>
                <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Instagram</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2024 Hospital Name. All Rights Reserved.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>