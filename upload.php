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

// Form data insertion
if (isset($_POST['submit'])) {
  $title = $_POST['title'];
  $director = $_POST['director'];
  $year = $_POST['year'];
  $gener = $_POST['gener'];
  $rating = $_POST['rating'];
  $description = $_POST['description'];
  $image = $_FILES['image']['tmp_name'];
  $imgContent = addslashes(file_get_contents($image));

  $sql = "INSERT INTO movie_data (title, director, year, gener, rating, description, image) VALUES ('$title', '$director', '$year', '$gener', '$rating', '$description', '$imgContent')";

  if (mysqli_query($conn, $sql)) {
    echo '<div class="container text-center text-light my-5">Data inserted successfully.</div>';
    header("Location: display.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Movie Lover</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php" style="color:red;text-transform: uppercase;">MovieLover</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

<h1 class="text-center text-danger my-5"><a href="./index.php" class="home">Movie Lover</a></h1>

<form class="container text-light my-5" method="post" action="upload.php" enctype="multipart/form-data">
  <div class="mb-3">
    <label class="form-label">Movie Name</label>
    <input type="text" class="form-control" id="title" name="title" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Director</label>
    <input type="text" class="form-control" id="director" name="director" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Year of release</label>
    <input type="number" class="form-control" id="year" name="year" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Gener</label>
    <input type="text" class="form-control" id="gener" name="gener" required>
  </div>
  <div class="mb-3">
  <label class="form-label" for="rating">Rating (0-5)</label>
    <input type="number" class="form-control" id="rating" name="rating" min="0" max="5" placehonlder="1 - 5" value="0" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Short description</label>
    <input type="text" class="form-control" id="description" name="description" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Upload movie image</label>
    <input type="file" class="form-control" id="image" name="image" required>
  </div>
  <button type="submit" class="btn btn-danger" id="submit" name="submit">Submit</button>
</form>
 

    <!-- Latest compiled JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>