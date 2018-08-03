<?php
session_start();
	include '../connection/connection.php';
//	$user_id = $_POST['user'];
	$prod = $_POST['id'];
//

	$sql1 = "SELECT * FROM tbl_products WHERE id = ".$prod;
		$query = mysqli_query($conn, $sql1);
        while($row=mysqli_fetch_array($query)){
            $price = $row['price'];
        }

    $prod_id = array('id' => $prod, 'qty' => 1, 'total' => $price);
    $_SESSION['cart'][] = $prod_id;
//    print_r($_SESSION['cart']);

?>