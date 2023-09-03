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

    <section class="hero-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-start text-light">
                    <h1>Welcome to Movie Lover</h1>
                    <p>Discover amazing movies and reviews</p>
                    <a href="./onlyview.php" class="btn btn-dark">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container text-light">
        <div class="row my-5">
            <div class="col-md-4">
                <img src="./Image/harry.jpg" class="img-fluid text-center mx-auto d-block maxW" alt="Image 1">
                <h4 class="mt-3">Harry Potter and the Sorcerer's Stone</h4>
                <p>An orphaned boy enrolls in a school of wizardry, where he learns the truth about himself, his family
                    and the terrible evil that haunts the magical world.</p>
            </div>
            <div class="col-md-4">
                <img src="./Image/harry2.jpg" class="img-fluid text-center mx-auto d-block maxW" alt="Image 2">
                <h4 class="mt-3">Harry Potter the Order of the Phoenix</h4>
                <p>With their warning about Lord Voldemort's return scoffed at, Harry and Dumbledore are targeted by the
                    Wizard authorities as an authoritarian bureaucrat.</p>
            </div>
            <div class="col-md-4">
                <img src="./Image/harry3.jpg" class="img-fluid text-center mx-auto d-block maxW" alt="Image 3">
                <h4 class="mt-3">Harry Potter and the Goblet of Fire</h4>
                <p>Harry Potter finds himself competing in a hazardous tournament between rival schools of magic, but he
                    is distracted by recurring nightmares.</p>
            </div>
        </div>
    </div>

    <div class="container text-light">
        <div class="row my-5">
            <div class="col-md-4">
                <img src="./Image/fast1.jpg" class="img-fluid text-center mx-auto d-block maxW" alt="Image 1">
                <h4 class="mt-3">Fast & Furious 6</h4>
                <p>Hobbs has Dominic and Brian reassemble their crew to take down a team of mercenaries: Dominic
                    unexpectedly gets sidetracked with facing his presumed deceased girlfriend, Letty</p>
            </div>
            <div class="col-md-4">
                <img src="./Image/fast2.jpg" class="img-fluid text-center mx-auto d-block maxW" alt="Image 2">
                <h4 class="mt-3">Fast & Furious Tokiyo Drift</h4>
                <p>Los Angeles police officer Brian O'Conner must decide where his loyalty really lies when he becomes
                    enamored with the street racing world he has been sent undercover to destroy.</p>
            </div>
            <div class="col-md-4">
                <img src="./Image/fast3.jpg" class="img-fluid text-center mx-auto d-block maxW" alt="Image 3">
                <h4 class="mt-3">Fast & Furious 3</h4>
                <p>Los Angeles police officer Brian O'Conner must decide where his loyalty really lies when he becomes
                    enamored with the street racing world he has been sent undercover to destroy.</p>
            </div>
        </div>
    </div>


    <div id="gallery-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#gallery-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#gallery-carousel" data-slide-to="1"></li>
            <li data-target="#gallery-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./Image/1.jpg" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="./Image/2.jpg" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="./Image/3.jpg" class="d-block w-100" alt="Image 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#gallery-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#gallery-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

        <footer class="my-3 text-light">
          <div class="text-center">
            <p>&copy; 2023 Developed By Team MovieLover <a class="nav-link" href="./logout.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Log-out</a></p>
          </div>
        </footer>

    <!-- Latest compiled JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>