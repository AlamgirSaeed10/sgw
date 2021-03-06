<header class="header-style-four">
            <div class="header-top-area d-none d-lg-block">
                <div class="container-fluid container-full-padding">
                    <div class="row align-items-center">
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="header-top-offer"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header-top-right">
                                <div class="header-social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/Shah-Game-World-105430321793389"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/shahgameworld"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/company/shah-game-world"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="https://www.instagram.com/shah_game_world/"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="header-top-action">
                                    <ul>
                                        <li>
                                            <div class="header-top-mail">
                                                <p><span>|</span><i class="far fa-envelope-open"></i><a href="mailto:info@shahgameworld.com">info@shahgameworld.com</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="header-user-login">
                                                <a href="career.php"><i class="fa fa-briefcase"></i>Apply for Job</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="header-four-wrap">
                <div class="container custom-container-two">
                    <div class="row">
                        <div class="col-12">
                            <div class="main-menu menu-style-two">
                                <nav>
                                    <div class="logo">
                                        <!-- <a href="index.php"><img src="img/logo/SHAH-GAME-WORLD.png" width ="250px" height ="auto" alt="Logo"></a> -->
                                    </div>
                                    <div id="mobile-menu" class="navbar-wrap d-none d-lg-flex">
                                         <ul>
                                            <li class="<?= (basename($_SERVER['PHP_SELF']) == "index.php" )? "show" : ""; ?>">
                                                <a  href="index.php" class=" <?= (basename($_SERVER['PHP_SELF']) == "index.php" )? "active" : ""; ?>">Home</a>
                                            </li>

                                            <li class="<?= (basename($_SERVER['PHP_SELF']) == "about-us.php" )? "show" : ""; ?>">
                                                <a href="about-us.php" class=" <?= (basename($_SERVER['PHP_SELF']) == "about-us.php" )? "active" : ""; ?>">About Story</a>
                                            </li>

                                            <li class="<?= (basename($_SERVER['PHP_SELF']) == "upcoming-games.php" )? "show" : ""; ?>">
                                                <a href="upcoming-games.php" class=" <?= (basename($_SERVER['PHP_SELF']) == "upcoming-games.php" )? "active" : ""; ?>">Upcoming Games</a>
                                            </li>

                                            <li class="<?= (basename($_SERVER['PHP_SELF']) == "blog.php" )? "show" : ""; ?>">
                                            <a  href="blog.php" class=" <?= (basename($_SERVER['PHP_SELF']) == "blog.php" )? "active" : ""; ?>">Blog</a>
                                            </li>

                                            <li class="<?= (basename($_SERVER['PHP_SELF']) == "contact.php" )? "show" : ""; ?>">
                                                <a href="contact.php" class=" <?= (basename($_SERVER['PHP_SELF']) == "contact.php" )? "active" : ""; ?>">contact</a>
                                            </li>

                                        </ul>
                                     </div>
                                    <div class="header-action">
                                        <ul>
                                            <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="mobile-menu"></div>
                        </div>
                        <!-- Modal Search -->
                        <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <form action="search.php" method="GET" autocomplete="off">
                                        <input type="text" name='search' id="search" placeholder="Search here..." required>
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>