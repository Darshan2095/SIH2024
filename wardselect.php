<?php

$conn = new mysqli('localhost', 'root', '', 'bedmanage');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$wardNo = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $wardNo = $_POST['ward'];

    if ($wardNo) {
        // Use DISTINCT to fetch only unique room numbers for the selected ward
        $stmt = $conn->prepare("SELECT DISTINCT roomNo FROM beds WHERE ward = ?");
        $stmt->bind_param("i", $wardNo);
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
  <title>Ward Selection</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    <style>body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1 {
      color: #333;
      margin-bottom: 30px;
    }

    .ward-container {
      width: 60%;
      margin:auto;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    /* Footer Styles */
    .footer {
      position: relative;
      top: 200px;

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

    .ward {
      width: 150px;
      height: 150px;
      border-radius: 10px;
      background-color: #fff;
      box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: center;
      align-items: center;
      transition: transform 0.3s ease;
      cursor: pointer;
      text-align: center;
      border: 2px solid #ccc;
      font-size: 18px;
      font-weight: bold;
      color: #333;
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

    .ward:hover {
      transform: scale(1.05);
      background-color: #e6f7ff;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .ward {
        width: 120px;
        height: 120px;
        font-size: 16px;
      }
    }

    @media (max-width: 480px) {
      .ward {
        width: 100px;
        height: 100px;
        font-size: 14px;
      }

      .floor-selection {

        margin-bottom: 30px;
      }

      h1 {
        font-size: 24px;
      }
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

  <h1 class="text-center">Select a Ward</h1>

  <div class="floor-selection text-center">
    <label for="floor" class="text-center">Select Floor:</label>
    <form action="wardselect.php" method="post">
    <select id="floor" class="bgcr" name="ward">

      <option >Select the ward</option>
      <option value="1">Floor 1 : General Ward</option>
      <option value="2">Floor 2 : Neurology Ward</option>
      <option value="3">Floor 3 : Orthopadic Ward</option>
      <option value="4">Floor 4 : Cardiology Ward</option>
      
    </select>
    
    <button onchange="changewindow()" type="submit">Select</button>
    </form>
  </div>

  <div class="ward-container">
    <?php
    // Only display rooms if a ward is selected and there are results
    if ($wardNo && $result4->num_rows > 0) {
        while ($row = $result4->fetch_assoc()) {
            echo '<a href="bedbook.php?ward=' . $wardNo . '&roomNo=' . $row['roomNo'] . '">';
            echo '<div class="ward">Room ' . $row['roomNo'] . '</div>';
            echo '</a>';
        }
    } elseif ($wardNo) {
        echo '<p>No rooms available in this ward.</p>';
    }
    ?>
</div>

<?php

$conn->close();
?>

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

  <script>
    function changewindow() {
      window.location.reload();
    }
  </script>
</body>

</html>