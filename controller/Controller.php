<?php
	require  'database/dbcon.php';
	require 'class/Authentication.php';

	if( isset($_GET['user_action']) && $_GET['user_action'] == "logout" )
	{
		Authentication::UserLogout();
	}

	if(isset($_POST['Login_Click']))
	{
		
		Authentication::UserLogin($_POST['username'],$_POST['password']);
	}
	if(isset($_POST['parient-registration']))
	{
		$name=$_POST['name'];
		$address=$_POST['address'];
		$phone=$_POST['number'];
		$email=$_POST['email'];
		$status = $_POST['status'];
		$st = "INSERT INTO paitent(`name`,`address`, `number`, `email`, `sample`, `status`) VALUES ('$name','$address','$phone','$email','Taken',1)";
		if(database::Insert($st))
		{
			$st ="select * from paitent order by pid DESC ";
			$data = database::GetData($st);
			while ($row = mysqli_fetch_assoc($data)) {
				$id = $row['pid'];
				break;
			}
			$st = "INSERT INTO `report`(`money`, `pid`, `status`) VALUES (00,$id,$status)";			
			database::Insert($st);
			echo'<script>alert("Information Add successfully")</script>';
		}
	}
	
	if(isset($_POST['update-report-status']))
	{
		$email = $_POST['email'];
		$status = $_POST['status'];
		$st ="UPDATE report,paitent Set report.status = $status where report.pid = paitent.pid and paitent.email = '$email'";
		
		if(database::Insert($st))
		{
			$_SESSION['message']="success";
		}
		else
		{
			echo '<script>alert("Update Failed")</script>';
		}
	}
	if(isset($_POST['update-payment-status']))
	{
		$email = $_POST['pemail'];
		$status = $_POST['pstatus'];
		$st ="UPDATE report,paitent Set report.money = $status where report.pid = paitent.pid and paitent.email = '$email'";
		if(database::Insert($st))
		{
			$_SESSION['message']="success";
		}
		else
		{
			echo '<script>alert("Update Failed")</script>';
		}
		
	}
	if(isset($_POST['registration-click']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$name = $_POST['name'];

		$role = 1;
		$st = "INSERT INTO `users`(`email`, `password`, `role`, `name`) VALUES ('$email','$password','role','$name')";
		if(database::Insert($st))
		{
			echo '<script>alert("Registration Successfully")</script>';
		}
		else
		{
			echo '<script>alert("Update Failed")</script>';
		}
	}
	

?>