<?php


$namee = $_POST['namee'];
$age = $_POST['age'];
$id = $_POST['id'];



$conn = new mysqli('localhost', 'root', '', 'pinfo');


if($conn->connect_error){
    die('Connection Failed: ' . $conn->connect_error);
} else {
   
    $stmt = $conn->prepare("INSERT INTO pbinfo (namee,age,id) VALUES (?,?,?)");
    
   
    $stmt->bind_param("sii",$namee, $age,$id);
    
   
    if($stmt->execute()){
        echo "Login details saved successfully!";


    } else {
        echo "Error: " . $stmt->error;
    }
    
   
    $stmt->close();
    $conn->close();

    


    $conn = new mysqli('localhost', 'root', '', 'bedmanage');

    $query2 = "UPDATE beds SET bookstatus = 't' WHERE id = $id";
    $result2 = mysqli_query($conn, $query2);

    if ($result2) {
        echo "<script>
                alert('Bed successfully booked!');
                window.location.href = 'index.php'; 
              </script>";
       
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    $conn->close();
}
?>