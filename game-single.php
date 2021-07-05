<!doctype html>
<html class="no-js" lang="">
    <?php include('Linked-packages/headerLinks.php');?>
        <?php include_once('Database/connection.php');?>

    </head>
    <body>
       
    <?php 
    $game_id = $_GET['game_id'];
    echo $game_id;
    ?>

        <!-- preloader -->
       <?php include('Linked-packages/preloader.php')?>
        <!-- preloader-end -->

        <!-- header-area -->
        <header>
        <?php include('Linked-packages/header.php')?>
        </header><!-- header-area-end -->
    
        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg s-breadcrumb-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>Upcoming <span>Games</span></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">game single</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- game-single-area -->
            <section class="game-single-area pt-120 pb-120">
                <div class="container">
                    <div class="row">
                                    <?php 
                        $sql = "SELECT * FROM `latest_games` WHERE id='$game_id'";
                        $result = mysqli_query($conn, $sql);
                        

                        if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                        
                        ?>
                        <div class="col-12">
                            <div class="game-single-content">
                                <div class="upcoming-game-head">
                                    <div class="uc-game-head-title">
                                        <span><?php echo $row['release_date']?></span>
                                        <h4><?php echo $row['game_title']?></h4>
                                    </div>
                                    <div class="uc-game-price">
                                        <h5><?php echo $row['categories']?></h5>
                                    </div>
                                </div>
                              <p><?php echo $row['description']?></p>
                                <div class="game-single-img">
                                    <div class="row">
                                        <div class="col-sm-6">
                                        <?php
                                        $images = $row['screenshot_image'];
                                        $images = explode(',',$images);
                                        foreach($images AS $image){
                                            ?>
                                        <div class="col-lg-4 col-sm-6">
                                            <?php echo '<img src="'."lgimage/".$image.'" height=350>'; ?>
                                        </div>
                                        <?php
                                         
                                        }
                                        ?>
                                        </div>
                                        <!-- <div class="col-sm-6">
                                            <img src="img/images/game_single_img01.jpg" alt="">
                                        </div> -->
                                    </div>
                                </div>
                                
                                <div class="game-single-title mt-60 mb-30">
                                    <h4>Good to Know</h4>
                                </div>
                                <div class="game-single-info mb-65">
                                    <ul>
                                        <li><span>Category :</span> <?php echo $row['categories']?></li>
                                        <li><span>Requirements :</span><?php echo $row['categories']?></li>
                                        <li><span>Multi player :</span> Not Supported</li>
                                        <li><span>Visual Effect :</span> Good Graphics, Best Visual effect </li>
                                    </ul>
                                </div>
                                <div class="game-single-title mb-30">
                                    <h4><span>Screenshots</span></h4>
                                </div>
                                
                                <div class="game-single-gallery">
                                    <div class="row">
                                        <?php
                                        $images = $row['game_images'];
                                        $images = explode(',',$images);
                                        foreach($images AS $image){
                                            ?>
                                        <div class="col-lg-4 col-sm-6">
                                            <?php echo '<img src="'."lgimage/".$image.'" height=350>'; ?>
                                        </div>
                                        <?php
                                         
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="game-single-shape"><img src="img/images/game_section_shape.png" alt=""></div>
                            </div>
                        </div>
                        <?php
                                   }
        } 
?>
                    </div>
                </div>
            </section>
            <!-- game-single-area-end -->

            <!-- upcoming-games -->
            <section class="upcoming-games-area pb-140">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="game-single-title mb-55">
                                <h4>released <span>GAMES</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="upcoming-game-item mb-40">
                                <div class="upcoming-game-head">
                                    <div class="uc-game-head-title">
                                        <span>SEPTEMBER 22, 2020</span>
                                        <h4><a href="#">zombie land</a></h4>
                                    </div>
                                    <div class="uc-game-price">
                                        <h5>$19</h5>
                                    </div>
                                </div>
                                <p>Compete with players remote island winner takes showdown known issue.</p>
                                <div class="upcoming-game-thumb">
                                    <img src="img/images/upcoming_game_thumb01.jpg" alt="">
                                    <div class="upcoming-game-cart">
                                        <a href="#" class="btn transparent-btn"><i class="fas fa-shopping-basket"></i>BUY Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="upcoming-game-item mb-40">
                                <div class="upcoming-game-head">
                                    <div class="uc-game-head-title">
                                        <span>SEPTEMBER 22, 2020</span>
                                        <h4><a href="#">call of duty</a></h4>
                                    </div>
                                    <div class="uc-game-price">
                                        <h5>$19</h5>
                                    </div>
                                </div>
                                <p>Compete with players remote island winner takes showdown known issue.</p>
                                <div class="upcoming-game-thumb">
                                    <img src="img/images/upcoming_game_thumb02.jpg" alt="">
                                    <div class="upcoming-game-cart">
                                        <a href="#" class="btn transparent-btn"><i class="fas fa-shopping-basket"></i>BUY Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="upcoming-game-item mb-40">
                                <div class="upcoming-game-head">
                                    <div class="uc-game-head-title">
                                        <span>SEPTEMBER 22, 2020</span>
                                        <h4><a href="#">sky hunter</a></h4>
                                    </div>
                                    <div class="uc-game-price">
                                        <h5>$19</h5>
                                    </div>
                                </div>
                                <p>Compete with players remote island winner takes showdown known issue.</p>
                                <div class="upcoming-game-thumb">
                                    <img src="img/images/upcoming_game_thumb03.jpg" alt="">
                                    <div class="upcoming-game-cart">
                                        <a href="#" class="btn transparent-btn"><i class="fas fa-shopping-basket"></i>BUY Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- upcoming-games-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer-area -->
        <footer>
            <div class="footer-top footer-bg s-footer-bg">
                <!-- newsletter-area -->
                <div class="newsletter-area s-newsletter-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="newsletter-wrap">
                                    <div class="section-title newsletter-title">
                                        <h2>Our <span>Newsletter</span></h2>
                                    </div>
                                    <div class="newsletter-form">
                                        <form action="#">
                                            <div class="newsletter-form-grp">
                                                <i class="far fa-envelope"></i>
                                                <input type="email" placeholder="Enter your email...">
                                            </div>
                                            <button>SUBSCRIBE <i class="fas fa-paper-plane"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- newsletter-area-end -->
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="footer-logo mb-35">
                                    <a href="index.html"><img src="img/logo/logo.png" alt=""></a>
                                </div>
                                <div class="footer-text">
                                    <p>Gemas marketplace the relase etras thats sheets continig passag.</p>
                                    <div class="footer-contact">
                                        <ul>
                                            <li><i class="fas fa-map-marker-alt"></i> <span>Address : </span>PO Box W75 Street
                                                lan West new queens</li>
                                            <li><i class="fas fa-headphones"></i> <span>Phone : </span>+24 1245 654 235</li>
                                            <li><i class="fas fa-envelope-open"></i><span>Email : </span>info@exemple.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Products</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="#">Graphics (26)</a></li>
                                        <li><a href="#">Backgrounds (11)</a></li>
                                        <li><a href="#">Fonts (9)</a></li>
                                        <li><a href="#">Music (3)</a></li>
                                        <li><a href="#">Photography (3)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Need Help?</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Refund Policy</a></li>
                                        <li><a href="#">Affiliate</a></li>
                                        <li><a href="#">FAQUse Cases</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Follow us</h5>
                                </div>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Newsletter Sign Up</h5>
                                </div>
                                <div class="footer-newsletter">
                                    <form action="#">
                                        <input type="text" placeholder="Enter your email">
                                        <button><i class="fas fa-rocket"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-fire"><img src="img/images/footer_fire.png" alt=""></div>
                <div class="footer-fire footer-fire-right"><img src="img/images/footer_fire.png" alt=""></div>
            </div>
            <div class="copyright-wrap s-copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-text">
                                <p>Copyright © 2020 <a href="#">Geco</a> All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-none d-md-block">
                            <div class="payment-method-img text-right">
                                <img src="img/images/card_img.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->





		<!-- JS here -->
        <script src="js/vendor/jquery-3.4.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/jquery.meanmenu.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.lettering.js"></script>
        <script src="js/jquery.textillate.js"></script>
        <script src="js/jquery.odometer.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
