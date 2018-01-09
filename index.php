<?php
error_reporting(0);
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/info.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/localizer.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= getString("name") ?></title>
	<link href="/libraries/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="container my-4">
	<?php
	include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/promo.inc");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/header.inc");
	?>
</div>
<script>
</script>
</body>
</html>