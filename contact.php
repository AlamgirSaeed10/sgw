<!doctype html>
<html class="no-js" lang="">
<head>
        <?php include('Linked-packages/headerLinks.php');?>
        <?php include_once('Database/connection.php');
        $success = "";
        $error = "";
        ?>
        <style>
.alert_success {
  padding: 20px;
  background-color: #04AA6D;
  color: white;
}
.alert_error {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}
.mail{
    color: white;
}
.closebtn:hover {
  color: black;
}
</style>
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
        <?php
            if(isset($_POST['submit'])){

                $email = $_POST['email'];
                $name = $_POST['name'];
                $message=  $_POST['message'];
                 


                        $sql = "INSERT INTO `contact_us`(`message`,`name`,`email`) 
                        VALUES ('$message','$name','$email')";
                        if (mysqli_query($conn, $sql)) {
                            $success =  "Thank You! We will contact you shortly!";
                            $to = "info@shahgameworld.com";
                            $body= "";
                            $body .= "From:" . $name. "\r\n";
                            $body .= "Email:" . $email. "\r\n";
                            $body .= "Massage:" . $message. "\r\n";

                            mail($to, " Subject",  $body);

                        }
                        else {
                        $error = "unexpected error occured! Please contact administrator or send us
                        email at ";
                    }
            }
                ?>
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>contact <span>us</span></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">contact us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- contact-area -->
            <section class="contact-area pt-120 pb-120">
                <div class="container">
                <?php
                    if($success){?>
                <div class="alert_success mb-20">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong>Success!</strong> <?php echo $success;?>
                </div>
                <?php } else if($error){?>
                      
                <div class="alert_error mb-20">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong>Error!</strong> <?php echo $error . "<a href='mailto:info@shahgameworld.com'class='mail'> info@shahgameworld.com</a>";?>
                </div>
                
                <?php }?> 
                    <div class="row">
                        <div class="col-lg-6">
                            <div id="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53560.63073001005!2d73.65189568136634!3d32.963167529153786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391f9313f43c42a9%3A0x6562ee035f583a5f!2sShah%20Corporation%20Ltd!5e0!3m2!1sen!2s!4v1625064597733!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-45">
                            <div class="section-title title-style-three  mb-20">
                                <h2 class="fw-title">CONTACT <span>US</span></h2>
                            </div>
                            <div class="contact-info-list mb-40">
                                <ul>
                                    <li><i class="fas fa-map-marker-alt"></i>Ch Heights First floor Citi Housing Scheme Jhelum 49600</li>
                                    <li><i class="fas fa-headphones"></i>+92 544 225099</li>
                                    <li><i class="fas fa-envelope"></i>  info@shahgameworld.com</li>
                                </ul>
                            </div>
                            <div class="contact-form">
                                <form action="contact.php" method="POST" autocomplete="off">
                                    <textarea name="message" id="message" placeholder="Write Message..." required></textarea>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="name" placeholder="Your Name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" name="email" placeholder="Your Mail" required>
                                        </div>
                                    </div>
                                    <button id="submit" name="submit">SEND MESSAGE</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

       <!-- footer-area -->
       <?php include('Linked-packages/footer.php');?>        
        <!-- footer-area-end -->
		<?php include('Linked-packages/jsScripts.php');?>
    </body>
</html>

