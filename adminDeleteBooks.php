<?php 
    $title = "Admin Delete Books";
    require_once "./template/header.php"; 
    require_once "./template/database_functions.php";
    $conn = db_connect();
    $all_books_rows = select_all_books($conn); 
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
    </head>
    <body  class="text-center">
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
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <a href="admin.php" class="btn btn-outline-primary btn-sm mt-5 float-left">Back</a>
                    <br>
                    <h4 class="text-center mt-5">Delete Books</h4>
                    <form class="form-inline float-right mt-5">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                <p class="text-center text-info">
                        <?php 
                            if(isset($_POST['delete'])){
                                    
                                    $book_id = $_POST['id']; 
                                   
                                    $query = "DELETE FROM books WHERE book_id = '$book_id'";
                                    $result = mysqli_query($conn, $query);
                                    if(!$result){
                                        echo "Can't delete book" . mysqli_error($conn);
                                        exit;
                                    } 
                                    else {
                                        echo "Book Deleted Successfully!";
                                        // /header('Location: adminDeleteBooks.php');
                                         if(isset($conn)) {mysqli_close($conn);}
                                    }
                                }
                                else{
                               
                            ?>
                    </p>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">ISBN No</th>
                            <th scope="col">Author</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($all_books_rows as $book) { ?>
                        <form method="post" action="adminDeleteBooks.php" enctype="multipart/form-data">
                            <tr>
                                <th scope="row"><input name="id" readonly="readonly" class="form-control" value="<?php echo $book['book_id']; ?>"></th>

                                <td><img src="./img/<?php echo $book['book_image_name']; ?>" height="40" width="60"></td>
                                <td><?php echo $book['book_title']; ?></td>
                                <td><?php echo $book['book_isbn']; ?></td>
                                <td><?php echo $book['book_author']; ?></td>
                                <td><?php echo $book['book_category_id']; ?></td>
                                <td><?php echo $book['book_price']; ?></td>
                                <td><input type="submit" name="delete" value="Delete" class="btn btn-outline-primary btn-sm"></td>
                            </tr>
                            <?php } ?>
                        </form>
                    </tbody>
                </table>
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
