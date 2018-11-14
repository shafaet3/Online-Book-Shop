<?php  $title = "Login";?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">
        <title><?php echo $title; ?></title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="carousel.css" rel="stylesheet">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="./css/custom.css" rel="stylesheet">
        </style>
    </head>
    <body  class="text-center">
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="#">Bookshop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="#">Books</a> -->
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Category
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="newArrivalBooks.php">New Arrival</a>
                                    <a class="dropdown-item" href="topRatedBooks.php">Top Rated</a>
                                    <a class="dropdown-item" href="bestSellerBooks.php">Best Seller</a>
                                    <a class="dropdown-item" href="">Science</a>
                                    <a class="dropdown-item" href="">Comics</a>
                                    <a class="dropdown-item" href="">Travel</a>
                                    <a class="dropdown-item" href="">Health</a>
                                    <a class="dropdown-item" href="">Cooking</a>
                                    <a class="dropdown-item" href="">Sports</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <form class="form-signin" method="post" action="userVerify.php">
            <h1 class="h3 mb-3 font-weight-normal">User Login</h1>
            <hr>
            <input type="email" name="email" class="form-control mb-3" placeholder="Email address" required autofocus>
            <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
            <div class="mt-3">
                <label class="mr-3 mb-3">
                <a href="register.php" class="btn btn-outline-primary btn-lg" role="button">SignUp</a>
                </label>
                <label>
                <input type="submit" name="login" value="Login" class="btn btn-outline-primary btn-lg">
                </label>
            </div>
            <footer class="py-1 fixed-bottom mb-3">
                <div class="container">
                    <p class="m-0 text-center text-muted">&copy; Bookshop Website 2018</p>
                    <a class="m-0 text-center" href="adminLogin.php">Admin</a>
                </div>
            </footer>
        </form>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>