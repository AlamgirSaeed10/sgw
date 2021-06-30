<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
<!-- <link rel='stylesheet' href='css/style.css'>	 -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <style>
  </style>
</head>

<body>
  
		
    <div id="nav">
		   	<img src="img/logo/SHAH-GAME-WORLD.png" alt="" height="150">
			
		   	<audio id="beep" preload="auto">
				<source src="img/audio/lionroar.mp3"></source>
			</audio>
			
    </div>
		
		<script>
		
		var beepOne = $("#beep")[0];
		$("#nav")
	.click(function() {
		beepOne.play();
	});
	
	</script>
				
</body>

</html>