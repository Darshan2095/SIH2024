



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
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

        .title {
            position: relative;
            right: 40%;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }

        .container {
            margin-top: 5%;
            max-width: 1200px;

        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        header h1 {
            font-size: 24px;
            color: #333;
        }

        .appointment-management {
            width: 80vw;
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .form-section {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: max-content;
        }

        .form-row {
            margin-bottom: 15px;
        }

        .form-row label {
            display: block;
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
        }

        .form-row input,
        .form-row select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }


        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
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

        .add-btn {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .cancel-btn {
            background-color: #dc3545;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-btn:hover,
        .cancel-btn:hover {
            opacity: 0.8;
        }
    </style>
</head>

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
    <div class="container">
        <header>
            <h1>Book Appointment</h1>
        </header>

        <div class="appointment-management">
            <form action="appoinment.php" method="post">
                <div class="form-section">
                    <div class="form-row">
                        <label for="patient-id">Patient ID</label>
                        <input type="text" id="patient-id" placeholder="Enter Patient ID" name="PatientID">
                    </div>

                    <div class="form-row">
                        <label for="patient-name">Patient Name</label>
                        <input type="text" id="patient-name" placeholder="Enter Patient Name" name="Name">
                    </div>

                    <div class="form-row">
                        <label for="gender">Gender</label>
                        <select id="gender" name="Gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <label for="address">Address</label>
                        <input type="text" id="address" placeholder="Enter Address" name="Adress">
                    </div>



                    <div class="form-row">
                        <label for="doctor-name">Doctor</label>
                        <select id="doctor-name" name="Doctor">
                            <option value="Dr. Smith">Dr. Smith</option>
                            <option value="Dr. Jones">Dr. Jones</option>
                            <option value="Dr. Williams">Dr. Williams</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <label for="doctor-name">Departments</label>
                        <select id="doctor-name">
                            <option >Orthopedic</option>
                            <option >Neurologist</option>
                            <option >Kedney Specialist</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <label for="contact">Contact Number</label>
                        <input type="text" id="contact" placeholder="Enter Contact Number" name="ContactNo">
                    </div>

                    <div class="buttons">

                        <a href="bookappoinment.php?doctor=<?php echo $doctor?>"><button type="submit" class="add-btn">Select Slot
                                </button></a>
            </form>
            <a href="index.php"><button class="cancel-btn">Cancel</button></a>
        </div>
    </div>
    </div>
    </div>

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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>