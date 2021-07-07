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
        
        </header><!-- header-area-end -->

        <!-- main-area -->
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
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
                                <h2>About <span>US</span></h2>
                            </div>
                            <div class="inner-about-content">
                                <h5>Welcome to SHAH GAME WORLD!</h5>
                                <p>We are excited to see you on our profile. SHAH GAME WORLD is a leading mobile app, games and enterprise software development company! – expert in development, customization, and integration of complex enterprise-level solutions, business intelligence analytics, advanced mobile game solutions, over 1+ years of experience. Our team is constantly improving and mastering industry progression.</p>
                                <a href="contact.php" class="btn btn-style-two">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inner-about-shape"><img src="img/images/medale_shape.png" alt=""></div>
            </section>
            <!-- inner-about-area-end -->

            <!-- latest-match-area -->
            <section class="latest-match-area latest-match-bg pt-115 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title title-style-three white-title text-center mb-70">
                                <h2>Latest <span>GAMES</span></h2>
                                <p>Compete with 100 players on a remote island for winner takes showdown
                                    known issue where certain skin strategic</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php 
                        $num_per_page=04;
                        if(isset($_GET["page"]))
                        {
                            $page=$_GET["page"];
                        }
                        else
                        {
                            $page=1;
                        }

                        $start_from=($page-1)*04;

                        $sql="select * from latest_games ORDER BY id DESC limit $start_from,$num_per_page" ;
                        $rs_result= mysqli_query($conn, $sql);
                        $i =0;
                            while($rows= mysqli_fetch_array($rs_result))
                            {
                                $i++;
                                if($i>10){
                                    break;
                                }
                                else{
                            ?>
                        <div class="col-lg-6">
                            <div class="latest-match-box mb-30" id="load">
                                <div class="latest-match-thumb">
                                    <img src="<?php echo $rows['game_images'];?>" width="200px" height="270px" alt="">
                                </div>
                                <div class="tournament-schedule-content">
                                    <h3><a href="#"><?php echo $rows['game_title'];?></a></h3>
                                    <p><?php echo $rows['description'];?></p>
                                    <div class="tournament-schedule-meta">
                                       
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
                <?php 
    
    
                        $sql="select * from latest_games";
                        $rs_result=mysqli_query($conn ,$sql);
                        $total_records=mysqli_num_rows($rs_result);
                        $total_pages=ceil($total_records/$num_per_page);
                        echo "<div class='my-class'>";
                        if($page>1)
                                    {
                                    
                                        echo "<a href='about-us.php?page=".($page-1)."' class='btn btn-danger'>Previous</a>";
                                    }
                        
                        for($i=1;$i<=$total_pages;$i++)
                        {
                            echo "<a href='about-us.php?page=".$i."'class='btn btn-danger'>".$i."</a>" ;
                        }
                        
                        if($i>$page)
                        {
                            echo "<a href='about-us.php?page=".($page+1)."' class='btn btn-danger'>Next</a>";
                            echo "</div>";
                        }
                        ?>
            </section>
            <!-- latest-match-area-end -->

            <!-- team-member -->
            <section class="team-member-area pt-115 pb-125">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title title-style-three text-center mb-70">
                                <h2>Our team <span>member</span></h2>
                                <p>Compete with 100 players on a remote island for winner takes showdown
                                    known issue where certain skin strategic</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="team-member-box text-center mb-50">
                                <div class="team-member-thumb">
                                    <img src="https://media.discordapp.net/attachments/809013301202649139/858348270657208330/Screenshot.png?width=615&height=676" alt="">
                                    <div class="team-member-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-member-content">
                                    <h4><a href="#">tomas aleman</a></h4>
                                    <span>Marketing CEO</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="team-member-box text-center mb-50">
                                <div class="team-member-thumb">
                                    <img src="https://cdn.discordapp.com/attachments/786561685514485772/860494473389408266/20210303_102037.jpg" alt="">
                                    <div class="team-member-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-member-content">
                                    <h4><a href="#">james wiseman</a></h4>
                                    <span>Marketing CEO</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="team-member-box text-center mb-50">
                                <div class="team-member-thumb">
                                    <img src="img/team/team_member03.jpg" alt="">
                                    <div class="team-member-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-member-content">
                                    <h4><a href="#">emily watson</a></h4>
                                    <span>Head of Iaea</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="team-member-box text-center mb-50">
                                <div class="team-member-thumb">
                                    <img src="img/team/team_member04.jpg" alt="">
                                    <div class="team-member-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-member-content">
                                    <h4><a href="#">alexandra paol</a></h4>
                                    <span>Web Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- team-member-end -->

        </main>
        <!-- main-area-end -->

       <!-- footer-area -->
       <?php include('Linked-packages/footer.php');?>        
       <!-- footer-area-end -->
		<?php include('Linked-packages/jsScripts.php');?>

        
    </body>
</html>

 

