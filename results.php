<html>
<head>
<title>Results</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<br>
<u><b>Results</b></u>
<br>
Right-click to save the file.
<br>
<?php
$date = md5(time());
$uploaddir = 'upload/';

$fileName = basename($_FILES['gbkFile']['name']); //Grab the name of the file
$splitName = explode(".", $fileName); //Split into parts using the dot
$fileExt = end($splitName); //get the extension of uploaded file
$newName = strtolower($date.'.'.$fileExt);
$upGBK = $uploaddir . $newName;

$length = $_POST['UPSLENGTH'];

if (move_uploaded_file($_FILES['gbkFile']['tmp_name'], $upGBK)) {
	$ID = substr($newName,0,strrpos($newName,'.'));
        passthru("./rm_cont_m.pl {$upGBK} > {$upGBK}.temp");
        passthru("mv {$upGBK}.temp {$upGBK}"); 
	passthru("chmod 644 {$upGBK}");
	passthru("./extractUpStreamDNA.pl -i {$upGBK} -o results/{$ID}_{$length}basesupstream.ffn -l {$length}");
	passthru("chmod 644 results/{$ID}_{$length}basesupstream.ffn");
	echo "<a href=results/{$ID}_{$length}basesupstream.ffn>{$ID}_{$length}basesupstream.ffn</a> - your FFN file of {$length}-base upstream regions.";
	echo "<br>";
	echo "<b>Note</b>: This file will be deleted at midnight.";
} else {
	echo "GBK file uploading failed.\n";
}
?>

<br><br>
Please help us improve this tool by sending any questions or comments to <b>Andre.Villegas[at]oahpp.ca</b>.
</body>
</html>
