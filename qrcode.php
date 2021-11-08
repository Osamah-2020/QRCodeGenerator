
<?php
	
	include('libs/phpqrcode/qrlib.php');
	require_once('config.php');
	
	$text = $_POST['text'];
	
	$size = $_POST['size'];
	$path = 'images/';
	$filename = uniqid().".png";
	$file = $path.$filename;
	if (!file_exists($path))
        mkdir($path);
	
	$ecc = 'L';
	$pixel_Size = 10;
	$frame_Size = 3;
	
	$query = "insert into qrtable(qrText,qrImage) values ('$text','$filename')";
	
	if($mysqli->query($query)==true){
	
		$mysqli -> set_charset("utf8");
		QRcode::png($text,$file,$ecc,$pixel_Size,$frame_Size);
		header("location:index.php?file=$filename");
		
	}
	
	// *** Include the class
	include("resize-class.php");

	// *** 1) Initialise / load image
	$resizeObj = new resize($file);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage($size,$size);

	// *** 3) Save image
	$resizeObj -> saveImage($file);
	
?>
