<!DOCTYPE HTML>
<html>
  <head>
  <title>Praktikum 3</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  </head>
  
  <body>
  <div class="content">
<pre><?php print_r($_POST);?></pre>
<?php $kasutajanimi = $_POST['username'];
$parool = $_POST['password'];?>

<p><?php echo "Tere ". $kasutajanimi . "! Teie parool on " . $parool . "!";?></p>
*<p>
<?php
  // if (isset($_POST["username"])) {
  //  $username = $_POST["username"];
	//echo "Tere ". $kasutajanimi . "! Teie parool on " . $parool . "!";
  //} el/se {
 //   $username = "puudub";
	// echo "Kasutajanimi või parool on puudu.";
 // }
//echo $username = isset($_POST["username"]) ? "Tere ". $kasutajanimi . "! Teie parool on " . $parool . "!" : "Kasutajanimi või parool on puudu.";
?>
</p>
*<p>
<?php
  //if (isset($_POST["password"])) {
  //  $password = $_POST["password"];
//	echo "Tere ". $kasutajanimi . "! Teie parool on " . $parool . "!";
 // } else {
 //   $password = "puudub";
//	echo "Kasutajanimi või parool on puudu.";
 // }
// echo $password = isset($_POST["password"]) ? "Tere ". $kasutajanimi . "! Teie parool on " . $parool . "!" : "Kasutajanimi või parool on puudu.";
 
 if (isset($_POST["submit"])) { 
$kasutajanimi = $_POST['username'];
$parool = $_POST['password'];
echo "Tere ". $kasutajanimi . "! Teie parool on " . $parool . "!";
} else {
echo "Kasutajanimi või parool on puudu.";
}
?>
</div>
   </body>
</html>
