$(function(){
	// alert();
	$('.btn-logins').click(function(){
		$('#logins-modal').modal('show');
	});
	$('.btn-signups').click(function(){
		$('#signups-modal').modal('show');
	});
	$('.addToCart').click(function(){
		// login = $('input[name="login-status"]').val();

		id = $(this).parent().find('.product_id').val();
		// alert(id);
		// user = $(this).find('.user_id').val();
		// console.log(id);
		// if(login == ''){
		// 	$('#login-modal').modal('show');
		// }
		// else{
        $.post( 'function/addToCart.php', {'id' : id })
            .done(function(returnData){
                ress = $.trim(returnData);
                if(ress == ''){
                    // alert('Successfully Added to Cart!');
                    $('#login-modal').modal('show');
                    // window.location.href="cart.php?user="+user;
                }
                else{
                    alert(ress);
                }

            });

			$('#checkout-modal').modal('show');
		// }

	});

	$('.btn-signup').click(function(){
		$('#login-modal').modal('hide');
		$('#signup-modal').modal('show');
	});

	$('.item-qty').change(function(){
		qty = $(this).val();
		id = $(this).parent().find('.qty_id').val();
		price = $(this).parent().find('.qty_price').val();
		total = qty * price;
		y = $(this).parent().parent().parent().find('.item-total-price');
        $.post( 'function/updateQty.php', {'id' : id, 'qty' : qty, 'total' : total })
            .done(function(returnData){
                ress = $.trim(returnData);
                // alert(ress);
                if(ress == ''){

                    y.html("P "+total);
					location.reload();
                    // window.location.href="cart.php?user="+user;
                }
                else{
                    $(this).val(10);
                    alert(ress);

                }

            });

		// alert(id);

	});
});
