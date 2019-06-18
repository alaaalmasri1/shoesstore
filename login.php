<?php
include "site_header.php";
?>
<script type="text/javascript">
//<![CDATA[
var CUSTOMMENU_POPUP_EFFECT = 0;
var CUSTOMMENU_POPUP_TOP_OFFSET = 46;
//]]>
</script>
							</div>
						</div>
					</div>
				</header>



                                                 
                                      <div class="container " style="background-color:#FFFFFF" align="center">
  <div class="">
  <br />
<br /> 

     
  </div>
  
   <br />
<br />

          
                          <div class="columns-container">
				<div id="columns" class="container">
					<div class="row">
												<div id="center_column" class="center_column col-xs-12 col-sm-12">
 

	<!---->
	<div class="row">
		<div class="col-xs-12 col-sm-6" style="float:left">
			<form action="#" method="post" id="create-account_form" class="box">
				<h3 class="page-subheading">مستخدم جديد</h3>
				<div class="form_content clearfix">
					<p>الانتساب | التسجيل في الموقع</p>
					 <br />

					<div class="submit">
						<input type="hidden" class="hidden" name="back" value="my-account">						<button class="btn btn-default button button-medium exclusive" type="submit" id="SubmitCreate" name="SubmitCreate">
							<span>
								<i class="icon-user left"></i>
                                                                <a href="admin/registration.php" >تسجيل مستخدم جديد
</a>							</span>
						</button>
						<input type="hidden" class="hidden" name="SubmitCreate" value="Create an account">
					</div>
				</div>
			</form>
		</div>
		<div class="col-xs-12 col-sm-6">
			<form action="admin/include/login_user.php" method="post" id="login_form" class="box">
				<h3 class="page-subheading">تسجيل الدخول </h3>
				<div class="form_content clearfix">
					<div class="form-group">
						<label for="username">اسم المستخدم</label>
						<input   class="is_required validate account_input form-control"type="text"  name="username" value="">
					</div>
					<div class="form-group">
						<label for="passwd">كلمة المرور</label>
						<span><input placeholder="" class="is_required validate account_input form-control" type="password" data-validate="isPasswd" id="passwd" name="password" value=""></span>
					</div>
					 
					<p class="submit">
						<input type="hidden" class="hidden" name="back" value="my-account">
                        <button type="submit" id="SubmitLogin"  name="SubmitLogin" class="button btn btn-default button-medium">
							<span>
								<i class="icon-lock left"></i>
								تسجيل الدخول
							</span>
						</button>
					</p>
				</div>
			</form>
		</div>
	</div>
						</div><!-- #center_column -->
										</div><!-- .row -->
				</div><!-- #columns -->
							</div>                      
                                           








		
		
      <!-- Footer -->




















            <div class="footer-container">

           <br><br>

<div class="pos-footer-top">
						<div class="container">
							<div class="container-inner">
							    <div class="footer-top">
								<div class="footer-static row">


                   <div id="links_block_left" class="block col-sm-6 col-md-6 col-sms-6 col-smb-12">
                                	<div class="footer-address">

<p>Development by <a  target="_blank" href="https://www.facebook.com/sameh.hanini">Sameh Hanini</a></p>
</div>

 </div>
<!-- /Block links module -->

		 					<div class="link-web col-sm-6 col-md-6 col-sms-6 col-smb-12">
<ul>
<li><a class="face" target="_blank" href="https://www.facebook.com/شركة-نابولي-للاحذيه-naboly-shoes-co-153165348073476/?hc_ref=ARQ7GIcSFLAHduHcXIXHzu5_FtohcTg86BrzNvsDh4H7qy2OWvs1RNah_lkprJ1GHy0"><span class="link1">face</span></a></li>
  <li><a class="youtube" target="_blank" href="https://www.youtube.com/watch?v=YiTuhbYVMMs"><span class="link1">youtube</span></a></li>
</ul>
</div>
			</div>


							    </div>
							</div>
						</div>
					</div>

			</div><!-- #footer -->
		</div><!-- #page -->
		</div>


	
		
    <div id="add_to_cart_result"></div>
          <script type="text/javascript">
		  function add_to_cart(product_id,quantity,size,color2,offer_id){
			  
			  $.post( "ajax/add_to_cart.html" ,{firm_id:'11' , product_id:product_id ,quantity:quantity ,size:size ,color2:color2 , offer_id:offer_id },
function( data ) {
  $( "#add_to_cart_result").html( data );
});
		
		
		 setTimeout(function() { window.location=window.location;},3000);
			  
			  }
		  
		   </script>
           
           
           
           
           
           
           
           
           <script type="text/javascript">
		  function add_quantity_to_temp_order(item_id){
			  
			  $.post( "ajax/add_quantity_to_temp_order.html" ,{item_id:item_id},
function( data ) {
  $( "#show_temp_order").html( data );
});
			  
			  }
		  
		   </script> 
           
           
           
<script type="text/javascript">
		  function remove_quantity_to_temp_order(item_id){
			  
			  $.post( "ajax/remove_quantity_to_temp_order.html" ,{item_id:item_id},
function( data ) {
  $( "#show_temp_order").html( data );
});
			  
			  }
		  
		   </script> 
           
           
           <script type="text/javascript">
		  function delete_product_from_temp_order(item_id){
			  
			  $.post( "ajax/delete_product_from_temp_order.html" ,{item_id:item_id},
function( data ) {
  $( "#show_temp_order").html( data );
});
			  
			  }
		  
		   </script> 
           
           


<div class="back-top"><a href= "#" class="mypresta_scrollup hidden-phone"></a></div>
</body>
 
<!-- Mirrored from www.naboly.ps/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 16:56:54 GMT -->
</html>
 