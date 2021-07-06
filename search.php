<!doctype html>
<html class="no-js" lang="">
    <head>
        <?php include('Linked-packages/headerLinks.php');?>
        <?php include_once('Database/connection.php');?>
    </head>
    <body>
        <?php include('Linked-packages/preloader.php')?>
        <header>
        <?php include('Linked-packages/header.php')?>
        </header>

        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>search <span></span></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Top rated games</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- inner-about-area -->
          <section class="shop-area pt-120 pb-90">
                <div class="container">
                    <div class="row">
                        <?php
                            $query = $_GET['search']; 
                            $search_query = addslashes($query); 

                            $exect_search = "SELECT * FROM `latest_games` where game_title='$search_query' "; 
                            $matching_search = "SELECT * FROM `latest_games` where game_title LIKE '%$search_query%' "; 
                            
                            $exect_raw_results = mysqli_query($conn ,$exect_search);
                            $matching_raw_results = mysqli_query($conn ,$matching_search);
                            if(mysqli_num_rows($exect_raw_results) > 0){ 
                            while($row = mysqli_fetch_array($exect_raw_results)){
                                ?>
                        <section class="inner-about-area fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6 order-0 order-lg-2">
                            <div class="inner-about-img">
                                <img src="<?php echo $row['game_images']?>" class="wow fadeInRight" data-wow-delay=".3s" width="500px" height="400px" alt="">
                                
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="section-title title-style-three mb-25">
                                <h2><?php echo $row["game_title"] ?></h2>
                            </div>
                            <div class="inner-about-content">
                                <h5><?php echo $row["categories"] ?></h5>
                                <p><?php echo $row["description"] ?></p>
                                <a href="contact.php" class="btn btn-style-two">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inner-about-shape"><img src="img/images/medale_shape.png" alt=""></div>
            </section>
                        <?php
                                }
                        }
                        
                        else if(mysqli_num_rows($matching_raw_results) > 0){ 
                            $i =0;
                            while($row = mysqli_fetch_array($matching_raw_results)){
                                $i++;
                                if($i > 3 ){
                                    break;
                                }
                            ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="upcoming-game-item mb-40">
                                <div class="upcoming-game-head">
                                    <div class="uc-game-head-title">
                                        <span><?php echo $row["release_date"] ?></span>
                                        <h4><a href="#"><?php echo $row["game_title"] ?></a></h4>
                                    </div>
                                    <div class="uc-game-price">
                                        <h5><?php echo $row["categories"]?></h5>
                                    </div>
                                </div>
                                <p><?php echo $row["description"] ?></p>
                                <div class="upcoming-game-thumb">
                                    <img src="<?php echo $row['game_images']?>" height="200px" width="200px" alt="">
                                    <div class="upcoming-game-cart">
                                        <a href="game-single.php?game_id=<?php echo $row['id']; ?>" class="btn transparent-btn"><i class="fas fa-shopping-basket"></i>BUY Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                    }else{
                        ?>
                            <div class="section-title home-four-title black-title text-center mb-60">
                                <h2>Game <span>Not Found</span></h2>
                            </div>
                        </br></br></br></br></br>
                            <?php
                    }
                    ?>
                    </div>
                </div>
            </section>

        </main>
        <!-- main-area-end -->

        <!-- footer-area -->
        <?php include('Linked-packages/footer.php');?>     
        <!-- footer-area-end -->
    <!-- JS here -->
        <?php include('Linked-packages/jsScripts.php');?>
    </body>
</html>