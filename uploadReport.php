<?php

	require 'config/config.php';
	require 'include/head.php';
	require 'include/menu.php';
?>
	
	<div class="container" style="margin-top:95px;">
		<div class="row">
			<?php 
			if(isset($_SESSION['message']) && $_SESSION['message']=="success"){
				echo '
				<div class="col-sm-12">
					<div class="alert alert-success text-center">Information Update Successfully</div>
				</div>
				';
				unset($_SESSION['message']);
			} ?>
			

			<div class="col-sm-6">
				
				<div class="well">
					<h3 class="text-center">Patient Registration</h3><br>
					<form class="form-horizontal" method="post">
						<div class="form-group">
							<label>Patient Name</label>
							<input type="text" class="form-control" name="name" required placeholder="Enter Paitent Name">
						</div>
						<div class="form-group">
							<label>Patient Address</label>
							<input type="text" class="form-control" name="address" required placeholder="Enter Paitent Address">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control" name="email" required placeholder="Enter Paitent Email Address">
						</div>
						<div class="form-group">
							<label>Phone Number</label>
							<input type="text" class="form-control" name="number" required placeholder="Enter Paitent Phone Number">
						</div>
						<div class="form-group">
							<label>Report Status</label>
							<select class="form-control" name="status">
								<option value=""> Select Status</option>
								<option value="0">Not Ready</option>
								<option value="1">Ready</option>
							</select>
						</div>
						<div class="form-group">						
							<div class="col-sm-2">
								<button class="btn btn-success" type="submit" name="parient-registration" style="margin-left: 0px;">Click to Register</button>
							</div>
						</div>
					</form>
				</div>				
			</div>
			<div class="col-sm-6">
				<div class="well">
					<h3 class="text-center">Report Status</h3><br>
					<form class="form-horizontal" method="post">
						<div class="form-group">
							<label>Patient Email</label>
							<input type="text" class="form-control" name="email" required placeholder="Enter Patient Email">
						</div>
						<div class="form-group">
								<label>Report Status</label>
								<select class="form-control" name="status">
									<option value=""> Select Status</option>
									<option value="0">Not Ready</option>
									<option value="1">Ready</option>
								</select>
						</div>
						<div class="form-group">

							<button type="submit" class="btn btn-success" name="update-report-status" style="margin-left: 10px;"> Update Status</button>
						</div>
					</form>
				</div>
				<div class="well">
					<h3 class="text-center">Payment Status</h3><br>
					<form class="form-horizontal" method="post">
						<div class="form-group">
							<label>Patient Email</label>
							<input type="text" class="form-control" name="pemail" required placeholder="Enter Patient Email">
						</div>
						<div class="form-group">
								<label>Payment Status</label>
								<select class="form-control" name="pstatus">
									<option value=""> Select Status</option>
									<option value="1">Paid</option>
									<option value="0">Not Clear</option>
								</select>
						</div>
						<div class="form-group">

							<button type="submit" class="btn btn-success" name="update-payment-status" style="margin-left: 10px;"> Update Status</button>
						</div>
					</form>
				</div>
			</div>
		</div>		
	</div>

<?php
	require 'include/footer.php';
?>