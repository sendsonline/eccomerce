<?php
session_start();
	include '../connection/connection.php';
	$id = $_POST['id'];
    $qty = $_POST['qty'];
    $total = $_POST['total'];


	$sql = mysqli_query($conn,"SELECT * FROM tbl_products WHERE id = '$id'");
    while($row=mysqli_fetch_array($sql)){
        $stock = $row['stock'];
        if($stock < $qty){
            echo $stock;

        }
        else{
            echo"";
            foreach($_SESSION['cart'] as $key => $i){
                if($i['id'] == $id){
//                    $i['qty'] += $qty;
                    $_SESSION['cart'][$key]['qty'] = $qty;
                    $_SESSION['cart'][$key]['total'] = $total;

                }
//                echo $i['qty'];
//                echo $i['id'];
//                print_r($_SESSION['cart']);
            }
        }
    }

//	if(!$sql){
//			echo"Not Updated";
//		}
//		else{
//			echo"";
//		}
 ?>