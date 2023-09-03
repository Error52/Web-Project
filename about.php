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

    <div class="conatiner">
        <div class="row my-5 text-light m-5">
            <div class="col-12">
                <h1 class="text-center text-danger">About Us</h1>
                <p>The "Movie Reviews" web project is a dynamic and user-friendly application that allows movie
                    enthusiasts to share their opinions, insights, and recommendations about various movies. Built using
                    PHP, HTML, CSS, and MySQL, this project offers a range of features including user registration and
                    authentication, CRUD operations, and an intuitive user interface.</p>

                <p>Users can create an account, log in, and easily add new movie reviews by providing details such as
                    the movie title, review text, genre, description, and even uploading related photos. The application
                    securely stores this information in a MySQL database, ensuring data integrity and confidentiality.
                </p>

                <p>Users can browse through the collection of movie reviews, read detailed summaries, view associated
                    photos, and search for reviews based on specific movie titles, genres, or keywords. They can also
                    apply filters to refine their search results, making it easier to discover reviews for movies of
                    interest.</p>

                <p>Additionally, users have the flexibility to update their existing movie reviews, allowing them to
                    revise their opinions or provide additional insights. They can also delete their reviews if desired,
                    giving them full control over their content.</p>

                <p>The project emphasizes a visually appealing and responsive design, ensuring a seamless user
                    experience across different devices. Proper error handling and validation mechanisms are implemented
                    to enhance data integrity and provide informative error messages to users.</p>

                <p>With a focus on security, the application includes secure user authentication and protection against
                    common vulnerabilities like SQL injection. It adheres to accessibility standards, making it
                    accessible to users with disabilities, and ensures compatibility with popular web browsers.</p>

                <p>Overall, the "Movie Reviews" web project provides a platform for movie enthusiasts to engage in
                    discussions, discover new movies, and make informed decisions based on the shared insights and
                    recommendations of the community.</p>
            </div>
        </div>
    </div>

    <footer class="my-3 text-light">
        <div class="text-center">
          <p>&copy; 2023 Developed By Team MovieLover </p>
        </div>
      </footer>

    <!-- Latest compiled JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>