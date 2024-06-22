<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "UPDATE tasks SET status='Completed' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirect to the main page
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>
