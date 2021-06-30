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
            <video  style="position: absolute;
                    object-fit: cover;
                    width: 100%;
                    height: 100%;
                    z-index: -1;"
                    src="img/slider/PS4 - Ghost Recon Breakpoint Trailer (2019).mp4" type="video/mp4" autoplay="auto"  muted playsinline="" loop="" preload="auto" class="sc-qYsuA jDsubJ"></video> 
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
                            <div class="slider-img"></div>
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
                            <div class="slider-img"></div>
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
                            <div class="slider-img"></div>
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
                                    <img src="img/slider/video.jpg" alt="">
                                    <a href="https://www.youtube.com/watch?v=y-9_d3IT_yA" class="popup-video"><img src="img/icon/video_play_icon.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- live-match-area-end -->

                

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
                    <?php 
        $sql = "SELECT * FROM `latest_games`";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
         
          ?>
                        <div class="col-lg-3">
                            <div class="featured-game-item mb-30">
                                <div class="featured-game-thumb">
                                    <img src="<?php echo $row['image']?>" height='400' width='100' alt="">
                                </div>
                                <div class="featured-game-content">
                                    <h4><a href="#"><?php echo $row["game_title"] ?> </a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span><?php echo $row["Platform"] ?>  <?php echo $row["categories"]?></span>
                                    </div>
                                </div>
                                <div class="featured-game-content featured-game-overlay-content">
                                    <div class="featured-game-icon"><img src="img/icon/featured_game_icon.png" alt=""></div>
                                    <h4><a href="#"><?php echo $row["game_title"] ?> </a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span><?php echo $row["Platform"] ?>  <?php echo $row["categories"]?></span>
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
                    <?php
                    $link = "";
                    $title = "";
                    $pubDate = "";
                    $category ="";
                    $description ="";
                    
                    $map_url = "https://www.techrepublic.com/rssfeeds/topic/big-data/"; 
                    if (($response_xml_data = file_get_contents($map_url))===false){
                        echo "Error fetching XML\n";
                    } else {
                    libxml_use_internal_errors(true);
                    $data = simplexml_load_string($response_xml_data);
                    if (!$data) {
                        echo "Error loading XML\n";
                        foreach(libxml_get_errors() as $error) {
                            echo "\t", $error->message;
                        }
                    } else {
                        $category  =  $data->channel->category;
                        for ($i=0; $i <3; $i++) { 
                        foreach($data->channel->item as $item)
                        {
                                # code...
                            
                            $link =  (string)$item->link;
                            $name = $item->children('media', true)->credit;

                            $title = (string)$item->title;
                            $pubDate = (string)$item->pubDate;
                            $description = (string)$item->description;
                            }
                            ?>
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="blog-post home-four-blog-post mb-50">
                                
                               
                                <div class="blog-post-content">
                                    <div class="blog-meta">
                                    <h4><a href="#"><?php echo $title;?></a></h4>
                                        <ul>
                                            <li><i class="far fa-user"></i><a href="#"><?php echo $name; ?></a></li>
                                            <li><i class="far fa-calendar-alt"></i><?php echo " ".$pubDate;?></li>
                                        </ul>
                                    </div>
                                    
                                    <p><?php echo $description; ?></p>
                                    <a href="<?php echo $link;?>" class="read-more">Read More <i class="fas fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php   
              }
              }
            }
            ?>
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
