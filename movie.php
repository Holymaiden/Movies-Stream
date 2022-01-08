<?php $title = $_GET['v'] . " | Movies";
require_once("./templates/header.php");
$movie = single("SELECT `movies`.*,`categorys`.`name` as `category_name` FROM `movies` LEFT JOIN `categorys` ON `movies`.`category_id`=`categorys`.`id` WHERE `slug`='" . $_GET['v'] . "'");
$images = many("SELECT * FROM `images` WHERE `movie_id`=" . $movie['id'] . "");

$movies = many("SELECT * FROM `movies` WHERE `status`='release' ORDER BY `id` DESC");
?>



<!-- =============== START OF MOVIE DETAIL INTRO =============== -->
<section class="movie-detail-intro overlay-gradient ptb100" style="background: url(assets/images/other/movie-detail-bg.jpg);">
</section>
<!-- =============== END OF MOVIE DETAIL INTRO =============== -->



<!-- =============== START OF MOVIE DETAIL INTRO 2 =============== -->
<section class="movie-detail-intro2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="movie-poster">
                    <img src="images/<?= $movie['image'] ?>" alt="">

                    <a href="videos/<?= $movie['video'] ?>" class="play-video">
                        <i class="fa fa-play"></i>
                    </a>
                </div>


                <div class="movie-details">
                    <h3 class="title"><?= $movie['name'] ?></h3>

                    <ul class="movie-subtext">
                        <li><?= $movie['category_name'] ?></li>
                        <li><?= $movie['release_date'] ?></li>
                    </ul>

                    <a href="videos/<?= $movie['video'] ?>" class="btn btn-main btn-effect play-video"><i class="fa fa-play"></i></a>
                    <!-- <a href="#" class="btn btn-main btn-effect">trailer</a>
                    <a href="#" class="btn btn-main btn-effect">watch later</a>
                    <a href="#" class="btn rate-movie"><i class="icon-heart"></i></a>

                    <div class="rating mt10">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <span>296 Ratings</span>
                    </div> -->
                </div>

                <div class="clearfix"></div>

            </div>
        </div>
    </div>
</section>
<!-- =============== End OF MOVIE DETAIL INTRO 2 =============== -->


<!-- =============== START OF MOVIE DETAIL MAIN SECTION =============== -->
<section class="movie-detail-main ptb100">
    <div class="container">

        <div class="row">
            <!-- Start of Movie Main -->
            <div class="col-lg-8 col-sm-12">
                <div class="inner pr50">

                    <!-- Storyline -->
                    <div class="storyline">
                        <h3 class="title">Storyline</h3>

                        <p><?= $movie['story'] ?></p>
                    </div>

                    <!-- Media -->
                    <div class="movie-media mt50">
                        <h3 class="title"> Photos & Videos</h3>

                        <ul class="image-gallery isotope">

                            <?php foreach ($images as $v) : ?>
                                <li class="element">
                                    <a href="images/<?= $v['source'] ?>">
                                        <img src="images/<?= $v['source'] ?>" class="img-responsive" alt="<?= $v['alt'] ?>">
                                    </a>
                                </li>
                            <?php endforeach ?>

                        </ul>

                    </div>

                </div>
            </div>
            <!-- End of Movie Main -->


            <!-- Start of Sidebar -->
            <div class="col-lg-4 col-sm-12">
                <div class="sidebar">

                    <!-- Start of Details Widget -->
                    <aside class="widget widget-movie-details">
                        <h3 class="title">Details</h3>

                        <ul>
                            <li><strong>Release date: </strong><?= $movie['release_date'] ?></li>
                            <li><strong>Director: </strong><?= $movie['director'] ?></li>
                            <li><strong>Country: </strong><?= $movie['country'] ?></li>
                        </ul>
                    </aside>
                    <!-- End of Details Widget -->

                </div>
            </div>
            <!-- End of Sidebar -->
        </div>

    </div>
</section>
<!-- =============== END OF MOVIE DETAIL MAIN SECTION =============== -->



<!-- =============== START OF RECOMMENDED MOVIES SECTION =============== -->
<section class="recommended-movies bg-light ptb100">
    <div class="container">

        <!-- Start of row -->
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <h2 class="title">People who liked this also liked...</h2>
            </div>
        </div>
        <!-- End of row -->


        <!-- Start of Latest Movies Slider -->
        <div class="owl-carousel recommended-slider mt20">

            <!-- === Start of Sliding Item === -->
            <?php foreach ($movies as $v) : ?>
                <div class="item">
                    <!-- Start of Movie Box -->
                    <div class="movie-box-1">

                        <!-- Start of Poster -->
                        <div class="poster">
                            <img src="images/<?= $v['image'] ?>" alt="">
                        </div>
                        <!-- End of Poster -->

                        <!-- Start of Buttons -->
                        <div class="buttons">
                            <a href="movie.php?v=<?= $v['slug'] ?>">
                                <i class=" fa fa-play"></i>
                            </a>
                        </div>
                        <!-- End of Buttons -->

                        <!-- Start of Movie Details -->
                        <div class="movie-details">
                            <h4 class="movie-title">
                                <a href="movie.php?v=<?= $v['slug'] ?>"><?= $v['name'] ?></a>
                            </h4>
                            <span class="released"><?= $v['release_date'] ?></span>
                        </div>
                        <!-- End of Movie Details -->

                        <!-- Start of Rating -->
                        <!-- <div class="stars">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <span>7.5 / 10</span>
                        </div> -->
                        <!-- End of Rating -->

                    </div>
                    <!-- End of Movie Box -->
                </div>
            <?php endforeach ?>
            <!-- === End of Sliding Item === -->

        </div>
        <!-- End of Latest Movies Slider -->

    </div>
</section>
<!-- =============== END OF RECOMMENDED MOVIES SECTION =============== -->


<?php require_once("./templates/footer.php") ?>