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

</div>
   </body>
</html>
