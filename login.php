<?php  
	require 'config/config.php';
	require 'include/head.php';
	require 'include/menu.php';
	if(isset($_GET['click']) && $_GET['click'] == "staff")
	{
		$_SESSION['user']="staff";
	
	}
	else
	{

		$_SESSION['user']="paitent";
	}
					
?>
<div class="container" style="margin-top: 150px;">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<form class="form-horizontal" method="post">
			<div class="form-group">  
				<div class="col-xs-3 text-center">User Name: </div>
				<div class="col-xs-7">
					<input type="text" name="username" placeholder="User Name" class="form-control">					
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-3 text-center">Password: </div>
				<div class="col-xs-7">
					<input type="password" name="password" placeholder="Password( Password willbe Phone Number for paitent)" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-3 text-center"></div>
				<div class="col-xs-7">
					<button name="Login_Click" type="submit" class="btn btn-primary">Login</button>
					<a href="register.php">don't register yet ?</a>
				</div>
			</div>
		</form>
		</div>
	</div>
</div>


<?php
	require 'include/footer.php';
?>