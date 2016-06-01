<?php
  $idSeccion = "?";

  if (isset($_GET["idSeccion"]))
  {
  	$idSeccion = $_GET["idSeccion"];
  }
?>

<html>
<head>
	<title>Secciones</title>
</head>
<body>
	<?php include("header.php"); ?>
	Bienvenido a la seccion <?php echo $idSeccion ?>
</body>
</html>