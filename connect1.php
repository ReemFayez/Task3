<?php
	if(isset($_POST["forward"]))
	{
		$Dirc=$_POST['forward'];
		//DB Connection
		$conn = new mysqli('localhost','root','','controlboard1');
		if($conn->connect_error)
		{
			die('Failed'.$conn->connect->error);
		}
		else
		{
			$stmt = $conn->prepare("INSERT INTO `direction` (`Dirc`) 
			VALUES (?)");
			$stmt->bind_param("s", $Dirc);
			$stmt->execute();
			echo "</br>";  
			echo "Direction = $Dirc";
		}
	}
	
	else if(isset($_POST["left"]))
	{
		$Dirc=$_POST['left'];
		//DB Connection
		$conn = new mysqli('localhost','root','','controlboard1');
		if($conn->connect_error)
		{
			die('Failed'.$conn->connect->error);
		}
		else
		{
			$stmt = $conn->prepare("INSERT INTO `direction` (`Dirc`) 
			VALUES (?)");
			$stmt->bind_param("s", $Dirc);
			$stmt->execute();
			echo "Direction = $Dirc";
		}
	}
	
	else if(isset($_POST["stop"]))
	{
		$Dirc=$_POST['stop'];
		//DB Connection
		$conn = new mysqli('localhost','root','','controlboard1');
		if($conn->connect_error)
		{
			die('Failed'.$conn->connect->error);
		}
		else
		{
			$stmt = $conn->prepare("INSERT INTO `direction` (`Dirc`) 
			VALUES (?)");
			$stmt->bind_param("s", $Dirc);
			$stmt->execute();
			echo "Direction = $Dirc";
		}
	}
	else if(isset($_POST["right"]))
	{
		$Dirc=$_POST['right'];
		//DB Connection
		$conn = new mysqli('localhost','root','','controlboard1');
		if($conn->connect_error)
		{
			die('Failed'.$conn->connect->error);
		}
		else
		{
			$stmt = $conn->prepare("INSERT INTO `direction` (`Dirc`) 
			VALUES (?)");
			$stmt->bind_param("s", $Dirc);
			$stmt->execute();
			echo "Direction = $Dirc";
		}
	}
	else if(isset($_POST["backward"]))
	{
		$Dirc=$_POST['backward'];
		//DB Connection
		$conn = new mysqli('localhost','root','','controlboard1');
		if($conn->connect_error)
		{
			die('Failed'.$conn->connect->error);
		}
		else
		{
			$stmt = $conn->prepare("INSERT INTO `direction` (`Dirc`) 
			VALUES (?)");
			$stmt->bind_param("s", $Dirc);
			$stmt->execute();
			echo "Direction = $Dirc";
		}
	}

?>