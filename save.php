<?php
	include('config.php');


	if(@$_POST['action'] == 'register'){

		$errors = [];
		$data = [];
		$fullname   = $_POST['fullname'];
		$dob 		= $_POST['dob'];
		$phone 		= $_POST['phone'];
		$email 		= $_POST['email'];
		$password	 = $_POST['password'];
		if (empty($fullname)) {
		    $errors['fullname'] = 'Name is required.';
		}
		if (empty($dob)) {
		    $errors['dob'] = 'DOB is required.';
		}
		if (empty($phone)) {
		    $errors['phone'] = 'Phone Number is required.';
		}

		if (empty($email)) {
		    $errors['email'] = 'Email is required.';
		}
		if (empty($password)) {
		    $errors['password'] = 'Password is required.';
		}

		if (!empty($errors)) {
		    $data['success'] = false;
		    $data['errors'] = $errors;
		} else {

			//Registration Data storing in Database:

			$sql1 = "insert into user_details (fullname,dob,phone,email,password) values('".$fullname."','".$dob."','".$phone."','".$email."','".md5($password)."')";
			if(mysqli_query($conn,$sql1)){
				$data['success'] = true;
		    	$data['message'] = 'Registration Success!';
			}
		}
 
		echo json_encode($data); exit;
	}
 
    if(@$_POST['action'] =='login'){

       $phone = $_POST['phone'];
       $password = md5($_POST['password']);
       
       $sql2 = "select * from user_details where phone = '$phone' and password= '$password'";
      
       $result = mysqli_query($conn,$sql2);
       
       if(mysqli_num_rows($result) > 0){

       		$user = $result->fetch_assoc();
       		session_start();
       	    $_SESSION['phone'] = $user['phone'];
       	  	$_SESSION['userid'] =$user['id'];
       	 	$data['success'] = true;
		    $data['errors'] = 'Success';
       }else{
       		 $data['success'] = false;
		   	 $data['errors'] = 'Invalid Mobile number or Password';
       }
 		echo json_encode($data); exit;
       	
	}	

	if(@$_POST['action'] =='logout'){
		session_start(); 
		session_destroy(); 
		$data['success'] = true;
		echo json_encode($data); exit();
	}


?>