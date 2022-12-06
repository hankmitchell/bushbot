<?php
// BUILD DATE : NOVEMBER 5 1015 slash test \\
//error_reporting(E_ALL);
extract($_GET);
extract($_POST);
$timestamp = date('Y-m-d--') . date('H-i-s');
date_default_timezone_set('America/New_York');



if (!empty($_FILES)) { // this is the dropzone uploader code
	$tempFile = $_FILES['file']['tmp_name'];
	$rname = "$timestamp.jpg";
	move_uploaded_file($tempFile, $rname);
	exit;
}

?>
<title>drop</title>
<link href="dropzone.css" type="text/css" rel="stylesheet" />
<script src="dropzone.js"></script>
<style type="text/css">
<!--
a:link {
color: #0099CC;
}
a:visited {
color: #006699;
}
a:hover {
color: #003366;
}
a:active {
color: #990000;
}
body{
font-family: sans-serif; 
font-size: 13px; 
line-height: 1.5em; 
padding: 0px;
text-align: center;
}
</style>
<body >
<div>
	<form action="<?php echo  $_SERVER['PHP_SELF'] ?>" class="dropzone" >
  </form>
  <div style="font-size:18px;">
</div>


</body>