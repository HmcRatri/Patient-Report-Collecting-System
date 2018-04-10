<?php  
	require 'config/config.php';
	require 'include/head.php';
	require 'include/menu.php';
	Authentication::checkLogin();

?>
<div class="container" style="margin-top: 100px;">
	<div class="row">
		<ul class="nav nav-tabs nav-justified">
		    <li role="presentation"><a href="findreport.php">
		    	Find Your Report
		    </a></li>
		    <li role="presentation" class="active"><a href="viewReportStatus.php">
		     View Report Status
			</a></li>
		    <li role="presentation"><a href="collectiveAddress.php">
		    	Collective Address
		    </a></li>		   
		  </ul>

		  <!-- Tab panes -->
		  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="searchReport">
			    	<div class="container">
			    		<div class="row" style="margin-top:50px;margin-bottom:20px;">
			    			<form method="post" class="form-horizontal">
			    				<div class="col-xs-6">
			    					<input type="text" name="search_report" placeholder="Enter Patient email" class="form-control">
			    				</div>
			    				<div class="col-xs-3">
			    					<button type="submit" class="btn btn-primary" name="check_report_click"><span class="fa fa-search fa-lg"></span></button>
			    				</div>
			    			</form>
			    		</div>
			    		<h1 class="text-center text-uppercase text-danger" id="report2">
			    		<?php
			    			if(isset($_POST['check_report_click']))
							{
								$email = $_POST['search_report'];
								$st = "SELECT money from paitent,report where  paitent.email = '$email' and report.status=1";
								$data = database::GetData($st);
								if(mysqli_num_rows($data) >0 )
			    				{
			    					while ($info = mysqli_fetch_assoc($data)) {
			    						if($info['money']==0)
			    						{
			    							echo '<button class="btn btn-danger" onclick="Show();">Please Make Payment</batton>';
			    						}
			    						else
			    						{
			    							echo '<script> window.location.href="collectiveAddress.php" </script>';
			    						}
			    					}
			    				}
			    				else
			    				{
			    					echo 'No data Found';
			    				}

							}
						?>
			    		</h1>
			    	</div>
			    </div>		    
		  </div>
	</div>
</div>

<?php 
	require 'include/footer.php';

	if(isset($_POST['check_report_click']))
	{
		echo'<style>#report2{display: block;}</style>';
	}
?>
<script type="text/javascript">
	function Show(){
		alert("Please Make Payment in This Bkash Number 01714675222");
	}
</script>