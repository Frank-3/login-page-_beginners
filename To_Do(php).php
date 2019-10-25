<?php
			$fname=$_POST['Firstname'];
			$lname=$_POST['Lastname'];
			$email=$_POST['Email'];
			$uid=$_POST['UserID'];
			$pwd=$_POST['Password'];
			$enter=$_POST['enter'];

		if(isset($enter)){

			if($fname && $lname && $email && $uid && $pwd){




				echo "Hello," .$fname ." " .$lname ."<br>";
				

				$servername="localhost";
				$dbname="second db";
				$password="";
				$username="root";

				$connection = mysqli_connect($servername,$username,$password,$dbname,);

				if($connection){
					$data = mysqli_query($connection,"INSERT INTO todo (id,Firstname,Lastname,Email,UserID,Password)VALUES(null,'$fname','$lname','$email','$uid','$pwd')");

					if($data){
						echo "You Have Sucessfully Registered";
					}else{
						echo mysqli_error($connection);
					}

				}else{
					echo mysqli_error($connection);
				}
			}else{
				echo "fill all fields";
			}
		}
?>