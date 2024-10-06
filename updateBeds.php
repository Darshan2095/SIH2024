<?php
$wardNo = $_GET['ward'];
$roomNo = $_GET['roomNo']; // Retrieve roomNo from GET request
$conn = new mysqli('localhost', 'root', '', 'bedmanage');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Use prepared statements to prevent SQL injection
$query = $conn->prepare("SELECT * FROM beds WHERE ward = ? AND roomNo = ?");
$query->bind_param("ii", $wardNo, $roomNo);
$query->execute();
$result = $query->get_result();

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    ?>
    <a href="bed2.php?id=<?php echo $row['id']; ?>">
      <div class="bed <?php echo $row['bookstatus']; ?>" id="bed<?php echo $row['id']; ?>">
        <div class="bed-number"><?php echo $row['bedNo']; ?></div>
      </div>
    </a>
    <?php
  }
} else {
  echo "<p>No beds available for the selected ward and room.</p>";
}

$conn->close();
?>
