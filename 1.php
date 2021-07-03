<?php include_once('Database/connection.php');
if(isset($_POST['view'])){
	$id = $_POST['id'];
$query = "SELECT `image` FROM `latest_games` WHERE id='$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
$images = $row['image'];
$images = explode(',',$images);
foreach($images AS $image){
    echo '<img src="'."test/".$image.'" height=100>';
}
}

if(isset($_POST['submit'])){

	$targetDir ="test/";
	$image = $_FILES['files']['name'];
	$file_name = implode(',',$image);
	
if(!empty($image)){
	foreach ($image as $key => $value) {
		
		$targetFilePath = $targetDir . $value;
		echo "".$targetFilePath;
		move_uploaded_file($_FILES['files']['name'][$key], $targetFilePath); 
}
 	$sql = "INSERT INTO `latest_games`(`image`) VALUES ('{$file_name}')";
 	$image = mysqli_query($conn,$sql);

	 if($image > 0){
		 echo "good";
	 }
}
}
?>
<form method="POST" action="1.php" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple accept="image/*">
        <input type="input" name="id" required>
        <input type="submit" name="submit" value="ADD">
        <input type="submit" name="view" value="view">
    </form>