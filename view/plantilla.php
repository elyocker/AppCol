<!DOCTYPE html>
<html lang="es">
<head>
	<title>LogIn</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
	<?php 
			// =============================
			// 	CABEZOTE
			// =============================
			include "view/modulos/cabezote.php";

			// =============================
			// 	MENU
			// =============================
			include "view/modulos/menu.php";

			// =============================
			// 	Contenido
			// =============================
		if (isset($GET_['vista'])) {

			 if ($_GET["vista"] == "admin-list" ||
				$_GET["vista"] == "home" ||
				$_GET["vista"] == "company" ||
				$_GET["vista"] == "admin-search" ||
				$_GET["vista"] == "book-config" ||
				$_GET["vista"] == "book-info" ||
				$_GET["vista"] == "book" ||
				$_GET["vista"] == "catalog" ||
				$_GET["vista"] == "category-list" ||
				$_GET["vista"] == "category" ||
				$_GET["vista"] == "client-list" ||
				$_GET["vista"] == "client" ||
				$_GET["vista"] == "admin" ||
				$_GET["vista"] == "company-list" ||
				$_GET["vista"] == "company" ||
				$_GET["vista"] == "my-account" ||
				$_GET["vista"] == "my-data" ||
				$_GET["vista"] == "provider-list" ||
				$_GET["vista"] == "provider" ||
				$_GET["vista"] == "search"){
		
			 	include 'view/modulos/'.$_GET["vista"].'.php';

			} else {

				include "view/modulos/home.php";
			}
			
		}

			// =============================
			// 	Footer
			// =============================
			// include "view/modulos/footer.php";
		
	 ?>
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>


</body>
</html>