<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movies";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
    $sql = "SELECT * FROM movie_data WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (isset($_POST['update'])) {
        $title = $_POST['title'];
        $director = $_POST['director'];
        $year = $_POST['year'];
        $gener = $_POST['gener'];
        $rating = $_POST['rating'];
        $description = $_POST['description'];

        $sql = "UPDATE movie_data SET title='$title', director='$director', year='$year', gener='$gener', rating='$rating', description='$description' WHERE id=$id";

        if (mysqli_query($conn, $sql)) {
            header("Location: display.php");
            exit;
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Update Movie</title>
</head>

<body>
    <div class="container my-5 text-light p-3">
        <h2 class="text-center text-danger">Update Movie Information</h2>
        <form method="POST" action="">
            <div class="form-group my-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title']; ?>">
            </div>
            <div class="form-group my-3">
                <label for="director">Director</label>
                <input type="text" class="form-control" id="director" name="director" value="<?php echo $row['director']; ?>">
            </div>
            <div class="form-group my-3">
                <label for="year">Year</label>
                <input type="text" class="form-control" id="year" name="year" value="<?php echo $row['year']; ?>">
            </div>
            <div class="form-group my-3">
                <label for="gener">gener</label>
                <input type="text" class="form-control" id="gener" name="gener" value="<?php echo $row['gener']; ?>">
            </div>
            <div class="form-group my-3">
                <label for="rating">Rating</label>
                <input type="text" class="form-control" id="rating" name="rating" value="<?php echo $row['rating']; ?>">
            </div>
            <div class="form-group my-3">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"><?php echo $row['description']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary my-3" name="update">Update</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
