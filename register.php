<?php
	require 'config/config.php';
	require 'include/head.php';
	require 'include/menu.php';

	if(!isset($_SESSION['staff-login']) && $_SESSION['staff-login'] != "staff")
	{
		echo '<script> window.location.href="login.php" </script>';
	}
?>
<div class="container" style="margin-top: 150px;">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<h3>Staff Registration</h3><br>
			<form class="form-horizontal" method="post">
			<div class="form-group">
				<div class="col-xs-3 text-center">Full Name </div>
				<div class="col-xs-7">
					<input type="text" name="name" placeholder="Full Name" class="form-control" autofocus>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-3 text-center">Email: </div>
				<div class="col-xs-7">
					<input type="text" name="email" placeholder="example@example.com" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-3 text-center">Password: </div>
				<div class="col-xs-7">
					<input type="password" name="password" placeholder="Password" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-3 text-center"></div>
				<div class="col-xs-7">
					<button name="registration-click" class="btn btn-primary">Register</button>
				</div>
			</div>
		</form>
		</div>
	</div>
</div>


<?php
	require 'include/footer.php';
?>