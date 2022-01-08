<?php $title = "Home | Movies";
require_once("./templates/header.php");
$movies = many("SELECT * FROM `movies` WHERE `status`='release'");
$release = rows("SELECT * FROM `movies` WHERE `status`='release'");
$upcoming = rows("SELECT * FROM `movies` WHERE `status`='upcoming'");
$movieupcoming = many("SELECT * FROM `movies` WHERE `status`='upcoming' LIMIT 3");
$users = rows("SELECT * FROM `users`");
?>
<!-- =============== START OF SLIDER REVOLUTION SECTION =============== -->
<section id="slider" class="full-slider">
    <div class="rev-slider-wrapper fullscreen-container overlay-gradient">
        <div id="fullscreen-slider" class="rev_slider fullscreenbanner" style="display:none" data-version="5.4.1">
            <ul>

                <!-- ===== SLIDE NR. 1 ===== -->
                <li data-transition="fade">
                    <!-- MAIN IMAGE -->
                    <img src="assets/images/slider/slider1.jpg" alt="Image" title="slider-bg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="middle" data-voffset="['-30','-30','-30','-30']" data-responsive_offset="on" data-fontsize="['60','50','40','30']" data-lineheight="['60','50','40','30']" data-whitespace="nowrap" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 5; color: #fff; font-weight: 900;">START STREAMING NOW
                    </div>
                </li>

                <!-- ===== SLIDE NR. 2 ===== -->
                <li data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="2000">
                    <!-- MAIN IMAGE -->
                    <img src="assets/images/slider/slider2.jpg" alt="Image" title="slider-bg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="middle" data-voffset="['-30','-30','-30','-30']" data-responsive_offset="on" data-fontsize="['60','50','40','30']" data-lineheight="['60','50','40','30']" data-whitespace="nowrap" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 5; color: #fff; font-weight: 900;">ULTRA HD RESOLUTION
                    </div>
                </li>

                <!-- ===== SLIDE NR. 3 ===== -->
                <li data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="2000">
                    <!-- MAIN IMAGE -->
                    <img src="assets/images/slider/slider3.jpg" alt="Image" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="3" class="rev-slidebg" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="middle" data-voffset="['-30','-30','-30','-30']" data-responsive_offset="on" data-fontsize="['60','50','40','30']" data-lineheight="['60','50','40','30']" data-whitespace="nowrap" data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 5; color: #fff; font-weight: 900;">LATEST MOVIES & SERIES
                    </div>
                </li>

            </ul>
        </div>
    </div>
    <!-- ===== END OF REV SLIDER WRAPPER ===== -->


    <!-- ===== START OF SEARCH FORM WRAPPER ===== -->
    <div class="search-form-wrapper search-form-rev">
        <div class="container">

            <!-- ===== START OF SEARCH FORM ===== -->
            <form id="search-form-1" action="movie-list.php" method="GET">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-sm-10 col-12">
                        <div class="form-group">
                            <input name="search" type="text" id="search-keyword" value="" class="form-control" placeholder="Enter Movies or Series Title">
                            <button type="submit" class="btn btn-main btn-effect"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- ===== END OF SEARCH FORM ===== -->

        </div>
    </div>
    <!-- ===== END OF SEARCH FORM WRAPPER ===== -->
</section>
<!-- =============== START OF SLIDER REVOLUTION SECTION =============== -->




<!-- =============== START OF LATEST MOVIES SECTION =============== -->
<section class="latest-movies ptb100">
    <div class="container">

        <!-- Start of row -->
        <div class="row">
            <div class="col-md-8">
                <h2 class="title">Latest Movies</h2>
            </div>


            <div class="col-md-4 align-self-center text-right">
                <a href="#" class="btn btn-icon btn-main btn-effect">
                    view all
                    <i class="ti-angle-double-right"></i>
                </a>
            </div>
        </div>
        <!-- End of row -->


        <!-- Start of Latest Movies Slider -->
        <div class="owl-carousel latest-movies-slider mt20">

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
<!-- =============== END OF LATEST MOVIES SECTION =============== -->




<!-- =============== START OF UPCOMING MOVIES SECTION =============== -->
<section class="upcoming-movies parallax ptb100" data-background="assets/images/posters/movie-collection.jpg" data-color="#3e4555" data-color-opacity="0.95">
    <div class="container">

        <!-- Start of row -->
        <div class="row justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="title text-white">Upcoming Movies & TV Shows</h2>
            </div>
        </div>
        <!-- End of row -->



        <!-- Start of row -->
        <div class="row mt50">

            <?php foreach ($movieupcoming as $v) : ?>
                <!-- === Start of Upcoming Featured Movies & TV Shows === -->
                <div class="col-md-4">

                    <!-- Start of Upcoming Featured Item -->
                    <div class="movie-box-1 upcoming-featured-item">

                        <!-- Start of Poster -->
                        <div class="poster">
                            <img src="images/<?= $v['image'] ?>" alt="">
                        </div>
                        <!-- End of Poster -->

                        <!-- Start of Buttons -->
                        <div class="buttons">
                            <a href="movie.php?v=<?= $v['slug'] ?>">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                        <!-- End of Buttons -->

                        <!-- Start of Movie Details -->
                        <div class="movie-details">
                            <h4 class="movie-title">
                                <a href="movie.php?v=<?= $v['slug'] ?>"><?= $v['name'] ?></a>
                            </h4>
                            <span class="released">Release Date: <?= $v['release_date'] ?></span>
                        </div>
                        <!-- End of Movie Details -->
                    </div>
                    <!-- End of Upcoming Featured Item -->
                </div>
                <!-- === End of Upcoming Featured Movies & TV Shows === -->
            <?php endforeach ?>
        </div>
        <!-- End of row -->

    </div>
</section>
<!-- =============== END OF UPCOMING MOVIES SECTION =============== -->



<!-- =============== END OF COUNTER SECTION =============== -->
<section class="counter bg-main-gradient ptb50 text-center">
    <div class="container">
        <div class="row">

            <!-- 1st Count up item -->
            <div class="col-md-4 col-sm-12">
                <span class="counter-item" data-from="0" data-to="<?= $upcoming ?>"><?= $upcoming ?></span>
                <h4>Upcoming</h4>
            </div>

            <!-- 2nd Count up item -->
            <div class="col-md-4 col-sm-12">
                <span class="counter-item" data-from="0" data-to="<?= $release ?>"><?= $release ?></span>
                <h4>Release</h4>
            </div>

            <!-- 3rd Count up item -->
            <div class="col-md-4 col-sm-12">
                <span class="counter-item" data-from="0" data-to="<?= $users ?>"><?= $users ?></span>
                <h4>Users</h4>
            </div>

        </div>
    </div>
</section>
<!-- =============== END OF COUNTER SECTION =============== -->

<?php require_once("./templates/footer.php") ?>