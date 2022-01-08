<?php $title = "Movie | Movies";
require_once("./templates/header.php");
if (isset($_GET['search'])) {
    $movies = many("SELECT * FROM `movies` WHERE `status`='release' AND `name` LIKE '%" . $_GET['search'] . "%'");
} else {
    $movies = many("SELECT * FROM `movies` WHERE `status`='release'");
}
?>

<!-- =============== START OF PAGE HEADER =============== -->
<section class="page-header overlay-gradient" style="background: url(assets/images/posters/movie-collection.jpg);">
    <div class="container">
        <div class="inner">
            <h2 class="title">Movie List</h2>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Movie List</li>
            </ol>
        </div>
    </div>
</section>
<!-- =============== END OF PAGE HEADER =============== -->

<!-- =============== START OF MAIN =============== -->
<main class="ptb100">
    <div class="container">

        <!-- Start of Filters -->
        <div class="row mb50">

            <div class="col-md-6">
                <!-- Layout Switcher -->
                <div class="layout-switcher">
                    <a href="movie-list.php" class="list active"><i class="fa fa-align-justify"></i></a>
                    <a href="movie-grid.php" class="grid"><i class="fa fa-th"></i></a>
                </div>
            </div>

        </div>
        <!-- End of Filters -->



        <!-- Start of Movie List -->
        <div class="row">

            <!-- Movie List Item -->
            <?php foreach ($movies as $v) : ?>

                <div class="col-md-12 col-sm-12">
                    <div class="movie-list-1 mb30">
                        <div class="listing-container">

                            <!-- Movie List Image -->
                            <div class="listing-image">

                                <!-- Play Button -->
                                <div class="play-btn">
                                    <a href="movie.php?v=<?= $v['slug'] ?>">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>

                                <!-- Buttons -->
                                <div class="buttons">
                                    <a href="#" data-original-title="Rate" data-toggle="tooltip" data-placement="bottom">
                                        <i class="icon-heart"></i>
                                    </a>

                                    <a href="#" data-original-title="Share" data-toggle="tooltip" data-placement="bottom">
                                        <i class="icon-share"></i>
                                    </a>
                                </div>

                                <!-- Rating -->
                                <!-- <div class="stars">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div> -->

                                <!-- Image -->
                                <img src="images/<?= $v['image'] ?>" alt="">
                            </div>

                            <!-- Movie List Content -->
                            <div class="listing-content">
                                <div class="inner">
                                    <h2 class="title"><?= $v['name'] ?></h2>

                                    <p><?= substr($v['story'], 0, 225) ?></p>

                                    <a href="movie.php?v=<?= $v['slug'] ?>" class="btn btn-main btn-effect">details</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
        <!-- End of Movie List -->



        <!-- Start of Pagination -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <nav class="pagination">
                    <ul>
                        <li><a href="#" class="current-page">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="ti-angle-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End of Pagination -->

    </div>
</main>
<!-- =============== END OF MAIN =============== -->



<?php require_once("./templates/footer.php") ?>