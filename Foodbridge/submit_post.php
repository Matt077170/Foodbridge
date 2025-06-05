<?php
// Connect to database
$conn = new mysqli("localhost", "root", "", "foodbridge");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = $_POST['title'];
$content = $_POST['content'];

// Save post
$stmt = $conn->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
$stmt->bind_param("ss", $title, $content);
$stmt->execute();
$stmt->close();
$conn->close();

// Redirect back to form (this will reload recent posts including the new one)
header("Location: recent.php");
exit();
?>
