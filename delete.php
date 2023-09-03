<?php
// Database connection

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movies";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Delete operation
$id = $_GET['id']; // Assuming you pass the ID of the record to delete via the query string

$sql = "DELETE FROM movie_data WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    // Check for successful execution
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record.";
    }

    mysqli_stmt_close($stmt);
}

header("Location: display.php");

mysqli_close($conn);
?>
