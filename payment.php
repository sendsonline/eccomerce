<?php include 'header.php'; ?>

<div class="container margin-top90">
	<div class="row">
		<div class="col-md-7">
		<div class="form-title">
			Your Shipping Information
		</div>
			<div class="form-wrapper">
				<form method = "post" action="function/payment.php">
					<table>

						<tr>
							<td><label>Email Address: </label>	</td>
							<td><input type="email" name="email" class="input-form" required></td>
						</tr>
						<tr>
							<td><label>Full Name: </label></td>
							<td><input type="text" name="fullname" class="input-form" required></td>
						</tr>
                        <tr>
                            <td><label>Gender: </label></td>
                            <td><select name="gender" class="input-form"  required>
                                    <option>---</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select></td>
                        </tr>
						<tr>
							<td><label>Complete Address: </label></td>
							<td><input type="text" name="address" class="input-form" required></td>
						</tr>

						<tr>
							<td><label>Zip Code: </label></td>
							<td><input type="text" name="zip" class="input-form" required></td>
						</tr>
						<tr>
							<td><label>Mobile Number: </label> </td>
							<td><input type="text" name="mob_number" class="input-form" required></td>
						</tr>

                        <tr>
                            <td colspan="2" align="right"><button type="submit" name="submit" class="btn btn-orange">Submit</button></td>
                        </tr>


					</table>
				</form>
			</div>
		</div>
		<div class="col-md-5">
		<div class="form-title">
			Order Summary
		</div>
			<table class="table">
				<tr>
					<td colspan="2">Order Summary</td>
				</tr>
                <tr>
                    <td align="left"><b>Product</b></td>
                    <td align="right"><b>Total</b></td>
                    </tr>

                    <?php
                    $r = 0;
                    foreach ($_SESSION['cart'] as $prod){

                        $r += $prod['total'];
                    $pro = $prod['id'];
                    $q = $prod['qty'];

                    $sql1 = mysqli_query($conn,"SELECT * FROM tbl_products WHERE id = ".$pro);
                    while ($row1 = mysqli_fetch_array($sql1)){

                        ?>

                    <tr>
                        <td > <?= $row1['product_name'] ?></td>
                        <td align="right">    P <?= $prod['total'] ?></td>
                    </tr>
                    <?php } }?>
                <tr>
                    <td><b>TOTAL</b></td>
                    <td align="right"><b><?= $r ?></b></td>
                </tr>
                </tr>
			</table>
		</div>
	</div>
</div>