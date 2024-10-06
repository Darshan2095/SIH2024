<?php

$namee = $_POST['name'];
$sname = $_POST['sname'];
$exdate = $_POST['exdate'];
$mfdate = $_POST['mfdate'];
$qnt = $_POST['qnt'];
$price = $_POST['price'];

$conn = new mysqli('localhost', 'root', '', 'medicine');


if($conn->connect_error){
    die('Connection Failed: ' . $conn->connect_error);
} else {
   
    $stmt = $conn->prepare("INSERT INTO medicineinfo (namee, sname,exdate,mfdate,qnt,price) VALUES (?,?,?,?,?,?)");
    
   
    $stmt->bind_param("ssssii", $namee , $sname,$exdate,$mfdate,$qnt,$price);
    
   
    if($stmt->execute()){
        
        header("Location: medicinemanage.php");
    } else {
        echo "Error: " . $stmt->error;
    }
    
   
    $stmt->close();
    $conn->close();
}
?>

