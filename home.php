<?php 
    $title = "Home";
    require_once "./template/header.php"; 
    require_once "./template/database_functions.php";
    $conn = db_connect();
    
    ?>
<!-- *************************************New Arrival Books******************************** -->
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12 mt-5">
            <h2><a href="newArrivalBooks.php">New Arrival Books</a></h2>
            <a class="btn btn-outline-primary float-right mb-3" href="newArrivalBooks.php">See All</a>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item bg-white active">
                    <div class="container">
                        <div class="row">
                            <?php $books_rows = select_books($conn, 1);
                            for($i = 0; $i < 3; $i++) { ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-thumbnail" src="./img/<?php echo $books_rows[$i]['book_image_name']; ?>" alt="" style="width:400px;height:250px;"></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="#"><?php echo $books_rows[$i]['book_title']; ?></a>
                                        </h4>
                                        <h5>TK. <?php echo $books_rows[$i]['book_price']; ?></h5>
                                        <p class="card-text"><?php echo ($books_rows[$i]['book_author']); ?></p>
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
                <!-- ********************************Second slide*************************** -->
                <div class="carousel-item bg-white">
                    <div class="container">
                        <div class="row">
                            <?php for($i = 3; $i < 6; $i++) { ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-thumbnail" src="./img/<?php echo $books_rows[$i]['book_image_name']; ?>" alt="" style="width:400px;height:250px;"></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="#"><?php echo $books_rows[$i]['book_title']; ?></a>
                                        </h4>
                                        <h5>TK. <?php echo $books_rows[$i]['book_price']; ?></h5>
                                        <p class="card-text"><?php echo ($books_rows[$i]['book_author']); ?></p>
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
                <!-- *********************Third slide********************* -->
                <div class="carousel-item bg-white">
                    <div class="container">
                        <div class="row">
                            <?php for($i = 6; $i < 9; $i++) { ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-thumbnail" src="./img/<?php echo $books_rows[$i]['book_image_name']; ?>" alt="" style="width:400px;height:250px;"></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="#"><?php echo $books_rows[$i]['book_title']; ?></a>
                                        </h4>
                                        <h5>TK. <?php echo $books_rows[$i]['book_price']; ?></h5>
                                        <p class="card-text"><?php echo ($books_rows[$i]['book_author']); ?></p>
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
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<!-- *********************************New Arrival Books end********************************** -->
<!-- *************************************Best Seller Books******************************** -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2><a href="bestSellerBooks.php">Best Seller Books</a></h2>
            <a class="btn btn-outline-primary float-right mb-3" href="bestSellerBooks.php">See All</a>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item bg-white active">
                    <div class="container">
                        <div class="row">
                            <?php $books_rows = select_books($conn, 3); 
                            for($i = 0; $i < 3; $i++) { ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-thumbnail" src="./img/<?php echo $books_rows[$i]['book_image_name']; ?>" alt="" style="width:400px;height:250px;"></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="#"><?php echo $books_rows[$i]['book_title']; ?></a>
                                        </h4>
                                        <h5>TK. <?php echo $books_rows[$i]['book_price']; ?></h5>
                                        <p class="card-text"><?php echo ($books_rows[$i]['book_author']); ?></p>
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
                <!-- ********************************Second slide*************************** -->
                <div class="carousel-item bg-white">
                    <div class="container">
                        <div class="row">
                            <?php for($i = 3; $i < 6; $i++) { ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-thumbnail" src="./img/<?php echo $books_rows[$i]['book_image_name']; ?>" alt="" style="width:400px;height:250px;"></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="#"><?php echo $books_rows[$i]['book_title']; ?></a>
                                        </h4>
                                        <h5>TK. <?php echo $books_rows[$i]['book_price']; ?></h5>
                                        <p class="card-text"><?php echo ($books_rows[$i]['book_author']); ?></p>
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
                <!-- *********************Third slide********************* -->
                <div class="carousel-item bg-white">
                    <div class="container">
                        <div class="row">
                            <?php for($i = 6; $i < 9; $i++) { ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-thumbnail" src="./img/<?php echo $books_rows[$i]['book_image_name']; ?>" alt="" style="width:400px;height:250px;"></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="#"><?php echo $books_rows[$i]['book_title']; ?></a>
                                        </h4>
                                        <h5>TK. <?php echo $books_rows[$i]['book_price']; ?></h5>
                                        <p class="card-text"><?php echo ($books_rows[$i]['book_author']); ?></p>
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
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!-- *********************************Best Seller Books end********************************** -->
<!-- *************************************Top Rated Books******************************** -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2><a href="bestSellerBooks.php">Top Rated Books</a></h2>
            <a class="btn btn-outline-primary float-right mb-3" href="topRatedBooks.php">See All</a>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item bg-white active">
                    <div class="container">
                        <div class="row">
                            <?php $books_rows = select_books($conn, 2); 
                            for($i = 0; $i < 3; $i++) { ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-thumbnail" src="./img/<?php echo $books_rows[$i]['book_image_name']; ?>" alt="" style="width:400px;height:250px;"></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="#"><?php echo $books_rows[$i]['book_title']; ?></a>
                                        </h4>
                                        <h5>TK. <?php echo $books_rows[$i]['book_price']; ?></h5>
                                        <p class="card-text"><?php echo ($books_rows[$i]['book_author']); ?></p>
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
                <!-- ********************************Second slide*************************** -->
                <div class="carousel-item bg-white">
                    <div class="container">
                        <div class="row">
                            <?php for($i = 3; $i < 6; $i++) { ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-thumbnail" src="./img/<?php echo $books_rows[$i]['book_image_name']; ?>" alt="" style="width:400px;height:250px;"></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="#"><?php echo $books_rows[$i]['book_title']; ?></a>
                                        </h4>
                                        <h5>TK. <?php echo $books_rows[$i]['book_price']; ?></h5>
                                        <p class="card-text"><?php echo ($books_rows[$i]['book_author']); ?></p>
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
                <!-- *********************Third slide********************* -->
                <div class="carousel-item bg-white">
                    <div class="container">
                        <div class="row">
                            <?php for($i = 6; $i < 9; $i++) { ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-thumbnail" src="./img/<?php echo $books_rows[$i]['book_image_name']; ?>" alt="" style="width:400px;height:250px;"></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="#"><?php echo $books_rows[$i]['book_title']; ?></a>
                                        </h4>
                                        <h5>TK. <?php echo $books_rows[$i]['book_price']; ?></h5>
                                        <p class="card-text"><?php echo ($books_rows[$i]['book_author']); ?></p>
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
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!-- *********************************Top Rated Books end********************************** -->
<?php require_once "./template/footer.php"; ?>