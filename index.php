<?php
error_reporting(0);
if (isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
  $protocol = 'https://';
}
else {
  $protocol = 'http://';
}

$domain=$protocol.$_SERVER["HTTP_HOST"]."/metastudio/";

if(isset($_GET['mod']) and $_GET['mod']!='') {
	$mod = $_GET['mod'];
}
?>
<!doctype html>
<html lang="en">
	<?php include 'includes/head.php';?>
	<body class="bg-theme bg-theme2">
		<div class="wrapper">
			<?php include 'includes/header.php';?>
			<div class="page-wrapper">
				<div class="page-content">
					<?php include 'includes/content.php';?>
				</div>
			</div>
			<?php include 'includes/footer.php';?>
		</div>
		<?php include 'includes/switcher.php';?>
		<?php include 'includes/scripts.php';?>
	</body>
</html>