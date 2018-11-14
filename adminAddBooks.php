<?php
    session_start(); 
    $title = "Admin Add Books";
    require_once "./template/database_functions.php";
    $conn = db_connect();
    ?>
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
    <body  class="mt-5">
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="#">Bookshop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="adminLogin.php">LogOut</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-lg-12 mt-5">
                    <form class="form-inline float-right">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <a href="admin.php" class="btn btn-outline-primary btn-sm float-left">Back</a>
                    <br>
                    <h4 class="text-center mt-5">Add Books</h4>
                </div>
                <div class="col-md-12">
                    <p class="text-center text-info">
                        <?php 
                            if(isset($_POST['add'])){
                            
                                    $isbn = trim($_POST['isbn']);
                                    $title = trim($_POST['title']);
                                    $author = trim($_POST['author']);
                                    $category = trim($_POST['category']);
                                    $price = floatval(trim($_POST['price']));
                                 
                                    // add image
                                    if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){
                                        $image = $_FILES['image']['name'];
                                        $directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
                                        $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "./img/";
                                        $uploadDirectory .= $image;
                                        move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory);
                                    }
                            
                                    $query = "INSERT INTO books (book_isbn, book_category_id, book_title, book_author, book_image_name, book_price) VALUES ('$isbn', '$category', '$title', '$author', '$image', '$price')";
                                    $result = mysqli_query($conn, $query);
                                    if(!$result){
                                        echo "Can't add new data " . mysqli_error($conn);
                                        exit;
                                    } 
                                    else {
                                        echo "Data Added Successfully!";
                                    }
                                }
                                if(isset($conn)) {mysqli_close($conn);}
                            ?>
                    </p>
                </div>
                <div class="col-md-12">
                    <form method="post" action="adminAddBooks.php" enctype="multipart/form-data">
                        <table class="table" align="center" style="width:25%">
                            <tr>
                                <th>ISBN</th>
                                <td><input type="text" name="isbn" required></td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td><input type="text" name="title" required></td>
                            </tr>
                            <tr>
                                <th>Author</th>
                                <td><input type="text" name="author" required></td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td><input type="file" name="image" required></td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td><input type="text" name="price" required></td>
                            </tr>
                            <tr>
                                <td>Category</td>
                                <td>
                                    <select class="form-control" name="category">
                                        <option selected="true">Select</option>
                                        <option value="1">New Arrival</option>
                                        <option value="2">Top Rated</option>
                                        <option value="3">Best Seller</option>
                                        <option value="4">Science</option>
                                        <option value="5">Comics</option>
                                        <option value="6">Travel</option>
                                        <option value="7">Health</option>
                                        <option value="8">Cooking</option>
                                        <option value="9">Sports</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="reset" value="Reset" class="btn btn-outline-primary btn-md">
                                </td>
                                <td>
                                    <input type="submit" name="add" value="Add Book" class="btn btn-outline-primary btn-md">
                                </td>
                            </tr>
                        </table>
                    </form>
                    <br/>
                </div>
                <a href="admin.php" class="btn btn-outline-primary btn-sm">Back</a>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>