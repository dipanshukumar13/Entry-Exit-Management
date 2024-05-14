<?php
include_once 'connect.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST["username"];
$password = $_POST["password"];
echo $username;
$sql = "INSERT INTO Admin (Admin_ID,Admin_Name) VALUES ('$password', '$username')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
$response = [
    "status" => "success",
    "message" => "Data received successfully!"
];

header("Content-Type: application/json");
echo json_encode($response);
}
?>