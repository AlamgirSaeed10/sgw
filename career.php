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
                                <h2>Apply for<span>JOB</span></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">contact</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->


            <?php
            if(isset($_POST['submit'])){

                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $phone = $_POST['contact_no'];
                $gender=  $_POST['gender'];
                $education =  $_POST['education'];
                $experience =  $_POST['experience'];
                $address=  $_POST['address'];

                $filename=$_FILES["image"]["name"];
                $tempname=$_FILES["image"]["tmp_name"];
                $folder="img/careers/".$filename;
                move_uploaded_file($tempname,$folder);
                        $sql = "INSERT INTO `careers`(`firstname`, `lastname`, `email`, `contact_no`, `gender`, `education`, `experience`,
                         `address`, `image`) VALUES ('$firstname','$lastname','$email','$phone','$gender','$education','$experience',
                         '$address','$folder')";
                        if (mysqli_query($conn, $sql)) {
                            echo "Your application has been submitted successfully! We will contact you shortly!";
                            $to = "careers@shahgameworld.com";
                            $body= "";
                            $body .= "From:" . $firstname. "\r\n";
                            $body .= "Email:" . $email. "\r\n";
                            $body .= "Massage:" . $lastname. "\r\n";
                            $body .= "Massage:" . $phone. "\r\n";
                            $body .= "Massage:" . $gender. "\r\n";
                            $body .= "Massage:" . $education. "\r\n";
                            $body .= "Massage:" . $experience. "\r\n";
                            $body .= "Massage:" . $address. "\r\n";
                            $body .= "Massage:" . $folder. "\r\n";

                            mail($to, " Subject",  $body);
                        }
                    }
                        else {
                        echo "Error: "  . "" . mysqli_error($conn);
                        $error = "unexpected error occured! Please contact administrator or send us
                        email at ";
                    }
            
                ?>
            <!-- contact-area -->
            <section class="contact-area pt-50 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 pl-45">
                            <div class="section-title title-style-three mb-20">
                                <h2>Looking for <span>job</span></h2>
                            </div>
                            <div class="contact-form">
                                <form action="career.php" method="post" enctype="multipart/form-data" >
                                    <div class="row">
                                        <div class="col-md-3 mt-30">
                                        <img src="https://img.icons8.com/officel/2x/add-image.png" id="output" alt="" height="200" width="200" style="border: 1px solid; padding: 10px;">
                                        </div>
                                        <div class="col-md-9 mt-140">
                                        <input type="file" id="image" name="image" accept="image/*" onchange="loadFile(event)" required>
                                        </div>
                                        <div class="col-md-6 mt-30">
                                            <input type="text" name="firstname" placeholder="Your firstname..." required>
                                        </div>
                                        <div class="col-md-6 mt-30">
                                            <input type="text" name="lastname" placeholder="Your lastname..." required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" name="email" placeholder="Your email..." required>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                            Male <input type="radio" name="gender" checked>
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                            Female<input type="radio" name="gender">
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="contact_no" placeholder="Phone..." required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="education" placeholder="education..." required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="experience"  placeholder="experience..." required>
                                        </div>
                                        <div class="col-md-6">
                                            <textarea name="address" placeholder="Address..." cols="2" rows="2" required></textarea>
                                        </div>
                                    </div>
                                    <button class="btn" id="submit" name="submit">Apply now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->


        </main>
        <!-- main-area-end -->
        <?php 
                                        $sql = "SELECT * FROM `careers`";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                        }}
                                            ?>
                                            <img src="images/gallery/<?php echo $row['image']; ?>.jpg">

       <!-- footer-area -->
       <?php include('Linked-packages/footer.php');?>        
        <!-- footer-area-end -->
		<?php include('Linked-packages/jsScripts.php');?>

        <script>
        var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
    </body>
</html>

