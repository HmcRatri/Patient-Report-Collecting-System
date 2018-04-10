<?php
	require 'config/config.php';
	require 'include/head.php';
	require 'include/menu.php';
	Authentication::checkLogin();

?>


<?php
	require 'include/footer.php';
?>