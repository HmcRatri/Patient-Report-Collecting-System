<?php  
	require 'config/config.php';
	require 'include/head.php';
	require 'include/menu.php';
	Authentication::checkLogin();

?>
<div class="container" style="margin-top: 100px;">
	<div class="row">
		<ul class="nav nav-tabs nav-justified" role="tablist">
		    <li role="presentation" class="active"><a href="#doctor" aria-controls="doctor" role="tab" data-toggle="tab">
		    	Consulting with Doctor
		    </a></li>
		    <li role="presentation"><a href="#payment" aria-controls="payment" role="tab" data-toggle="tab">
		    Clearing Payment
			</a></li>
		    <li role="presentation"><a href="#test" aria-controls="test" role="tab" data-toggle="tab">
		    	Doing test
		    </a></li>		   
		  </ul>

		  <!-- Tab panes -->
		  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="doctor">
			    	<div class="container">
			    		<div style="width:50%;margin: 0px auto;margin-top: 100px;"><h1 class="text-center"> Consulting with Doctor Module is Comming Soon </h1></div>
			    	</div>
			    </div>
			    <div role="tabpanel" class="tab-pane" id="payment">
			    	<div class="container">
			    		<div style="width:50%;margin: 0px auto;margin-top: 100px;"><h1 class="text-center"> Clearing Payment Module is Comming Soon </h1></div>
			    	</div>
			    </div>
			    <div role="tabpanel" class="tab-pane" id="test">
			    	<div class="container">
			    		<div style="width:50%;margin: 0px auto;margin-top: 100px;"><h1 class="text-center"> Doing test Module is Comming Soon </h1></div>
			    	</div>
			    </div>			    
		  </div>
	</div>
</div>

<?php 
	require 'include/footer.php';
?>