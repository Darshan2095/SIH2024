<?php
$conn = new mysqli('localhost', 'root', '', 'appointment');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$doctorName = $_GET['doctor'];
$name=$_GET['name'];

$query = $conn->prepare("SELECT * FROM docslot WHERE namee = ?");
$query->bind_param("s", $doctorName);
$query->execute();
$result = $query->get_result();




// Process the result

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Availability</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .navbar {
            /* margin-bottom: 5%; */
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

        .container {

            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
        }

        .controls,
        .date-selector {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .controls label {
            margin-right: 8px;
        }

        .controls select {
            padding: 5px;
        }

        #selected-date {
            font-size: 18px;
            font-weight: bold;
        }

        .time-frames a {
            margin: 0 5px;
            color: blue;
            text-decoration: none;
        }

        .time-frames a:hover {
            text-decoration: underline;
        }

        .date-navigation {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .date-navigation button,
        .date-navigation input {
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            cursor: pointer;
        }

        .date-navigation input {
            width: 140px;
        }

        .view-options {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .view-options button {
            padding: 10px 20px;
            border: 1px solid #007bff;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        .view-options button:hover {
            background-color: #0056b3;
        }


        .container1 {
            margin-top: 5%;
            margin-bottom: 5%;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        a.slot {
            display: block;
            width: 100%;
            text-align: center;
            text-decoration: none;
           
            color: inherit;
           
        }

        .doctor-info {
            width: 25%;
            text-align: center;
        }

        .doctor-info h2 {
            margin-bottom: 10px;
        }

        .doctor-info p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .status-out {
            background-color: red;
            color: white;
            padding: 10px 15px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .new-availability,
        .new-busy-time,
        .create-notification {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .new-availability {
            background-color: #28a745;
            color: white;
        }

        .new-busy-time {
            background-color: #ff4757;
            color: white;
        }

        .create-notification {
            background-color: #007bff;
            color: white;
        }

        .schedule {
            width: 70%;
            display: flex;
        }

        .availability {
            width: 40%;
        }

        .availability p {
            margin: 5px 0;
            font-weight: bold;
        }

        .availability span {
            color: gray;
        }

        .availability a {
            color: #007bff;
            text-decoration: none;
            font-size: 12px;
        }

        .time-slots {
            width: 60%;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin: 10px;
        }


        .row {
            border: 1px solid black;

            padding: 2%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .time-header {
            width: 20%;
            font-weight: bold;
        }

        .slot {
            color: white;
            height: 40px;
            background-color: #dcdcdc;
            border-radius: 5px;
            margin: 5px;
            margin-right: 10px;
        }

        .slot.f {
            color: white;
            width: auto;
            background-color: #28a745;
        }

        .slot.t {
            width: auto;
            background-color: #ff4757;
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


        <div class="date-selector">
            <span id="selected-date">Wednesday</span>
            <form action="">
                <span id="selected-date"> 25 May 2022</span>
            </form>


            <div class="date-navigation">
                <button id="prev-day">Prev</button>
                <input type="date" id="date-picker" value="2022-05-25">
                <button id="next-day">Next</button>
            </div>

        </div>
    </div>





    <div class="container1">
        <div class="doctor-info">
            <h2><?php echo htmlspecialchars($doctorName); ?></h2>
            <p>Paediatrics</p>
            <button class="status-out">OUT</button>
            <button class="new-availability">Available</button>
        </div>

        <div class="schedule">
            <div class="availability">
                <p>7:00 AM - 01:00 PM</p>
                <span>Consultation</span><br>
                
                <p>02:00 PM - 08:00 PM</p>
                <span>Video Consultation</span><br>
                
            </div>

            <div class="time-slots">
                <?php while ($row = $result->fetch_assoc()) { ?>

                    <div class="row">
                        <div class="time-header"><?php echo htmlspecialchars($row['time']); ?></div>
                        <?php  
                        if ($row['sltstatus'] === 'f') {
                            ?>
                        <a href="apsubmit.php?slotid=<?php echo $row['slotid']; ?>&timeslot=<?php echo $row['time']; ?>&name=<?php echo $name; ?>"
                            class="slot <?php echo htmlspecialchars($row['sltstatus']); ?>">
                            <?php echo htmlspecialchars($row['slotid']); ?>
                        </a>
                        <?php
                        } else {
                            ?>
                              <div class="slot  <?php echo htmlspecialchars($row['sltstatus']); ?>">
                              <?php echo htmlspecialchars($row['slotid']); ?>
                              </div>
                           
                           
                            <?php 
                            }?>
                    </div>
                <?php } ?>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>