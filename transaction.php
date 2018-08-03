<?php include 'header.php'; ?>
<?php include 'connection/connection.php'; ?>
<?php
  $user = $_GET['user'];
?>


<div class="container body margin-top50 min-height">
  <div class="row">
    <div class="cart-title">
     Home > My Transactions
    </div>
  </div>
  <div class="row">
    <div class="col-md-7">
    <?php
//        print_r($_SESSION['cust']);
    if(!isset($_SESSION['cust']) || empty($_SESSION['cust'])){
        ?>
        <h3 class="text-center">Nothing in here.</h3>
        <?php
    }
    else{
    $user = $_SESSION['cust'];
      $sql = mysqli_query($conn,"SELECT * FROM tbl_transaction WHERE customer_id = ".$user." ORDER BY id DESC");
      if(mysqli_num_rows($sql) == ''){
        ?>
        <h4 class="item-name">No Item Added to Cart.</h4>

        <?php
      }
      else{
      while ($row = mysqli_fetch_array($sql)){
        // echo $row['id'];
        // echo $row['id'];
        $sql1 = mysqli_query($conn,"SELECT * FROM tbl_products WHERE id = ".$row['product_id']."");
        while ($row1 = mysqli_fetch_array($sql1)){

     ?>
      <div class="row cart-wrap">
      <!-- <a type="button" class="close" href="<?= URL ?>function/deleteCart.php?user=<?= $user ?>&id=<?= $row['id'] ?>">&times;</a>  -->
        <div class="col-sm-4">
          <div class="item-pic-wrapper">
            <img src="<?= URL ?>assets/images/<?= $row1['item_dir'] ?>" class="item-pic-cart" alt="">
          </div>
        </div>
        <div class="col-sm-5">
          <div class="item-name">
            <?= $row1['product_name'] ?>
          </div>
          <div class="item-desc">
            <?= $row1['product_desc'] ?>
          </div>
          <div class="item-availability">
            <span class="fa fa-check"></span> <?= $row['status'] ?>
          </div>
          <div class="item-price">
            P <?= $row1['price'] ?>
          </div>

        </div>
        <div class="col-md-3 item-total-price">
          P <?= $row['total_price'] ?>
        </div>
      </div>
      <?php } } } }?>

    </div>
      <?php
      if(!isset($_SESSION['cust']) || empty($_SESSION['cust'])){
          ?>

          <?php
      }
      else{ ?>
    <div class="col-md-1"></div>

    <div class="col-md-4">
      <div class="row">
        <div class="purchase-form">
          <table class="table">
            <tr>
              <td colspan="2">Order Summary</td>
            </tr>
            <tr>
              <td align="left">TOTAL</td>
               <?php

                    $sqls = mysqli_query($conn,"SELECT SUM(total_price) AS pr FROM tbl_transaction WHERE customer_id = ".$user."");
                    while ($rows = mysqli_fetch_array($sqls)){
                      ?>
                      <td align="right"><b>P <?= $rows['pr'] ?></b></td>
                    <?php } ?>
            </tr>

          </table>

        </div>
      </div>
    </div>
      <?php } ?>
  </div>
</div>



<?php include 'footer.php'; ?>
