<?php
session_start();
	include '../connection/connection.php';

	if(isset($_POST['submit'])){
	    $email = $_POST['email'];
	    $fullname = $_POST['fullname'];
	    $gender = $_POST['gender'];
	    $address = $_POST['address'];
	    $mob_number = $_POST['mob_number'];
        $date = date('Y-m-d h:i:s');
	    $sql = mysqli_query($conn,"INSERT INTO tbl_customer(fullname,email,gender,address,date_reg)VALUES('$fullname','$email','$gender','$address','$date')");
//        print_r($sql);
	    if(!$sql){
            echo"<script>alert('Cannot Register!');window.location.href='../payment.php';</script>";
        }
        else {
            $q = mysqli_query($conn, "SELECT LAST_INSERT_ID() from tbl_customer");
            $ids = $q->num_rows;
            $_SESSION['cust'] = $ids;

        }
            $id = $_SESSION['cust'];

        }
        else{
            $id = $_SESSION['cust'];
        }
    foreach ($_SESSION['cart'] as $prod) {

        $pro = $prod['id'];
        $q = $prod['qty'];
        $t = $prod['total'];
        $date = date('Y-m-d h:i:s');

        $ssql = mysqli_query($conn, "INSERT INTO tbl_transaction(product_id,customer_id,qty,total_price,status,date_reg)VALUES('$pro','$id','$q','$t','Pending','$date')");
        if (!$ssql) {
            echo "<script>alert('Cannot Save Transaction!');window.location.href='../payment.php';</script>";
        } else {
            echo "<script>alert('Transaction done!');window.location.href='../transaction.php';</script>";
        }
    }




 ?>