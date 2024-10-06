<?php

// Get form values
$Email = $_POST['email'];
$Password = $_POST['password'];

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'user');

// Check connection
if($conn->connect_error){
    die('Connection Failed: ' . $conn->connect_error);
} else {
    // Prepare the SQL statement to insert data
    $stmt = $conn->prepare("INSERT INTO login (Email, Password) VALUES (?, ?)");
    
    // Bind the parameters
    $stmt->bind_param("ss", $Email, $Password);
    
    // Execute the statement
    if($stmt->execute()){
        echo "Login details saved successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
