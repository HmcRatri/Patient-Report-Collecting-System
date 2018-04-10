<?php
class database
	{
		

	public function Insert($qry)
	{
		$con = new mysqli("localhost","root","","hospital");
		if(!$con)
		{
			echo '<script type="text/javascript">alert("Database is not Connected , Please Contact with Developer")</script>';
		}
		if(mysqli_query($con,$qry))
		{
			mysqli_close($con);
			return true;
		}
		else
		{
			mysqli_close($con);
			return false;
		}
	}

	public function GetData($qry){
		$con = new mysqli("localhost","root","","hospital");
		if(!$con)
		{
			echo '<script type="text/javascript">alert("Database is not Connected , Please Contact with Developer")</script>';
		}
		if(mysqli_query($con,$qry))
		{
			$result = mysqli_query($con,$qry);
			mysqli_close($con);
			return $result;
		}
		else
		{
			mysqli_close($con);
			return "No Result";
		}
	}


}
?>
