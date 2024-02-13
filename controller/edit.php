<?php
include 'connect.php';

if (isset($_GET['email'])) {
    $email = $_GET['email'];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM user_tbl WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        $id = $row['id'];
        $email = $row['email'];
        $fullname = $row['fullname'];
        

        // Now you can use $userEmail and $userId in your code
    } else {
        // Handle the case where no user is found with the given email
    }

    $stmt->close();
}
?>
