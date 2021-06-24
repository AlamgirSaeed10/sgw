<!doctype html>
<html class="no-js" lang="en">
    <head>
        <?php include('Linked-packages/headerLinks.php');?>
        <?php include_once('Database/connection.php');?>

    </head>
    <body>
       

        <!-- preloader -->
       <?php include('Linked-packages/preloader.php')?>
        <!-- preloader-end -->

        <!-- header-area -->
        <header>
        <?php include('Linked-packages/header.php')?>
        </header><!-- header-area-end -->

        <!-- main-area -->
        <main>

            <!-- slider-area -->
            <section class="slider-area home-four-slider">
                <div class="slider-active ">
                    <div class="single-slider slider-bg slider-style-two">
                        <div class="container custom-container-two">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7 col-md-11">
                                    <div class="slider-content">
                                        <h6 data-animation="fadeInUp" data-delay=".4s">world gaming</h6>
                                        <h2 data-animation="fadeInUp" data-delay=".4s">About </h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">Find technology or people for digital projects in public sector and Find an individual specialist develope researcher.</p>
                                        <a href="#" class="btn btn-style-two" data-animation="fadeInUp" data-delay=".8s">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-img"><img src="img/slider/command.jpg" alt="" data-animation="slideInRightS" data-delay=".8s"></div>
                        </div>
                    </div>
                    <div class="single-slider slider-bg slider-style-two">
                        <div class="container custom-container-two">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7 col-md-11">
                                    <div class="slider-content">
                                        <h6 data-animation="fadeInUp" data-delay=".4s">world gaming</h6>
                                        <h2 data-animation="fadeInUp" data-delay=".4s">UpComming </h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">Find technology or people for digital projects in public sector and Find an individual specialist develope researcher.</p>
                                        <a href="#" class="btn btn-style-two" data-animation="fadeInUp" data-delay=".8s">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-img"><img src="img/slider/slide1.jpg" alt="" data-animation="slideInRightS" data-delay=".8s"></div>
                        </div>
                    </div>
                    <div class="single-slider slider-bg slider-style-two">
                        <div class="container custom-container-two">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7 col-md-11">
                                    <div class="slider-content">
                                        <h6 data-animation="fadeInUp" data-delay=".4s">world gaming</h6>
                                        <h2 data-animation="fadeInUp" data-delay=".4s">Top<span>Games</span> </h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">Find technology or people for digital projects in public sector and Find an individual specialist develope researcher.</p>
                                        <a href="#" class="btn btn-style-two" data-animation="fadeInUp" data-delay=".8s">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-img"><img src="img/slider/1595255375465.jpg" alt="" data-animation="slideInRightS" data-delay=".8s"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider-area-end -->

             

            <!-- home-four-area-bg -->
            <div class="home-four-area-bg">
                <div class="bg"></div>
                <!-- latest-games-area -->
                <section class="latest-games-area home-four-latest-games pt-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-8">
                                <div class="section-title home-four-title mb-50">
                                    <span>LATEST RELEASES</span>
                                    <h2>Create & <span>Manage</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="latest-games-active owl-carousel">
                                    <?php 
        $sql = "SELECT * FROM `latest_games`";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {?>
            <!-- $row["game_title"].$row["image"].$row["categories"]."<br/>";  -->
        

                                    <div class="latest-games-items mb-30">
                                        <div class="latest-games-thumb">
                                            <a href="#"><img src="img/product/latest_games_thumb01.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-games-content">
                                            <div class="lg-tag">
                                                <a href="#"><?php echo $row["categories"]?></a>
                                            </div>
                                            <h4><a href="#"><?php echo $row["game_title"] ?></a></h4>
                                            <p>entry fee : <span>free</span></p>
                                        </div>
                                    </div>
                                       <?php
                                   }
        } 
?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- latest-games-area-end -->

                <!-- live-match-area -->
                <section class="live-match-area pt-90">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-8">
                                <div class="section-title home-four-title text-center mb-60">
                                    <h2>watch live <span>match</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-9">
                                <div class="live-match-wrap">
                                    <img src="img/images/live_match_img.jpg" alt="">
                                    <a href="https://www.youtube.com/watch?v=04KPiGmC7Lc" class="popup-video"><img src="img/icon/video_play_icon.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- live-match-area-end -->

                <!-- live-match-team-area -->
                <section class="live-match-area fix pt-120 pb-110">
                    <div class="container custom-container-two">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="live-match-team">
                                    <img src="img/team/live_match_logo01.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="live-match-time text-center">
                                    <span>upcoming live matches</span>
                                    <h2 class="time">08:30</h2>
                                    <h2 class="live-overlay-text">live</h2>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="live-match-team right">
                                    <img src="img/team/live_match_logo02.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- live-match-team-area-end -->

            </div>
            <!-- home-four-area-bg-end -->

            <!-- featured-game-area -->
            <section class="featured-game-area new-released-game-area pt-115 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8">
                            <div class="section-title home-four-title black-title text-center mb-60">
                                <h2>ALL RELEASED <span>GAMES</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid container-full">
                    <div class="row no-gutters new-released-game-active">
                        <div class="col-lg-3">
                            <div class="featured-game-item mb-30">
                                <div class="featured-game-thumb">
                                    <img src="img/images/s_featured_game_thumb01.jpg" alt="">
                                </div>
                                <div class="featured-game-content">
                                    <h4><a href="#">JUST FOR <span>GAMERS</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span>Playstation 5 , Xbox</span>
                                    </div>
                                </div>
                                <div class="featured-game-content featured-game-overlay-content">
                                    <div class="featured-game-icon"><img src="img/icon/featured_game_icon.png" alt=""></div>
                                    <h4><a href="#">JUST FOR <span>GAMERS</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span>Playstation 5 , Xbox</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="featured-game-item mb-30">
                                <div class="featured-game-thumb">
                                    <img src="img/images/s_featured_game_thumb02.jpg" alt="">
                                </div>
                                <div class="featured-game-content">
                                    <h4><a href="#">Need FOR <span>Speed</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span>Playstation 5 , Xbox</span>
                                    </div>
                                </div>
                                <div class="featured-game-content featured-game-overlay-content">
                                    <div class="featured-game-icon"><img src="img/icon/featured_game_icon.png" alt=""></div>
                                    <h4><a href="#">Need FOR <span>Speed</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span>Playstation 5 , Xbox</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="featured-game-item mb-30">
                                <div class="featured-game-thumb">
                                    <img src="img/images/s_featured_game_thumb03.jpg" alt="">
                                </div>
                                <div class="featured-game-content">
                                    <h4><a href="#">egypt hunting <span>GAMERS</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span>Playstation 5 , Xbox</span>
                                    </div>
                                </div>
                                <div class="featured-game-content featured-game-overlay-content">
                                    <div class="featured-game-icon"><img src="img/icon/featured_game_icon.png" alt=""></div>
                                    <h4><a href="#">egypt hunting <span>GAMERS</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span>Playstation 5 , Xbox</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="featured-game-item mb-30">
                                <div class="featured-game-thumb">
                                    <img src="img/images/s_featured_game_thumb04.jpg" alt="">
                                </div>
                                <div class="featured-game-content">
                                    <h4><a href="#">JUST FOR <span>GAMERS</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span>Playstation 5 , Xbox</span>
                                    </div>
                                </div>
                                <div class="featured-game-content featured-game-overlay-content">
                                    <div class="featured-game-icon"><img src="img/icon/featured_game_icon.png" alt=""></div>
                                    <h4><a href="#">JUST FOR <span>GAMERS</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span>Playstation 5 , Xbox</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="featured-game-item mb-30">
                                <div class="featured-game-thumb">
                                    <img src="img/images/s_featured_game_thumb02.jpg" alt="">
                                </div>
                                <div class="featured-game-content">
                                    <h4><a href="#">Need FOR <span>Speed</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span>Playstation 5 , Xbox</span>
                                    </div>
                                </div>
                                <div class="featured-game-content featured-game-overlay-content">
                                    <div class="featured-game-icon"><img src="img/icon/featured_game_icon.png" alt=""></div>
                                    <h4><a href="#">Need FOR <span>Speed</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span>Playstation 5 , Xbox</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- featured-game-area-end -->

            

            <!-- blog-area -->
            <section class="blog-area pt-115 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title home-four-title black-title text-center mb-65">
                                <h2>Latest News & <span>Articles</span></h2>
                                <p>Compete with 100 players on a remote island for winner takes showdown known issue where certain skin strategic</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="blog-post home-four-blog-post mb-50">
                                <div class="blog-thumb mb-30">
                                    <a href="#"><img src="img/blog/home_four_blog_thumb01.jpg" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-meta">
                                        <ul>
                                            <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                            <li><i class="far fa-calendar-alt"></i>september 19, 2020</li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Shooter action video</a></h4>
                                    <p>Compete with 100 players on a remote island thats winner takes showdown known issue.</p>
                                    <a href="blog-details.html" class="read-more">Read More <i class="fas fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="blog-post home-four-blog-post mb-50">
                                <div class="blog-thumb mb-30">
                                    <a href="#"><img src="img/blog/home_four_blog_thumb02.jpg" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-meta">
                                        <ul>
                                            <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                            <li><i class="far fa-calendar-alt"></i>september 19, 2020</li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">THE WALKING DEAD</a></h4>
                                    <p>Compete with 100 players on a remote island thats winner takes showdown known issue.</p>
                                    <a href="blog-details.html" class="read-more">Read More <i class="fas fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="blog-post home-four-blog-post mb-50">
                                <div class="blog-thumb mb-30">
                                    <a href="#"><img src="img/blog/home_four_blog_thumb03.jpg" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-meta">
                                        <ul>
                                            <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                            <li><i class="far fa-calendar-alt"></i>september 19, 2020</li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">DEFENSE OF THE ANCIENTS</a></h4>
                                    <p>Compete with 100 players on a remote island thats winner takes showdown known issue.</p>
                                    <a href="blog-details.html" class="read-more">Read More <i class="fas fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer-area -->
<?php include('Linked-packages/footer.php');?>        
        <!-- footer-area-end -->





		<?php include('Linked-packages/jsScripts.php');?>
    </body>
</html>
