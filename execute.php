<?php

if(isset($_POST['execute'])) {
	error_reporting(0);

	$folder = "bahan/";
	$overlay = $folder."bahan_2(1).jpg";
	$font = __DIR__."/bahan/font2.ttf";
	$filename = sgbshiroyasha.".png";
	$teks = @$_POST['teks'] ? $_POST['teks'] : 'DEFAULT QOUTES';

	$image = new PHPImage();
	$image->setQuality(10);
	$image->setDimensionsFromImage($overlay);
	$image->draw($overlay);
	$image->setFont($font);
	$image->setTextColor(array(42, 43, 43));		
	$image->text($teks, array(
		'fontSize' => 67,
		'x' => 322,
		'y' => 570,
		'debug' => false));
	$image->save($filename);


	$imagebase64 = base64_encode(file_get_contents($filename));
	echo "<btn class='btn btn-success'><a href='data:image/png;base64,".$imagebase64."' target='_blank' download='$filename'>Download</a></button>";
	unlink($filename);
}

?>