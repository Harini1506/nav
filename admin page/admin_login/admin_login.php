<?php
session_start();


// Create connection

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$admin_name = $_POST['admin_name'];
$admin_password = $_POST['admin_password'];

$sql = "SELECT * FROM admin_registration WHERE admin_username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $admin_name);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  if (password_verify($admin_password, $row['admin_password'])) {
    // Authentication successful
    $_SESSION['admin_username'] = $admin_name;
    echo "done login";
    // header('location: admin_dashboard.php');
    exit();
  } else {
    // Invalid password
    echo "Invalid admin name or password";
  }
} else {
  // Invalid admin name
  echo "Invalid admin name or password";
}

$conn->close();
?>