<?php
$conn = new mysqli('localhost', 'root', '', 'medicine');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$query = "select * from medicineinfo";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style>
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

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }



    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    header {
        text-align: center;
        margin-bottom: 20px;
    }

    header h1 {
        font-size: 24px;
        color: #333;
    }

    .medicine-management {
        display: flex;
        justify-content: space-between;
        gap: 20px;
    }

    .form-section {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        width: 45%;
    }

    .form-section h2 {
        font-size: 18px;
        margin-bottom: 20px;
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

    .form-row input {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .form-row button {
        padding: 8px 16px;
        border: none;
        background-color: #007bff;
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }

    .buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .add-btn {
        width: 5vw;
        border: none;
        padding: 2%;
        border-radius: 10%;
        background-color: #28a745;
    }

    .update-btn {
        width: 5vw;
        border: none;
        padding: 2%;
        border-radius: 10%;
        background-color: #ffc107;
    }

    .delete-btn {
        width: 5vw;
        border: none;
        padding: 2%;
        border-radius: 10%;
        background-color: #dc3545;
    }

    .table-section {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        width: 50%;
    }

    .table-section h2 {
        font-size: 18px;
        margin-bottom: 15px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table th,
    table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    table th {
        background-color: #f1f1f1;
        font-weight: bold;
    }

    table td {
        background-color: #fff;
    }

    .generate-report {
        background-color: #6c757d;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-bottom: 20px;
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
            <a class="nav-link" href="adminlogin.php">Admin</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#departments">Departments</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#doctors">Doctors</a>
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
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Management
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="staff.php">Staff</a>
                <a class="dropdown-item" href="invantory.php">Pharmacy</a>
                <a class="dropdown-item" href="medicinemanage.php">Medicine</a>

            </div>
        </li>

    </ul>
    <div class="container">
        <header>
            <h1>Medicine Management</h1>
        </header>

        <div class="medicine-management">
            <div class="form-section">
                

              
                <form action="addmedicine.php" method="post">
                    <div class="form-row">
                        <label for="medicine-name">Medicine Name</label>
                        <input type="text" id="medicine-name" placeholder="Enter Medicine Name" name="name">
                    </div>

                    <div class="form-row">
                        <label for="supplier-name">Supplier Name</label>
                        <input type="text" id="supplier-name" placeholder="Enter Supplier Name" name="sname">
                    </div>
                    <div class="form-row">
                        <label for="manufacture-date">Manufacturing Date</label>
                        <input type="date" id="manufacture-date" name="mfdate">
                    </div>

                    <div class="form-row">
                        <label for="expire-date">Expiry Date</label>
                        <input type="date" id="expire-date" name="exdate">
                    </div>


                    <div class="form-row">
                        <label for="quantity">Qty</label>
                        <input type="number" id="quantity" placeholder="Enter Quantity" name="qnt">
                    </div>

                    <div class="form-row">
                        <label for="unit-price">Unit Price</label>
                        <input type="text" id="unit-price" placeholder="Enter Unit Price" name="price">
                    </div>

                    <div class="buttons">
                        <a href="medicinemanage.php"> <button type="submit" class="bt add-btn">Add</button></a>
                        <button class="bt update-btn">Update</button>
                        <button class="bt delete-btn">Delete</button>
                    </div>
                </form>
            </div>

            <div class="table-section">
                <h2>Stocks </h2>
                <table>
    <thead>
        <tr>
            <th>#</th>
            <th>Medicine Name</th>
            <th>Manufacturing Date</th>
            <th>Expiry Date</th>
            <th>Supplier Name</th>
            <th>Unit Price</th>
            <th>Qty</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['namee']; ?></td>
                <td><?php echo $row['mfdate']; ?></td>
                <td><?php echo $row['exdate']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td>₹<?php echo $row['price']; ?></td>
                <td><?php echo $row['qnt']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>