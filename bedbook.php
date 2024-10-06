<?php
$wardNo = $_GET['ward'];
$roomNo = $_GET['roomNo']; 
$conn = new mysqli('localhost', 'root', '', 'bedmanage');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Use prepared statements to prevent SQL injection
$query = $conn->prepare("SELECT * FROM beds WHERE ward = ? AND roomNo = ?");
$query->bind_param("ii", $wardNo, $roomNo);
$query->execute();
$result = $query->get_result();




?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bed Availability Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    .navbar {
      background-color: #6c757d;
      height: 10vh;
      color: #ddd;
    }

    .bd {
      margin: auto;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .navbar a {
      color: #ddd;
      font-size: large;
    }

    .title {
      color: #ddd;
      position: relative;
      right: 40%;
    }

    h1 {
      padding: 5% 5% 0 5%;
      color: #333;
      margin-bottom: 30px;
    }

    /* Bed Container */
    #bed-container {
      padding: 5%;
      display: grid;
      grid-template-columns: repeat(10, 1fr);
      grid-gap: 20px;
      width: max-content;
      max-width: 1200px;
    }

    /* Bed Styles */
    .bed {
      width: 60px;
      height: 100px;
      border-radius: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      transition: transform 0.3s ease;
    }

    /* Male - Non-reserved (Available) Bed */
    .f {
      background-color: #fff;
      border: 2px solid #28a745;
      box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
      cursor: pointer;
    }

    .t {
    
      background-color: #e18080;
      border: 2px solid #a9a9a9;
    }
    .p {
    background-color: yellow;
    border: 2px solid #a9a9a9;
  }
    /* Bed Icon */
    .bed::before {
      content: '';
      display: block;
      width: 50px;
      height: 100px;
      border-radius: 10px;
      background-color: inherit;
    }

    /* Pillow Icon */
    .bed::after {
      content: '';
      position: absolute;
      top: -15px;
      width: 40px;
      height: 15px;
      border-radius: 5px;
      background-color: inherit;
    }

    /* Bed Number */
    .bed-number {
      position: absolute;
      bottom: 5px;
      right: 5px;
      font-size: 12px;
      color: #333;
    }

    /* Focus Effect on Available Bed */
    .available:hover {
      transform: scale(1.05);
      background-color: #f8f9fa;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      #bed-container {
        grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));
      }

      .bed {
        width: 70px;
        height: 120px;
      }

      .bed::before {
        width: 40px;
        height: 80px;
      }

      .bed::after {
        width: 30px;
        height: 12px;
      }
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

    @media (max-width: 480px) {
      h1 {
        font-size: 24px;
      }
    }

    .box{

      height: 30px;
      width: 30px;
      margin: 2%;
      display: flex;
      justify-content: space-between;
    }
    .red{
      background-color: red;
    }
    .green{
      background-color: green;
    }
    .yellow{
      background-color: yellow;
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

  <h1 class="text-center">Hospital Bed Availability Dashboard</h1>

  <div class="bd" id="bed-container">
  <?php
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      // Check if the bookstatus is 't' to decide whether the bed should be clickable or not
      if ($row['bookstatus'] === 't') {
        // Non-clickable bed div (no <a> tag)
        ?>
        <div class="bed <?php echo $row['bookstatus']; ?>" id="bed<?php echo $row['id']; ?>">
          <div class="bed-number">
            <?php echo $row['bedNo']; ?>
          </div>
        </div>
        <?php
      } else {
        // Clickable bed div (with <a> tag)
        ?>
        <a href="bed2.php?id=<?php echo $row['id']; ?>">
          <div class="bed <?php echo $row['bookstatus']; ?>" id="bed<?php echo $row['id']; ?>">
            <div class="bed-number">
              <?php echo $row['bedNo']; ?>
            </div>
          </div>
        </a>
        <?php
      }
    }
  } else {
    echo "<p>No beds available for the selected ward and room.</p>";
  }
  ?>
</div>




<div class="boxes " style="margin:10px;">
  <div class="box1">
  <div class="box green "></div><span>Available Bed</span></div>
  <div class="box1"> <div class="box red"></div><span>Occupied Bed</span></div>
  <div class="box1"> <div class="box yellow"></div><span>Pending Bed</span></div>
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

  <script>
    function reloadpage() {
      window.location.reload();
    }


    


  

  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>