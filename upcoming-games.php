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

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg s-breadcrumb-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <!-- <h2>Upcoming <span>Games</span></h2> -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Games</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- upcoming-games -->
            <section class="upcoming-games-area upcoming-games-bg pt-120 pb-80">
                <div class="container">
                    <div class="row">
                    <?php 
        $sql = "SELECT * FROM `latest_games`where game_status='upcoming' AND id=49";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
         
          ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="upcoming-game-item mb-40">
                                <div class="upcoming-game-head">
                                    <div class="uc-game-head-title">
                                        <span><?php echo $row['release_date']?></span>
                                        <h4><a href="#"><?php echo $row['game_title']?></a></h4>
                                    </div>
                                    <div class="uc-game-price">
                                        <h5><?php echo $row['game_status'];?></h5>
                                    </div>
                                </div>
                                <p><?php echo $row['description']?></p>
                                <div class="upcoming-game-thumb">
                                    <?php if($row['image'] == null){?>
                                    <img src="<?php echo $row['image']?>" height='200' width='100' alt="">
                                    <?php
                                    }else{?>
                                    <img src="https://jpassport.asia/static/image-not-available.png" height='200' width='100' alt="">
                                    <?php
                                    }
                                    ?>
                                    <div class="upcoming-game-cart">
                                    <a href="game-single.php?game_id=<?php echo $row['id']; ?>" class="btn transparent-btn">Read more <i class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        }else {?>
                         <div class="col-lg-12 col-md-12">
                            <div class="upcoming-game-item mb-40">
                                <div class="upcoming-game-head justify-content-center">
                                    <div class="uc-game-head-title justify-content-center">
                                        <img src="https://i7.uihere.com/icons/319/868/837/no-data-7b96ec17bb861a24849a99f1a6bc7a4c.png" title="no data found" alt="no data found">
                                        <span style="font-size: 25px;">No Data found!</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php } ?>
                        
                    </div>
                </div>
            </section>
            <!-- upcoming-games-end -->



        </main>
        <!-- main-area-end -->

         <!-- footer-area -->
         <?php include('Linked-packages/footer.php');?>   
        <!-- footer-area-end -->



		<!-- JS here -->
        <?php include('Linked-packages/jsScripts.php');?>
    </body>
</html>
