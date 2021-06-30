
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<style>
#lion-roar-div{
    transition: all .2s ease-in-out;
}
#lion-roar-div:hover{
    transform: scale(1.2);
}

</style>
<footer>
            <div class="footer-top footer-bg s-footer-bg">
                <!-- newsletter-area -->
                <div class="newsletter-area s-newsletter-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="newsletter-wrap">
                                    <div class="section-title newsletter-title">
                                        <h2>Our <span>Newsletter</span></h2>
                                    </div>
                                    <div class="newsletter-form">
                                        <form action="#">
                                            <div class="newsletter-form-grp">
                                                <i class="far fa-envelope"></i>
                                                <input type="email" placeholder="Enter your email...">
                                            </div>
                                            <button>SUBSCRIBE <i class="fas fa-paper-plane"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- newsletter-area-end -->
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="footer-logo mb-35">
                                <div id="lion-roar-div">
                                <!-- <a href="index.php"> -->
                                <img src="img/logo/SHAH-GAME-WORLD.png" 
                                    alt="Shah game world logo" title="Shah game world logo" id="imagezoom" height="315px">
                                    <!-- </a> -->
                                    <audio id="beep" preload="auto">
                                    <source src="img/audio/lionroar.mp3"></source>
                                    </audio>
                                    </div>
                                    
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Need Help?</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="about-us.php">About Us</a></li>
                                        <li><a href="career.php">Looking for Job?</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-20">
                                <div class="fw-title mb-35">
                                    <h5>Follow us</h5>
                                </div>
                                <div class="footer-social">
                                    <ul>
                                    <li><a href="https://www.facebook.com/Shah-Game-World-105430321793389"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/shahgameworld786/"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/shah-game-world"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-text">
                                    <div class="footer-contact">
                                        <ul>
                                            <li><i class="fas fa-map-marker-alt"></i> <span>Address : </span>Ch Heights First floor Citi Housing Scheme Jhelum 49600</li>
                                            <li><i class="fas fa-headphones"></i> <span>Phone : </span>+92 544 225099</li>
                                            <li><i class="fas fa-envelope"></i><span>Email : </span>info@shahgameworld.com</li>
                                        </ul>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap s-copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-text">
                                <p>Copyright © <?php echo date("Y"); ?> <a href="https://shahgameworld.com">Shah Game World</a> All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script>
		
		var beepOne = $("#beep")[0];
		$("#lion-roar-div")
	.click(function() {
		beepOne.play();
	});	
	</script>