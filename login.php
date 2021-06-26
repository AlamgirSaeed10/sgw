<?php session_start();?>
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

        

        

            <!-- contact-area -->
            <?php
            // error_reporting(0);
            ?>
            <section class="contact-area pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-12 pl-45">
                            <div class="section-title title-style-three mb-20">
                                <h2>Login <span>Form</span></h2>
                            </div>
                            <div class="contact-info-list mb-40">
                                <ul>
                                    <li>login here</li>
                                </ul>
                            </div>
                            <div class="contact-form">
                                <form action="" method="post" enctype="multipart/form-data">

                                    
                                    <div class="row">
                                         <div class="col-md-6">
                                            <input type="text" placeholder="Username" name="username" required>
                                        </div>
                                       
                                      
                                        <
                                       
                                        <div class="col-md-6">
                                            <input type="password" placeholder="Password" name="Password" value="" required>
                                        </div>

                                    </div>  
                                    <input type="submit" name="submit" value="login"/>
                                </form>

                                <?php
                                if(isset($_POST['submit']))
                                {
                                    $user=$_POST['username'];
                                    $pwd=$_POST['Password'];
                                    $query="SELECT * FROM `login` WHERE username= '$user' && Password='$pwd'";
                                    $data= mysqli_query($conn, $query);
                                    $total= mysqli_num_rows($data);
                                    if($total==1)

                                    {
                                        $_SESSION['username']=$user;
                                        header('location:admin.php');
                                    }
                                    else{
                                        echo"Login fail";
                                    }


                                }
                                ?>
                                  
                            </div>
                        </div>
                    </div>
                </div>
                 
            </section>
            <!-- contact-area-end -->

            

<br><br>
        



        </main>
        <!-- main-area-end -->

        
    </body>
</html>
