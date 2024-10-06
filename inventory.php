<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Management Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }
    
    
    
    .container {
        display: flex;
       
    }
    
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
    
    .nav ul {
        list-style: none;
        padding: 10px;
    }
    
    .nav ul li {
        margin-bottom: 20px;
    }
    
    .nav ul li a {
        text-decoration: none;
        color: #fff;
        padding: 10px;
        display: block;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    
    .nav ul li a:hover {
        background-color: #49347a;
    }
    
    .main-content {
        flex-grow: 1;
        padding: 20px;
    }
    
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #fff;
        padding: 10px;
        border-bottom: 1px solid #ddd;
        margin-bottom: 20px;
    }
    
    .header .user-info {
        font-weight: bold;
    }
    
    .header .hospital-logo h2 {
        color: #5e50a1;
    }
    
    .dashboard .summary-cards {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    
    .dashboard .summary-cards .card {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        width: 30%;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .dashboard .summary-cards .card h3 {
        margin-bottom: 10px;
        color: #5e50a1;
    }
    
    .dashboard .actions {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    
    .dashboard .actions button {
        padding: 10px 20px;
        background-color: #5e50a1;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    
    .dashboard .actions button:hover {
        background-color: #49347a;
    }
    
    .dashboard .reports {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    
    .dashboard .reports .report {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        width: 30%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
    
    .dashboard .out-of-stock {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .dashboard .out-of-stock table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    
    .dashboard .out-of-stock table th,
    .dashboard .out-of-stock table td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: center;
    }
    
    .dashboard .out-of-stock table .status.available {
        color: green;
    }
    
    .dashboard .out-of-stock table .status.out-of-stock {
        color: red;
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
    
    <div class="container">
       
        <main class="main-content">
            <header class="header">
                <div class="user-info">
                    <span></span>
                </div>
                <div class="hospital-logo">
                    <h2>Inventory</h2>
                </div>
                <div class="user-info">
                    <span></span>
                </div>
            </header>
            <section class="dashboard">
                <div class="summary-cards">
                    <div class="card">
                        <h3>Total Customer</h3>
                        <p>25</p>
                    </div>
                    <div class="card">
                        <h3>Total Medicine</h3>
                        <p>25</p>
                    </div>
                   
                </div>
                <div class="actions">
                    <button>Create Invoice</button>
                   
                   <a href="medicinemanage.php"> <button>Medicine</button></a>
                </div>
                <div class="reports">
                    <div class="report">
                        <h3>Purchase Reports</h3>
                        <div class="chart" id="purchase-chart"></div>
                    </div>
                    <div class="report">
                        <h3>Sells Reports</h3>
                        <div class="chart" id="sales-chart"></div>
                    </div>
                    <div class="report">
                        <h3>Stock Reports</h3>
                        <div class="chart" id="stock-chart"></div>
                    </div>
                </div>
                <div class="out-of-stock">
                    <h3>Out of Stock</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Drug Name</th>
                                <th>Manufacturing Date</th>
                                <th>Expiry Date</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Vitamin C</td>
                                <td>2023-01-01</td>
                                <td>2024-01-01</td>
                                <td>₹500</td>
                                <td>150</td>
                                <td class="status available">Available</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Paracetamol</td>
                                <td>2023-02-01</td>
                                <td>2024-03-01</td>
                                <td>₹250</td>
                                <td>0</td>
                                <td class="status out-of-stock">Out of Stock</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Amoxicillin</td>
                                <td>2024-01-01</td>
                                <td>2025-01-01</td>
                                <td>₹100</td>
                                <td>0</td>
                                <td class="status out-of-stock">Out of Stock</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Amlodipine</td>
                                <td>2023-06-01</td>
                                <td>2024-06-01</td>
                                <td>₹840</td>
                                <td>275</td>
                                <td class="status available">Available</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>