<!doctype html>
<html class="no-js" lang="">
    <head>
        <?php include('Linked-packages/headerLinks.php');?>
        <?php include_once('Database/connection.php');?>
    </head>
    <body>
        <?php include('Linked-packages/preloader.php')?>
        <header>
        <?php include('Linked-packages/header.php');?>
        <?php 
        
        $sql = "SELECT * FROM `latest_games` order by id asc";
        $result = mysqli_query($conn,$sql);
        $img_row = mysqli_fetch_assoc($result);
        $get_images = $img_row['game_images'];
        $show_images = explode(',',$get_images);
        ?>
        </header>

        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>Top <span>Rated Games</span></h2>
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
                            $raw_results = mysqli_query($conn ,$sql);
                            if(mysqli_num_rows($raw_results) > 0){ 
                            while($row = mysqli_fetch_array($raw_results)){
                                ?>
                        <div class="col-lg-4 col-sm-6">
                            <div class="accessories-item text-center mb-80">
                                <div class="accessories-thumb mb-30">
                                    <a href="#">
                                    <?php
                                     foreach($show_images AS $set_image)
                                     {
                                         if($set_image == null){
                                             echo '<img src="img/bg/about_bg_image.jpg" height=150>';
                                        }else{
                                            ?>
                                            <img src="'<?php echo $set_image;?>'">;
                                             <?php
                                         }
                                     
                                     }?></a>
                                </div>
                                <div class="accessories-content">
                                    <h5><a href="#"><?php echo $row['game_title']?></a></h5>
                                    <span><?php echo $row['categories']?></span>
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

        </main>
        <!-- main-area-end -->

        <!-- footer-area -->
        <?php include('Linked-packages/footer.php');?>     
        <!-- footer-area-end -->
    <!-- JS here -->
        <?php include('Linked-packages/jsScripts.php');?>
    </body>
</html>