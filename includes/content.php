<?php
if(isset($mod)) {
	if(isset($mod) and $mod=='dashboard') {
		include('modules/dashboard/dashboard.php');
	} else if(isset($mod) and $mod=='projects') {
		include('modules/projects/projects.php');
	} else if(isset($mod) and $mod=='models') {
		include('modules/models/models.php');
	} else if(isset($mod) and $mod=='versions') {
		include('modules/versions/versions.php');
	} else if(isset($mod) and $mod=='users') {
		include('modules/users/users.php');
	} else {
		include('modules/dashboard/dashboard.php');
	}
} else {
	include('modules/dashboard/dashboard.php');
}
?>