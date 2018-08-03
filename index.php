<?php
  include 'header.php';
  include 'connection/connection.php';
  session_start();

//  if(isset($_SESSION['id'])){
//        $user = $_SESSION['id'];
//      }
//      else{
//        $user = '';
//      }
//?>
<div class="page-title body margin-top40 margin-bottom50">
  <div class="container">

    <?php
//    print_r($_SESSION['cart']);
      if(isset($_GET['product'])){
          $url = $_GET['product'];
        }
    ?>
    <?= $url == 1 ? 'Home > Powder' : ''?>
    <?= $url == 2 ? 'Home > Suspension' : ''?>
    <?= $url == 3 ? 'Home > Sticks' : ''?>
    <?= $url == 4 ? 'Home > Lotions' : ''?>
    <br>
    <br>
  </div>
<!--  <input type="hidden" name="login-status" value="--><?//= $user ?><!--">-->
  <div class="container">
    <div class="row">
      <?php

      
      if(isset($_GET['product'])){
          $url = $_GET['product'];
        
      $sql = mysqli_query($conn,"SELECT * FROM tbl_products WHERE main_id = ".$url."");
      while ($row = mysqli_fetch_array($sql)){
        
      

     ?>

      <div class="col-sm-3">
        <div class="item-wrapper">
          <div class="item-image-wrapper">
            <img src="<?= URL ?>assets/images/<?= $row['item_dir'] ?>" class="image-of-item" alt="">
          </div>
          
          <div class="item-desc-wrapper">
            <p class="item-name"> <?= $row['product_name'] ?></p>
            <p> <?= $row['product_desc'] ?></p>
          </div>
          <div class="item-price">
            <?= $row['price'] ?>
          </div>
          <div class="item-button" align="center">
                  <input type="hidden" name="prod_id" class="product_id"  value="<?= $row['id'] ?>">
                  <button type="button" class="btn btn-buyNow addToCart"><span class="fa fa-cart-plus"></span> ADD TO CART</button>


          </div>
        </div>
      </div>
    <?php } }
    else{
        ?>

        <h1 class="text-center ind"><span class="fa fa-cart-plus"></span> &nbspLavadaaZ</h1>
        <?php } ?>
    </div>

  </div>
</div>

    <div id="welcome-loading" style="display:none">
    </div>
  </div>
    </div>
    <div class="col-sm-3"></div>
  </div>
</div>



</div>

<div id="login-modal" class="modal fade" role="dialog">
<div class="container">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="modal-dialog margin-top100" style="width: 100%">
          <div class="modal-content" id="first-time-modal-content">
            <div class="modal-body" id="first-time-modal-body">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="row">
                    <div class="text-center">Successfully added to cart!</div>
                    <br>
                    <div style="padding: 5px 20px;"><a href="cart.php" class="btn btn-cart"><span class="fa fa-eye"></span> View Cart</a></div>
                    <div style="padding: 5px 20px;" class="text-center"><a data-dismiss = "modal">View Later</a></div>
                </div>

            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn-sm btn-blue" id="welcome-btn">Okay</button> -->
            </div>
          </div>
    <div id="welcome-loading" style="display:none">
    </div>
  </div>
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>
</div>



<div id="signup-modal" class="modal fade" role="dialog">
<div class="container">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="modal-dialog margin-top100" style="width: 100%">
          <div class="modal-content" id="first-time-modal-content">
            <div class="modal-body" id="first-time-modal-body">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <div class="row">
                <div class="login-title">SIGNUP</div>
              </div>
              <div class="login-content">
              <form method="post" action="<?= URL ?>function/signup.php">
              <input type="hidden" name="curent_page" value="<?= $url ?>">
              <label>Fullname:</label>
                <p><input type="text" class="input-form" name="name" required></p>
                <label>Email Address:</label>
                <p><input type="email" name="email" class="input-form" required></p>
                <label>Birthday:</label>
                <p><input type="date" name="bday" class="input-form" required></p>
                <label>Gender:</label>
                <p><select name="gender"  class="input-form" required>
                  <option>Male</option>
                  <option>Female</option>
                </select></p>
                <label>Address:</label>
                <p><input type="text" name="address" class="input-form" required></p>
                <label>Password:</label>
                <p><input type="password" name="password" class="input-form" required></p>
                
                <p><button type="submit" name="signup" class="btn btn-xs btn-cart"><span class="fa fa-file-text-o"></span> Signup</button></p>
              </form>
              </div>
              
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn-sm btn-blue" id="welcome-btn">Okay</button> -->
            </div>
          </div>
    <div id="welcome-loading" style="display:none">
    </div>
  </div>
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>


</div>
<?php include 'footer.php'; ?>
