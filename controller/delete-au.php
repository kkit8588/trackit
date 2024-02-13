<?php
include '../connect.php';

// Use prepared statement to prevent SQL injection
$id = $_POST['id'];
$stmt = $conn->prepare("DELETE FROM about_us WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
