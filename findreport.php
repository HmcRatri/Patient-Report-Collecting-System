<?php  
	require 'config/config.php';
	require 'include/head.php';
	require 'include/menu.php';
	Authentication::checkLogin();

?>
<div class="container" style="margin-top: 100px;">
	<div class="row">
		<ul class="nav nav-tabs nav-justified">
		    <li role="presentation" class="active"><a href="findreport.php">
		    	Find Your Report
		    </a></li>
		    <li role="presentation"><a href="viewReportStatus.php">
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
			    					<button type="submit" class="btn btn-primary" name="search_report_click"><span class="fa fa-search fa-lg"></span></button>
			    				</div>
			    			</form>
			    		</div>
			    		<h1 class="text-center text-uppercase" id="report"> 
			    			<?php
			    			if(isset($_POST['search_report_click']))
							{
								$email = $_POST['search_report'];
								$st = "SELECT report.status from paitent,report where  paitent.email = '$email'";
								$data = database::GetData($st);
								if(mysqli_num_rows($data) >0 )
			    				{
			    					while ($info = mysqli_fetch_assoc($data)) {
			    						if($info['status'] == 0)
			    						{
			    							echo 'Report is not Ready';
			    						}
			    						else
			    						{
			    							echo 'Report is Ready';
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

	if(isset($_POST['search_report_click']))
	{
		echo'<style>#report{display: block;}</style>';
	}
?>
