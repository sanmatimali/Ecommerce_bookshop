<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<pre>";
print_r($_POST);
echo "</pre>";
?>

<?php
// Database configuration
$host = 'localhost:3308';       // usually localhost
$user = 'root';            // your DB username
$pass = '';                // your DB password
$dbname = 'bookshop'; // replace with your database name

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data
$name    = $_POST['name'];
$email   = $_POST['email'];
$phone   = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contact (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");

$stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);

// Execute
if ($stmt->execute()) {
    echo "Your message has been saved!";
} else {
    echo "Error: " . $stmt->error;
}

// Close
$stmt->close();
$conn->close();
?>