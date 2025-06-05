<?php
$host = "localhost";
$db = "foodbridge";
$user = "root";
$pass = "";

// Connect to database
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get and combine date
$date_of_birth = $_POST['dob_year'] . "-" . $_POST['dob_month'] . "-" . $_POST['dob_day'];

$first_name = $_POST['first_name'];
$last_name = $_POST['lastname'];
$address = $_POST['address'];
$district = $_POST['district'];
$contact_number = $_POST['contact_number'];
$username = $_POST['username'];
$email_address = $_POST['email_address'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

// Save to database
$sql = "INSERT INTO users (first_name, last_name, date_of_birth, address, district, contact_number, username, email_address, password)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssss", $first_name, $last_name, $date_of_birth, $address, $district, $contact_number, $username, $email_address, $password);

if ($stmt->execute()) {
     header("Location: login.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
