<?php


$slotid = isset($_GET['slotid']) ? $_GET['slotid'] : null;
$timeslot = isset($_GET['timeslot']) ? $_GET['timeslot'] : null;
$name = isset($_GET['name']) ? $_GET['name'] : null;

if (!empty($slotid)) {

    $conn = new mysqli('localhost', 'root', '', 'appointment');


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $query2 = $conn->prepare("UPDATE docslot SET sltstatus = 't' WHERE slotid = ?");
    $query2->bind_param("i", $slotid);


    if ($query2->execute()) {


    } else {

        echo "Error updating record: " . $conn->error;
    }

    $query2->close();
    $conn->close();
} else {
    echo "Invalid slot ID.";
}



if (!empty($timeslot)) {
    $conn = new mysqli('localhost', 'root', '', 'appointment');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query2 = $conn->prepare("UPDATE appoinment SET timeslot = '$timeslot' WHERE namee = ?");
    $query2->bind_param("i", $name);


    $CURDATE = date("Y-m-d");
    
    $sql = "UPDATE appoinment SET datee =$CURDATE  WHERE namee = $name";
    $conn->query($sql);
    
    
    
    
    if ($query2->execute()) {
        echo "<script>
                alert('Appoinment successfully booked!');
                window.location.href = 'index.php'; 
              </script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $query2->close();
    $conn->close();
} else {
    echo "Invalid timeslot ID.";
}

?>