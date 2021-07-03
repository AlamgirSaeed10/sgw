<?php
  // check form submission
  if(isset($_FILES['images']) === true){
    // form is submitted
    // grab mages
    $images = $_FILES['images'];
    // it is supposed to be in an array format, however I'm converting it into an object for my ease
    $images = (object)$images;
    // check either it's a vlaid file data
    if(isset($images->name) === true AND is_array($images->name) === true AND count($images->name) > 0){
      // valid file, loop all images
      for($i = 0; $i < count($images->name); $i++){
        // grab one image data
        $imgName = $images->name[$i];
        // find extension of this image
        $imgExt = pathinfo($imgName, PATHINFO_EXTENSION);
        // you can also validate by checking image's extension that either it's valid image or not... however I'm not doing this right now
        // generate a new and unique name for this image
        $newImgName = uniqid(); // it'll generate a 13 characters unique name
        // append extension with the name
        $newImgName .= '.'.$imgExt;
        // set destination path where you want to upload it
        $destPath = $_SERVER['DOCUMENT_ROOT'].'/testImages/';
        // check either the above path exists or not
        if(is_dir($destPath) === false){
          // directory doesn't exists, create it
          if(mkdir($destPath, 0777, true) === false){
            // failed to create directory, it's server failure
            echo 'Encountered an error! Directory not found.';
            die();
          }
        }
        // recheck directory
        if(is_dir($destPath) === false){
          echo 'Encountered an error! Directory not found.';
          die();
        }
        // directory is ok, append image name with the directory
        $destPath .= $newImgName;
        // everything is fine, finally upload the image
        if(move_uploaded_file($images->tmp_name[$i], $destPath) === true){
          // image uploaded, save this image name ($newImgName) into database
          echo 'Image uploaded!</br>';
        } else {
          echo 'Encountered an error! Failed to upload image.';
          die();
        }
      }
    } else {
      // invalid file, usually this error doesn't occur
      echo 'Encountered an error! You are trying to upload an invalid file.';
      die();
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Upload Multiple Images</title>
  </head>
  <body>
    <form action='test.php' method='POST' enctype='multipart/form-data'>
      <input type='file' multiple name='images[]' />
      <input type='submit' role='button' value='Upload' />
    </form>
  </body>
</html>