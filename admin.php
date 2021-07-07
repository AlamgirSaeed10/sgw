<?php session_start();
if($_SESSION['username'])
{
    



?>
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
            // error_reporting(0);
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
                                           <input type="text" placeholder="Description" name="description" required>
                                       </div>
                                       <div class="col-md-6">
                                           <label>Game Images</label>
                                        <input type="file" name="images[]" >
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <input list="game_subcategories" name="game_subcategories" placeholder="Select Subcategory">

                                        <?php 
                                            $sql = "SELECT * FROM `game_subcategories`";
                                            $result = mysqli_query($conn, $sql);
                                            if (mysqli_num_rows($result) > 0) {?>

                                                    <datalist id="game_subcategories">
                                                <?php while($row = mysqli_fetch_array($result)) { ?>
                                                    <option value="<?php echo $row['category_name']?>"><?php echo $row['category_name']?></option>;
                                                <?php } } ?>
                                            </datalist>
                                           
                                        </div>
                                       
                                        <div class="col-md-6">
                                        <label>Game Screenshots</label>
                                        <input type="file" name="files[]" multiple accept="image/*">
                                        </div>
                                        
                                        <div class="col-md-6">
                                        <label>Platform</label>
                                                <select name="platform" id="">
                                                <option value="">Desktop</option>
                                                <option value="">Mobile</option>
                                                </select>
                                            </div>
                                        <div class="col-md-6">
                                                <input type="date" placeholder="Date" name="date" required>
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
            
            // if(isset($_POST['view'])){
            //     $id = $_POST['id'];
            // $query = "SELECT `image` FROM `latest_games` WHERE id='$id'";
            // $result = mysqli_query($conn,$query);
            // $row = mysqli_fetch_assoc($result);
            // $images = $row['image'];
            // $images = explode(',',$images);
            // foreach($images AS $image){
            //     echo '<img src="'.$image.'" height=100>';
            // }
            // }
             if(isset($_POST['submit']))
             {
                
                 $name=$_POST['title'];
                 $description=$_POST['description'];
                 $category=$_POST['game_subcategories'];
                 $platform=$_POST['platform'];
                 $date=$_POST['date'];
                 $date1= date('Y-m-d');
                 
                 $targetDir ="lgimage/";

                 $game_images=$_FILES['images']["name"];
                 $game_file_name = implode(',',$game_images);
                 
                 $screenshot_image = $_FILES["files"]["name"];
                 $scfreenshot_file_name = implode(',',$screenshot_image);
                
                foreach ($game_images as $key => $value) {
                    $targetFilePath = $targetDir.$value;
                    move_uploaded_file($_FILES["images"]["tmp_name"][$key], $targetFilePath);                                 
                }
                foreach ($screenshot_image as $key => $value) {
                    $targetFilePath = $targetDir.$value;
                    move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath);                                 
                    
                }
                if($date==$date1 || $date< $date1){
                    $status= "publish";
                }else{
                    $status="upcoming";
                }

                

                 $game_image_path = $targetDir.$game_file_name;
                $scfreenshot_file_path = $targetDir.$scfreenshot_file_name;
                $query ="INSERT INTO `latest_games`(`game_title`, `description`, `game_images`, `screenshot_image`, 
                `categories`, `Platform`, `release_date`, `game_status`)
                 VALUES ('$name','$description','$game_image_path','$scfreenshot_file_path','$category',
                '$platform','$date','$status')";
                  
                    // $query="INSERT INTO latest_games VALUES()";
                    $data= mysqli_query($conn, $query);
                    if($data){
                        echo "Successful";
                    
                // }

                // }


            //     else{
            //     echo " All fields required";
            // }
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
<?php
}
else{
    header('location:login.php');
}
?>
