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
                                <h2>about <span>story</span></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About stroy</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- inner-about-area -->
            <section class="inner-about-area fix">
                <div class="container">
                <?php
                           $query1 = $_GET['search']; 
                           $query2 = htmlspecialchars($query1); 
                           $query = addslashes($query2); 

                           $sql = "SELECT * FROM `latest_games` WHERE `game_title` = '$query' ";  
                        
                           $raw_results = mysqli_query($conn ,$sql);
                           if(mysqli_num_rows($raw_results) > 0){ 
                           while($results = mysqli_fetch_array($raw_results)){
                           $r1 = $results[1];
                           $r2 = $results[2];
                           }    
                            ?>
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6 order-0 order-lg-2">
                            <div class="inner-about-img">
                                <img src="img/images/inner_about_img01.png" class="wow fadeInRight" data-wow-delay=".3s" alt="">
                                <img src="img/images/inner_about_img02.png" class="wow fadeInLeft" data-wow-delay=".6s" alt="">
                                <img src="img/images/inner_about_img03.png" class="wow fadeInUp" data-wow-delay=".6s" alt="">
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="section-title title-style-three mb-25">
                                <h2>released <span>GAMES</span></h2>
                            </div>
                            <div class="inner-about-content">
                                <h5><?php echo $r2;?></h5>
                                <p></p>
                                <p>Lorem Ipsn gravida. Pro ain gravida nibh vevelit auctor aliqueenean ollicitudin ain gravida nibh vel version an ipsum.</p>
                                <a href="#" class="btn btn-style-two">BUY THEME</a>
                            </div>
                        </div>
                    </div>
                    <?php 
                     }else{

                        $sql = "SELECT * FROM `latest_games` WHERE `game_title` LIKE '%game 05%'";
                        $raw_results = mysqli_query($conn ,$sql);
                        if(mysqli_num_rows($raw_results) > 0){ 
                        while($results = mysqli_fetch_array($raw_results)){
                        print_r($results);
                        }    
                        }?>
                        <?php
                        
                    }
                           ?>
                <div class="inner-about-shape"><img src="img/images/medale_shape.png" alt=""></div>
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