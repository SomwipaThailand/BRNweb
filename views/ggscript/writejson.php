<?php
//writejson.php
/*
$fpart="water_distribution.json";
if (!file_exists($fpart)) {
  print 'File not found';
}else{
	print 'found';
}
*/
if($_REQUEST['mytextString']){
	$txt=$_REQUEST['mytextString'];
	$myfile = fopen("water_distribution.json", "w") or die("Unable to open file!!");
	fwrite($myfile, $txt);
	fclose($myfile);
	header('Content-Type: application/json');
	echo json_encode(array('status' => 'ok'));
}
?>
