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
        <!-- header-area-end -->

        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>Admin <span>Page</span></h2>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- contact-area -->
            <?php
            error_reporting(0);
            ?>
            <section class="contact-area pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-12 pl-45">
                            <div class="section-title title-style-three mb-20">
                                <h2>Latest Game <span>Form</span></h2>
                            </div>
                            <div class="contact-info-list mb-40">
                                <ul>
                                    <li>Upload latest games</li>
                                </ul>
                            </div>
                            <div class="contact-form">
                                <form action="" method="post" enctype="multipart/form-data">

                                    
                                    <div class="row">
                                         <div class="col-md-6">
                                            <input type="text" placeholder="Title" name="title" required>
                                        </div>
                                        <div class="col-md-6">
                                           
                                            <input type="text" placeholder="Categories" name="Categories" required>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="file" name="Uploadfile" value="" required>
                                        </div>

                                    </div>      
<input type="submit" name="submit" value="submit"/>
                                </form>
                                  
                            </div>
                        </div>
                    </div>
                </div>
                 
            </section>
            <!-- contact-area-end -->

            <?php
            
     
             if($_POST['submit'])
             {
                
                $name=$_POST['title'];
                $category=$_POST['Categories'];
                $filename=$_FILES["Uploadfile"]["name"];
                $tempname=$_FILES["Uploadfile"]["tmp_name"];
                $folder="lgimage/".$filename;
                move_uploaded_file($tempname,$folder);
                
                
                if($name!="" && $category!="" && $filename!="")
                {
                   
                    
                  
                    $query="INSERT INTO latest_games VALUES('','$name','$folder','$category')";
                    $data= mysqli_query($conn, $query);
                    if($data){
                    
                }

                }


                else{
                echo " All fields required";
            }


             }
           
            ?>

<br><br>
        



        </main>
        <!-- main-area-end -->

        <!-- footer-area -->
        <?php include('Linked-packages/footer.php');?>   
        <!-- footer-area-end -->



		<!-- JS here -->
        <?php include('Linked-packages/jsScripts.php');?>
        
    </body>
</html>
