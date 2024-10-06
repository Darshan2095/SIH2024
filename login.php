<?php

$id = $_GET['id'];
if (isset($id) && !empty($id)) {
    
    $conn = new mysqli('localhost', 'root', '', 'bedmanage');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query2 = "UPDATE beds SET bookstatus = 't' WHERE id = $id";
    $result2 = mysqli_query($conn, $query2);

    if ($result2) {
        echo "<script>
                alert('Bed successfully booked!');
                window.location.href = 'bedbook.php'; 
              </script>";
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    // Close connection
    $conn->close();
}

?>
