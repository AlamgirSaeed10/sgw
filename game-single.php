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
                                    <div class="col-sm-6">
                                            <img src="<?php echo $row['game_images']?>" alt="">
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
                                            $images = $row['screenshot_image'];
                                            $images = explode(',',$images);
                                            foreach($images AS $image){
                                                ?>
                                        <div class="col-lg-4 col-sm-6">
                                             <?php echo '<img src="'."lgimage/".$image.'"  >'; ?>
                                             
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
                    <?php 
        $sql = "SELECT * FROM `latest_games`WHERE game_status ='publish'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $i =0;

          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
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
                                        <a href="game-single.php?game_id=<?php echo $row['id']; ?>" class="btn transparent-btn"><i class="fas fa-shopping-basket"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                   }
        } 
?>
                        
                    </div>
                </div>
            </section>
            <!-- upcoming-games-end -->

        </main>
        <!-- main-area-end -->

 <!-- footer-area -->
 <?php include('Linked-packages/footer.php');?>        
        <!-- footer-area-end -->





		<?php include('Linked-packages/jsScripts.php');?>
    </body>
</html>
