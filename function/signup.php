<?php
include '../connection/connection.php';
	if(isset($_POST['signup'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$bday = $_POST['bday'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$pword = $_POST['password'];
		$date = date('Y-m-d');
		$cur = $_POST['curent_page'];

		$sql1 = "INSERT INTO tbl_customer(fullname,email,birthday,gender,address,password,date_reg)VALUES('$name','$email','$bday','$gender','$address','$pword',now())";
		$sql = mysqli_query($conn, $sql1);
		if(!$sql){
			echo"<script>alert('Not Added!');window.location.href='../?product=".$cur."';</script>";
		}
		else{
			echo"<script>alert('Success! You can now login to your account! Thank you and enjoy your shopping!');window.location.href='../?product=".$cur."';</script>";
		}
	}
?>