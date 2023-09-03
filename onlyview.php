<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Movie Lover</title>
</head>

<body>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php" style="color:red;text-transform: uppercase;">MovieLover</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./onlyview.php">Find Movies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about.php">About Us</a>
                        </li>
                        <li class="nav-item" style="padding-left: 114px;">
                            <a class="nav-link" href="./loginindex.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Log-in</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>


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

// Fetch data from the database
$sql = "SELECT * FROM movie_data";
$result = mysqli_query($conn, $sql);

// Iterate through the results and display images
while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="row align-items-center mb-3 text-light m-5 bd text-wrap">';
    echo '<div class="col-12" style="width: 600px;">';
    echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" width="300" height="400" /><br>';
    echo '</div>';
    echo '<div class="col">';
    echo '<h1>' . $row["title"] . '</h1><br>';
    echo "Director: " . $row["director"] . "<br>";
    echo "Year: " . $row["year"] . "<br>";
    echo "Genre: " . $row["gener"] . "<br>";
    echo "Rating: " . $row["rating"] . "<br>";
    echo '<div class="text-wrap">';
    echo "Description: " . $row["description"] . "<br>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}

mysqli_close($conn);
?>