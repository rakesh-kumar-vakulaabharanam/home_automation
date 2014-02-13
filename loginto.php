<?php
$errorEMsg = '';

$email = '';

$pass = '';



if (isset($_POST['enter'])) {

	

	$email = $_POST['email'];

	$pass = $_POST['pass'];

	



	$email = stripslashes($email); //for security purpose

	$pass = stripslashes($pass); //for security purpose

	$email = strip_tags($email); //for security purpose

	$pass = strip_tags($pass); //for security purpose

	



	// error handling conditional checks go here

	if ((!$email) || (!$pass)) { 



		$errorEMsg = 'Please fill in both fields';



	} else {





					$_SESSION['email'] = $email;

					



					

        

    			} // close while



    			// All good they are logged in, send them to homepage then exit script username

    			

			header("location: welcome.php"); 

    			exit();

	

		} else { // Run this code if login_check is equal to 0 meaning they do not exist

		    $errorEMsg = "Incorrect login data, please try again";

		}
?>
