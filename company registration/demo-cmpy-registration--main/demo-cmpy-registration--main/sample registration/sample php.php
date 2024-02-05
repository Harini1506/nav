<?php
// $hostname='localhost';
// $username='root';
// $password='';
// $database='sample_register';

// $mysqli = new mysqli($hostname, $username, $password, $database);
// $name = $_POST['name'];
// $phone = $_POST['phone'];
// echo "Name: $name, Phone: $phone";
// $stmt = $mysqli->prepare("INSERT INTO login_page (name, phone) VALUES ('$name', '$phone')");
// if ($stmt->execute()) {
//   echo "User registered successfully.";
// } else {
//   echo "Error: " . $stmt->error;
// }

// $mysqli->close();
$dbusername='root';
$dbpassword='';
$dsn='mysql:host=localhost;
dbname=sample_register';
$db=new PDO($dsn,$dbusername,$dbpassword);
$name=$_POST['name'];
$phone=$_POST['phone'];
$query="INSERT INTO login (name,phone) VALUES ('$name','$phone')";
$insert_count=$db->exec($query);
// delete query
// $query="DELETE FROM login_page WHERE name='ooo'";
// $db->exec($query);`
?>