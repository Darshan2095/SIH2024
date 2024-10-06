<?php


$email = $_POST['Email'];
$pass = $_POST['Password'];

$conn = new mysqli('localhost', 'root', '', 'admin');


if($conn->connect_error){
    die('Connection Failed: ' . $conn->connect_error);
} else {
   
    $stmt = $conn->prepare("INSERT INTO admindata (email, pass) VALUES (?, ?)");
    
   
    $stmt->bind_param("ss", $email, $pass);
    
   
    if($stmt->execute()){
        echo "Login details saved successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
    
   
    $stmt->close();
    $conn->close();
}
?>

