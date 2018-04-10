<?php
	class Authentication
	{
		// Set Login value
		public function UserLogin($username,$password)
		{
			if($_SESSION['user']=="staff")
			{
				$st = "SELECT * FROM users where email='$username' and password = '$password'";
				$status = database::GetData($st);
				if(mysqli_num_rows($status) >0) // it will be removed
				{
					$_SESSION['staff-login']="staff";
					header('Location:uploadReport.php');
				}
				else 
				{
					echo '<script>alert("Invalid Email or Password")</script>';
				}
				
			}
			elseif($_SESSION['user']=="paitent")
			{
				$st = "SELECT * FROM paitent where email='$username' and  number='$password'";
				$status = database::GetData($st);
				if(mysqli_num_rows($status))
				{
					$_SESSION["Login_user"] = "Have user";
					$_SESSION["user_role"] = "1";
					header('Location:acquringReport.php');
				}
				else
				{
					echo '<script>alert("Invalid Email or Phone No.")</script>';
				}
				
			}
			else
			{
				//none
			}
			//database::ShowData()
			
		}


		// User Logout
		public function UserLogout()
		{			
			unset($_SESSION["Login_user"]);
			unset($_SESSION["user_role"]);
			unset($_SESSION['staff-login']);
			Authentication::checkLogin();
			
		}


		// Check User Logedin or not
		public function checkLogin()
		{
			if(!isset($_SESSION["Login_user"]) || empty($_SESSION["Login_user"]))
			{
				header('Location:login.php');
			}
		}


		// retirn Boolean value is user is valid
		public function haveLogValue()
		{
			if(!isset($_SESSION["Login_user"]) || empty($_SESSION["Login_user"]))
			{
				return false;
			}
			else
			{
				return true;
			}
		}


	}


?>