<?php
session_start();
	include '../connection/connection.php';
	$prod = $_GET['id'];
        foreach($_SESSION['cart'] as $key => $i){
            if($i['id'] == $prod){
        //                    $i['qty'] += $qty;
                unset($_SESSION['cart'][$key]);
                header('Location:../cart.php');
            }
//                echo $i['qty'];
//                echo $i['id'];
//                print_r($_SESSION['cart']);
}



 ?>