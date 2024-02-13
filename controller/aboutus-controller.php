<?php
include '../connect.php';

$id = $_POST['id'];
$Tittle = $_POST['Tittle'];
$content = $_POST['content'];

if ($id == "") {
    // Inserting data
    $stmt = $conn->prepare("INSERT INTO about_us (tittle, content) VALUES (?, ?)");
    $stmt->bind_param("ss", $Tittle, $content);

    $insert = $stmt->execute();

    $stmt->close();
} else {
    // Updating data
    $stmt = $conn->prepare("UPDATE about_us SET tittle=?, content=? WHERE id = ?");
    $stmt->bind_param("ssi", $Tittle, $content, $id);

    $update = $stmt->execute();

    $stmt->close();
}

$conn->close();
?>
