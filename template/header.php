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
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="#">Bookshop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
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
                        <li class="nav-item">
                            <form class="form-inline mt-2 mt-md-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">My Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login / Register</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>