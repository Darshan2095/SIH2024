<?php
$conn = new mysqli('localhost', 'root', '', 'appointment');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$doctor = null;
$result4 = null;  // Initialize $result4 to avoid undefined variable errors

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $doctor = $_POST['doctor'];

    if ($doctor) {
        // Fetch appointments for the selected doctor
        $stmt = $conn->prepare("SELECT * from appoinment WHERE doctor = ?");
        $stmt->bind_param("s", $doctor);
        $stmt->execute();
        $result4 = $stmt->get_result();
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Dashboard</title>
    <link rel="stylesheet" href="canva2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style>
    .sidebar {
        width: 250px;
        background-color: #5e50a1;
        color: #fff;
    }

    .sidebar-header {
        padding: 20px;
        text-align: center;
        background-color: #49347a;
    }

    .sidebar h2 {
        text-align: center;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 5%;
    }

    .sidebar ul li {
        padding: 10px;
        margin: 20px 0;
        cursor: pointer;
    }

    .main-content {
        flex: 1;
        padding: 20px;
        background-color: #f4f4f4;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    header h1 {
        font-size: 24px;
    }

    .user-info {
        display: flex;
        gap: 20px;
    }

    .stats {
        display: flex;
        justify-content: space-between;
        margin: 20px 0;
    }

    .stat-card {
        background-color: white;
        padding: 20px;
        flex: 1;
        margin: 0 10px;
        text-align: center;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .appointments,
    .recent-doctors,
    .out-of-stock {
        background-color: white;
        padding: 20px;
        margin: 20px 0;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    thead {
        background-color: #f1f1f1;
    }

    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
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

    button {
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button.accept {
        background-color: #4CAF50;
        color: white;
    }

    button.reject {
        background-color: #f44336;
        color: white;
    }

    .list li {
        border-radius: 5%;
        padding: 5px;
    }

    li a {
        color: white;
        text-decoration: none;
    }

    .main {
        display: flex;
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
    #doc{
        padding: 1%;
        
        width: max-content;
        border-radius: 5%;
        border: none;
        background-color: skyblue;
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


    <div class="main">


        <div class="main-content">
            <h1 class="text-center">Select Name:</h1>
            <div class="floor-selection text-center">

            <form method="post" action="">
                    <select id="doctor" class="bgcr" name="doctor">
                        <option>Doctor</option>
                        <option value="Dr. Smith">Dr. Smith</option>
                        <option value="Dr. Jones">Dr. Jones</option>
                        <option value="Dr. Williams">Dr. Williams</option>
                    </select>

                    <button type="submit" style="background-color:#6c757d;color:white;">Select</button>
                </form>
            </div>
            <h2 id="doc"><?php  echo  $doctor; ?></h2>

            <section class="appointments">
                <h2>Appointments</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Patient Name</th>
                            <th>Date</th>
                            <th>Time slot</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Check if the query result is not null and contains rows
                        if ($result4 && $result4->num_rows > 0) {
                            // Loop through the result set and display each row
                            while ($row = $result4->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($row['namee']); ?></td>
                                    <td><?php echo htmlspecialchars($row['datee']); ?></td>
                                    <td><?php echo htmlspecialchars($row['timeslot']); ?></td>
                                    <td>
                                        <button class="accept">Accept</button>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            // If no appointments found for the doctor, show a message
                            echo "<tr><td colspan='4'>No appointments found for this doctor.</td></tr>";
                        }
                        ?>
                    </tbody>

                </table>
            </section>




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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>