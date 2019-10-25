<?php
	

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "second db";

	$connection = mysqli_connect($servername,$username,$password,$dbname);

	if($connection){
		echo "CONNECTED! <br>";

	}else{
		echo mysqli_error($connection);
	}

	

	if(isset($_POST['click'])){

		$user = $_POST['UserID'];
		$pword = $_POST['Password'];
		$clk = $_POST['click'];

		echo "Your UserID is: ".$user ." " ."Your password is: " .$pword ."<br>";

		if($user && $pword && $clk){

				$sql = "SELECT * FROM todo WHERE UserID=$user AND Password=$pword";

				$catch = mysqli_query($connection,$sql);

				while($row = mysqli_fetch_assoc($catch)){
					$theID = $row['id'];

				}

				if($catch){
					$_SESSION['id']=$theID;

					echo "success";
				}else{
					echo "error";
				}

				

			}else{
				echo "Fill all fields <br>";
		}
		

			

			// while($array = mysqli_fetch_assoc($catch)){
	}		// 	$id = $array['id'] ;

			// 	if($id){
			// 	echo "You have successfully logged in";
			// 	}else{
			// 	echo "User ID and Password do not match";
			// 	}
			// }

			
?>