<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   
</head>
<style>
   
    
    
    .navbar a{
        color: #ddd;
        font-size: large;
    }
    
    .navbar{
        color: #ddd;
        background-color: #6c757d;
        height: 10vh;
    }
    .title{
        position: relative;
        right: 40%;
    }
    header {
        text-align: center;
        margin-bottom: 20px;
    }
    
    header h1 {
        font-size: 24px;
        color: #333;
    }
    
    .staff-management {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    
    .form-section {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    .form-row {
        display: flex;
        gap: 20px;
        margin-bottom: 15px;
    }
    
    .form-row input, .form-row select {
        flex: 1;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    
    .buttons {
        display: flex;
        gap: 20px;
        justify-content: space-between;
        margin-top: 20px;
    }
    
    .register-btn, .update-btn, .delete-btn, .search-btn, .generate-btn {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    
    .register-btn {
        background-color: #28a745;
        color: white;
    }
    
    .update-btn {
        background-color: #007bff;
        color: white;
    }
    
    .delete-btn {
        background-color: #dc3545;
        color: white;
    }
    
    .search-btn {
        background-color: #ffc107;
        color: black;
    }
    
    .generate-btn {
        background-color: #6c757d;
        color: white;
    }
    
    .register-btn:hover, .update-btn:hover, .delete-btn:hover, .search-btn:hover, .generate-btn:hover {
        opacity: 0.8;
    }
    
    /* Recent Staff Section */
    .recent-staff {
        margin-top: 20px;
    }
    
    .recent-staff h3 {
        margin-bottom: 10px;
    }
    
    table {
        width: 100%;
        border-collapse: collapse;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
    }
    
    table th, table td {
        padding: 10px;
        text-align: left;
    }
    
    table thead {
        background-color: #f1f1f1;
    }
    
    table tbody tr:nth-child(odd) {
        background-color: #f9f9f9;
    }
    
    table tbody tr:hover {
        background-color: #f1f1f1;
    }
    
    .status {
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 12px;
    }
    
    .status.online {
        background-color: #28a745;
        color: white;
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
        <header>
            <h1>Staff Management</h1>
        </header>

        <div class="staff-management">
            <div class="form-section">
                <div class="form-row">
                    <button class="generate-btn">Generate Report</button>
                    <input type="text" id="staff-id" placeholder="ID">
                    <button class="search-btn">Search</button>
                </div>

                <div class="form-row">
                    <input type="text" id="first-name" placeholder="First Name">
                    <input type="text" id="last-name" placeholder="Last Name">
                </div>

                <div class="form-row">
                    <select id="role">
                        <option value="">Role</option>
                        <option value="Doctor">Doctor</option>
                        <option value="Nurse">Nurse</option>
                        <option value="Technician">Technician</option>
                    </select>

                    <select id="gender">
                        <option value="">Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-row">
                    <input type="email" id="email" placeholder="Email">
                    <input type="text" id="mobile-number" placeholder="Mobile Number">
                </div>

                <div class="form-row">
                    <input type="text" id="address" placeholder="Address">
                </div>

                <div class="form-row">
                    <input type="text" id="nic" placeholder="NIC">
                    <input type="date" id="dob" placeholder="Date of Birth">
                </div>

                <div class="form-row">
                    <input type="password" id="password" placeholder="Password">
                    <input type="password" id="confirm-password" placeholder="Confirm Password">
                </div>

                <div class="buttons">
                    <button class="register-btn">Register</button>
                    <button class="update-btn">Update</button>
                    <button class="delete-btn">Delete</button>
                </div>
            </div>

            <!-- Table Section for Recent Staff -->
            <div class="recent-staff">
                <h3>Recent Doctors</h3>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>NIC</th>
                            <th>DOB</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Madhusha</td>
                            <td>Doctor</td>
                            <td>Male</td>
                            <td>madhusha@gmail.com</td>
                            <td>076-66622616</td>
                            <td>861225626</td>
                            <td>1999-04-13</td>
                            <td><span class="status online">Online</span></td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>