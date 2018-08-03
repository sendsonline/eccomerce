<?php
include '../connection/connection.php';
	define('URL', '/eccomerce/');
	if(isset($_POST['login'])){
		
		$email=$_POST['email'];
		$pword = $_POST['password'];
		$cur = $_POST['curent_page'];



		$sql1 = "SELECT * FROM tbl_customer WHERE email = '$email' AND password = '$pword'";
		$sql = mysqli_query($conn, $sql1);
		if (mysqli_num_rows($sql) == '') {
			echo"jdhfg";
            echo "
                <script>alert('Incorrect Username/Password!');window.location.href = '../?product=".$cur."';</script>
            ";
            // error_reporting(FALSE);

        }
        else{
        	// echo"djfh";
            while ($row = mysqli_fetch_array($sql)){
	                $name = $row['fullname'];
	                session_start();
	                $_SESSION['id'] = $row['id'];
	                // echo"dhfk";
	                if(!empty($row['id'])){
                	 echo"
                	 <script>alert('You are logged in');window.location.href='../';</script>
                    ";
                }
                }
                
               
            }
        }
	
?>