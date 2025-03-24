<?php
$conn = new mysqli("localhost", "root", "", "sph_db");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM sph_reservation";
$result = $conn->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}

echo json_encode(["data" => $data]);

$conn->close();
?>
