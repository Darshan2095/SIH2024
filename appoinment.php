<?php


$patientid = $_POST['PatientID'];
$namee = $_POST['Name'];
$gender = $_POST['Gender'];
$adress = $_POST['Adress'];

$doctor = $_POST['Doctor'];

$contactno = $_POST['ContactNo'];



$conn = new mysqli('localhost', 'root', '', 'appointment');


if($conn->connect_error){
    die('Connection Failed: ' . $conn->connect_error);
} else {
   
    $stmt = $conn->prepare("INSERT INTO appoinment (namee,gender,adress,doctor,contactno) VALUES (?,?,?,?,?)");
   
   
    $stmt->bind_param("ssssi",$namee,$gender,$adress,$doctor,$contactno);



    if($stmt->execute()){
        echo "<script>
       
        window.location.href = 'bookappoinment.php?doctor=$doctor&name=$namee'; 
      </script>";
        

    } else {
        echo "Error: " . $stmt->error;
    }
    
   
    $stmt->close();
    $conn->close();
}
?>

