<?php include '../../config_global.php'; ?>

<?php
echo "in sign up <br>";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$password = $_POST['password'];
	$password_confirm = $_POST['password_confirm'];

	$validCredentials = ($name != "" & $email!= "" & $number != "" & $password != "" & $password_confirm != "" & $password == $password_confirm) ? 1 : 0 ;
	
	echo "checked credentials <br>";
	if ($validCredentials) {
			# code...
		echo "in if loop ";
		$user_info = R::dispense('user');

		$user_info = R::find('user', 'email="'. $email .'"');
		var_dump($user_info);
		echo "this is count " . count($user);
		if (count($user_info) == 0) {

			$user= R::dispense('user');
			# code...
			$user->name = $name;
			$user->email= $email;
			$user->phoneNumber= $number;
			$user->loggedFrom="manual";
			$user->password = $password;
			$user->timestamp= date("Y-m-d H:i:s");
			echo "<br> before storing <br> username is $username
			<br> $email <br> $password <br> $number
		<br>
			";
			echo date("Y-m-d H:i:s");
			
			$id_user = R::store( $user);
			echo "<br> Stored successfully Please return to the login page to login to the system";

			


		}

		?>
		<button class="btn btn-success" onclick="window.location='login.php'"> Return to login page</button>
		<?php 
		}
		else {
			// header("Location: login.php");
			echo "you are on the wrong page";
		}	
?>