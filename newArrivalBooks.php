<?php 
    $title = "New Arrival Books";
    require_once "./template/header.php"; 
    require_once "./template/database_functions.php";
    $conn = db_connect();
    $books_rows = select_books($conn, 1); 
    ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-5">
            <h1 class="text-center mt-3 text-primary">New Arrival Books</h1>
        </div>
    </div>
</div>
<div class="container mb-5 mt-3">
<div class="row">
    <div class="col-lg-12">
        <div class="container">
            <div class="row">
                <?php foreach($books_rows as $book) { ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top img-thumbnail" src="./img/<?php echo $book['book_image_name']; ?>" alt="" style="width:400px;height:250px;"></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#"><?php echo $book['book_title']; ?></a>
                            </h4>
                            <h5>TK. <?php echo $book['book_price']; ?></h5>
                            <p class="card-text"><?php echo $book['book_author']; ?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>
                <?php } ?>                    
            </div>
        </div>
    </div>
</div>
<?php require_once "./template/footer.php"; ?>