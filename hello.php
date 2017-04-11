
<?php
if(count($_POST)>0) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
	if(empty($_POST[$key])) {
	$message = ucwords($key) . " field is required";
	break;
	}
	}
	/* Password Matching Validation */
	/* Email Validation */
	if(!isset($message)) {
	if (!filter_var($_POST["useremail"], FILTER_VALIDATE_EMAIL)) {
	$message = "Invalid UserEmail";
	}
	}

	/* Validation to check if gender is selected */

	/* Validation to check if Terms and Conditions are accepted */

	if(!isset($message)) {
		require_once("message.php");
        $db_handle = new DBController();

		$query = "INSERT INTO registered_users (user_name, mobile_no, state, email, passwd) VALUES
		('" . $_POST["name"] . "', '" . $_POST["mobile"] . "', '" . $_POST["statename"] . "', '" . $_POST["useremail"] . "', '" . $_POST["password"] . "')";
        $result = $db_handle->insertQuery($query);
         if(!$query)
        {
            $err="Email already exists!!<br>Please try different Email id ";
        }
        else
        {
	 
			$message = "You have registered successfully!";
			unset($_POST);
		} 
            }
	}

?>
