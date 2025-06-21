<?php
// Replace with your DB credentials
$conn = new mysqli("localhost:3307", "root", "", "bookshop");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $stmt = $conn->prepare("INSERT INTO newsletter (email) VALUES (?)");
        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            echo "Thank you for subscribing!";
        } else {
            echo "You have already subscribed or an error occurred.";
        }

        $stmt->close();
    } else {
        echo "Invalid email address.";
    }
}

$conn->close();
?>