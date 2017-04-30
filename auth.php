<?php

include 'app.php';

if($_GET['action'] == 'login'){
			
		$error=null; // Variable To Store Error Message
		
		if (isset($_POST['submit'])) {
			if (empty($_POST['email']) || empty($_POST['password'])) {
				$error = "Email and Password are required";
			}else{

				// Define $username and $password
				$email=$_POST['email'];
				$password=$_POST['password'];
				
				// To protect MySQL injection for Security purpose
				$email = stripslashes($email);
				$email = mysql_real_escape_string($email);
				$password = stripslashes($password);
				$password = mysql_real_escape_string($password);
				
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$error = "Invalid email format"; 
				}else{			
					$customer = Users::retrieveByEmail($email, SimpleOrm::FETCH_ONE);

					if(isset($customer) && password_verify($password, $customer->password))
						$_SESSION['login_user'] = $customer->id;
					else
						$error = "Email or Password is invalid";
				}
			}
		}

		if($error != null){
			$_SESSION['form'] = $_POST;
			$_SESSION['error'] = $error;
			$_POST['redirect'] = 'index.php?login=1';
		}

}elseif($_GET['action'] == 'register'){

	$user_msg='';

	if (isset($_POST['submit'])){
		if (empty($_POST['email']) || empty($_POST['password'])) {
			$user_msg = "Email and Password are required";
		}else{
			//retrieve email
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			
			//retrieve password
			$password = mysqli_real_escape_string($conn, $_POST['password']);

			//retrieve retyped password
			$password2 = mysqli_real_escape_string($conn, $_POST['password_confirm']);

			//compares password and password2
			if(!(strcmp($password, $password2) == 0)){
				$user_msg = "Passwords not match";
			}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				//check email format
				$user_msg = "Invalid email format"; 
			}else{
				//test if email is taken
				$customers = Users::retrieveByEmail($email);
				if($customers != null){
					$taken = true;
					$user_msg = "This email has been taken.";
				}else{
					//creates hash for password for security purposes
					$hash = password_hash($password, PASSWORD_BCRYPT);
					
					$customers = new Users;
					$customers->email = $email;
					$customers->password = $hash;
					$customers->save();

					$_SESSION['login_user'] = $customers->id;
				}
			}
		}	
	}

	if($user_msg != null){
		$_SESSION['form'] = $_POST;
		$_SESSION['error'] = $user_msg;
		$_POST['redirect'] = 'index.php?register=1';
	}

}elseif($_GET['action'] == 'logout'){
	session_destroy();
}

$location = (isset($_POST['redirect']) ? $_POST['redirect'] : 'index.php');
header("Location: " . $location);
die();