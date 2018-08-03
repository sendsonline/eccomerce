<?php include 'header.php'; ?>
<?php include 'connection/connection.php'; ?>
<?php 
  $user = $_GET['user'];
?>


<div class="container body margin-top50 min-height">
  <div class="row">
    <div class="cart-title">
     Home > My Cart
    </div>
  </div>
  <div class="row">
    <div class="col-md-7">
    <?php
    if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])){
        ?>
            <h3 class="text-center">Nothing in here.</h3>
        <?php
    }
    else{
        foreach ($_SESSION['cart'] as $prod){
            $pro = $prod['id'];
            $q = $prod['qty'];

        $sql1 = mysqli_query($conn,"SELECT * FROM tbl_products WHERE id = ".$pro);
        while ($row1 = mysqli_fetch_array($sql1)){

     ?>
      <div class="row cart-wrap">
      <a type="button" class="close" href="<?= URL ?>function/deleteCart.php?id=<?= $pro ?>">&times;</a>
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
            <span class="fa fa-check"></span> <?= $row1['stock'] ?>
          </div>
          <div class="item-price">
            P <?= $row1['price'] ?>
          </div>
          <div class="item-quantity">
            <input type="hidden" class="qty_id" value="<?= $row1['id'] ?>">
            <input type="hidden" class="qty_price" value="<?= $row1['price'] ?>">
            <input type="number" class="item-qty" value="<?= $q ?>">
          </div>
        </div>
        <div class="col-md-3 item-total-price">
            P <?= $q * $row1['price'] ?>
        </div>
      </div>
      <?php } } }?>
      
    </div>
    <div class="col-md-1"></div>
      <?php
      if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])){
      ?>
      <h5></h5>
      <?php
      }
      else{
    ?>
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
               $r = 0;
               foreach ($_SESSION['cart'] as $prod){

                   $r += $prod['total'];


                      ?>

                    <?php }?>
                <td align="right"><b>P <?= $r ?></b></td>
            </tr>
            <tr>
                <?php if(!isset($_SESSION['cust'])){ ?>
                    <td colspan="2"><a type="button" href="<?= URL ?>payment.php" class="btn btn-cart" name="button">Proceed to Checkout</a></td>
                <?php } else {?>
                    <td colspan="2"><a type="button" href="<?= URL ?>function/payment.php" class="btn btn-cart" name="button">Proceed to Checkout</a></td>
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
