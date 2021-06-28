<!doctype html>
<html class="no-js" lang="">
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
        </header>
        <!-- header-area-end -->

        <!-- main-area -->

        <?php 
        
        $search=isset($_POST['search']);
        ?>

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
        $sql = "SELECT * FROM `latest_games` WHERE game_title='$search'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          $row = mysqli_fetch_assoc($result) ;
          echo $row['game_title'];
          ?>
                    <!-- <div class="row align-items-center">
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
                                <?php echo $row['game_title']; ?>
                                <h5>Monica Global Publishing for Marketing</h5>
                                <p>Compete with 100 players on a remote Lorem Ipsn gravida. Pro ain gravida nibh vel velit an auctor aliqueenean
                                ollicitudin ain gravida nibh vel version an ipsum.</p>
                                <p>Lorem Ipsn gravida. Pro ain gravida nibh vevelit auctor aliqueenean ollicitudin ain gravida nibh vel version an ipsum.</p>
                                <a href="#" class="btn btn-style-two">BUY THEME</a>
                            </div>
                        </div>
                    </div> -->

           <?php
    
}  
else{
    ?>
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
          while($row = mysqli_fetch_assoc($result)) {
         
          ?>
            <!-- $row["game_title"].$row["image"].$row["categories"]."<br/>";  -->
        

                                    <div class="latest-games-items mb-30">
                                        <div class="latest-games-thumb">
                                            <a href="#"><img src="<?php echo $row['image']?>" height='400' width='100' alt=""></a>
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
                <?php
}
?>
                </div>
                <div class="inner-about-shape"><img src="img/images/medale_shape.png" alt=""></div>
            </section>
            <!-- inner-about-area-end -->

            <!-- latest-match-area -->
            
            <!-- latest-match-area-end -->

            <!-- team-member -->
            
            <!-- team-member-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer-area -->
        <?php include('Linked-packages/footer.php');?>     
        <!-- footer-area-end -->





		<!-- JS here -->
        <?php include('Linked-packages/jsScripts.php');?>
    </body>
</html>