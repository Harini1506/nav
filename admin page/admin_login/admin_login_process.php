<?php 
if ($result->num_rows > 0) {
  // Authentication successful
  session_start();
  $_SESSION['admin_username'] = $admin_name;
  header('location: admin_dashboard.php');
} else {
  // Authentication failed
  echo "Invalid admin name or password";
}
header('location: admin_dashboard.php');
exit();
?>