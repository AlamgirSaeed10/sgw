<!doctype html>
<html class="no-js" lang="">
<head>
        <?php include('Linked-packages/headerLinks.php');?>
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
            <section class="breadcrumb-area breadcrumb-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>News<span> Blog</span></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">News Blog</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- blog-area -->
            <section class="blog-area primary-bg pt-50 pb-175">
                <div class="container">
                    <div class="row">
                        <?php
                        $link = "";
                        $title = "";
                        $pubDate = "";
                        $category ="";
                        $description ="";
                        
                        $map_url = "https://www.realwire.com/rss/?id=345&row=&view=Synopsis/"; 
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
                            foreach($data->channel->item as $item)
                            {
                                $link =  (string)$item->link;
                                $name = $item->children('media', true)->credit;
                                $title = (string)$item->title;
                                $pubDate = (string)$item->pubDate;
                                $description = (string)$item->description;
                                ?>  
                        <div class="col-lg-8">
                            <div class="blog-list-post">
                                <div class="blog-list-post-thumb">
                                    <!-- <a href="blog-details.html"><img src="img/blog/t_blog_thumb01.jpg" alt=""></a> -->
                                </div>
                                <div class="blog-list-post-content">
                                    <div class="blog-list-post-tag mb-25">
                                        <a href="#"><?php echo $category;?></a>
                                    </div>
                                    <h2><?php echo $title;?></h2>
                                    <div class="blog-meta">
                                        <ul>
                                            <li><a href="#"></a><?php echo $pubDate;?></li>
                                        </ul>
                                    </div>
                                    <p><?php echo $description;?></p>
                                </div>
                                <div class="blog-list-post-bottom">
                                    <ul>
                                        <li><a href="<?php echo $link;?>">Read more<i class="fas fa-angle-double-right"></i></a></li>
                                        <li>
                                            <span>SHARE :</span>
                                            <div class="blog-post-share">
                                                <a href="https://www.facebook.com/Shah-Game-World-105430321793389"><i class="fab fa-facebook-f"></i></a>
                                                <a href="https://twitter.com/shahgameworld"><i class="fab fa-twitter"></i></a>
                                                <a href="https://www.linkedin.com/company/shah-game-world"><i class="fab fa-linkedin"></i></a>
                                                <a href="https://www.instagram.com/shah_game_world/"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                       <?php }
                    } }?>
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
