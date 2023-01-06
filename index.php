<?php
if(isset($_POST['download'])){
 
    $imgURL = $_POST['download']; 
    $regPattern = '/\.(jpe?g|png|gif|bmp)$/i'; 
    if(preg_match($regPattern, $imgURL)){ 
        $initCURL = curl_init($imgURL); 
        curl_setopt($initCURL, CURLOPT_RETURNTRANSFER, true);
        $downloadImgLink = curl_exec($initCURL); 
        curl_close($initCURL); 

        header('Content-type: image/jpg'); 
        header('Content-Disposition: attachment;filename="sadmia.jpg"'); 
        echo $downloadImgLink;
    }
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Youtube Thumbnail Download</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/all.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>

		<section class="thumbnailDiv">

			<h1>Download Thumbnail</h1>
			<p>Paste Video URL:</p>
			<input id="urlInput" type="url" placeholder="https://www.youtube.com/watch?v=BecwLYW0rMw">

			<div id="border" class="thumbnailShowDiv">
				<img name="imgVlu" id="viewImg" src="">
				<i id="iconView" class="fa-solid fa-cloud-arrow-up"></i>
				<p id="textView">Paste video url to see proview</p>
			</div>

			
			<form action="" method="post">
				<button id="downloadBtn" class="button" name="download">Download Thumbnail</button>
			</form>
			
			
			
		</section>

	<script src="js/script.js"></script>
	</body>
</html>