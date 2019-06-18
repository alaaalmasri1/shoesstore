<?php

include "./site_header.php";
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
	<div class="banner">

		<div class="slider">
			<img src="upload/slideshow/_2018-04-2223-49-07.jpg">
			<img src="upload/slideshow/_2018-04-2223-49-01.jpg">
			<img src="upload/slideshow/_2018-04-2223-49-12.jpg">




		</div>

		<script type="text/javascript">
			//<![CDATA[
			$(document).ready(function() {

				var options = {
					autoPlay: false, // auto change slides
					autoPlayDelay: 6000,
					pauseOnHover: false,
					hidePreloaderDelay: 500,
					nextButton: true,
					prevButton: true,
					pauseButton: true,
					preloader: true,
					pagination: true,
					hidePreloaderUsingCSS: false,
					animateStartingFrameIn: true,
					navigationSkipThreshold: 750,
					preventDelayWhenReversingAnimations: true,
					customKeyEvents: {
						80: "pause"
					}
				};

				var sequence = $("#sequence").sequence(options).data("sequence");


			});
			(function autoAdvance() {

				// Simulating a click on the next arrow.
				$('#sequence .sequence-next').trigger('click', [true]);

				// Schedulling a time out in 5 seconds.
				setTimeout(autoAdvance, 6000);
			})();
			//]]>

		</script>
	</div>
	<div class="columns-container">
		<div id="columns" class="container">
			<div class="row">
				<div id="center_column" class="center_column col-xs-12 col-sm-12">
					<div class="listcategory">
						<div class="listProducts">
							<div class="listcategory">

								<div class="row">
									<div class="categoryContainer">


										<div class="item" style="width:230px;">


											<div class="category-i">
												<div class="contentCate">
													<h2><a href="category_show681a-2.php?id=1" title="Cooker">بيبى</a></h2>
												</div>
												<div class="thumbimg">
													<a href="category_show681a-2.php?id=1"><img alt="thumb" src="upload/categories_pic/babyshoes.jpg" class="thumb34" /></a> </div>
											</div>

											<ul class="pos_child">





												<li class="child_name">

													<i class="icon-angle-double-right"></i><a href="products8803.html?id=7"> بيبى </a> </li>
												<i class="icon-angle-double-right"></i><a href="products8803.html?id=6"> بيبى بناتى </a>
												<br>
												<i class="icon-angle-double-right"></i><a href="products8803.html?id=5"> بيبى ولادى </a>






											</ul>
										</div>
										<div class="item" style="width: 230px;">


											<div class="category-i">
												<div class="contentCate">
													<h2><a href="category_show681a-2.html?id=1" title="Cooker">بناتى</a></h2>
												</div>
												<div class="thumbimg">
													<a href="category_show681a-2.html?id=1"><img alt="thumb" src="upload/categories_pic/girlbabyshoes.jpg" class="thumb34" /></a> </div>
											</div>

											<ul class="pos_child">





												<li class="child_name">

													<i class="icon-angle-double-right"></i><a href="products8803.html?id=7"> بناتى </a> </li>


												</li>




											</ul>
										</div>




										<div class="item" style="width: 230px;">


											<div class="category-i">
												<div class="contentCate">
													<h2><a href="category_show681a-2.html?id=1" title="Cooker">ولادي</a></h2>
												</div>
												<div class="thumbimg">
													<a href="category_show681a-2.html?id=1"><img alt="thumb" src="upload/categories_pic/12018-04-11_00-24-12.jpg" class="thumb34" /></a> </div>
											</div>

											<ul class="pos_child">





												<li class="child_name">

													<i class="icon-angle-double-right"></i><a href="products8803.html?id=7"> ولادي </a> </li>


												</li>




											</ul>
										</div>

										<div class="item" style="width: 230px;">


											<div class="category-i">
												<div class="contentCate">
													<h2><a href="category_showd708-2.html?id=3" title="Cooker">نسائى</a></h2>
												</div>
												<div class="thumbimg">
													<a href="category_showd708-2.html?id=3"><img alt="thumb" src="upload/categories_pic/womanshoes.jpeg" class="thumb34" /></a> </div>
											</div>

											<ul class="pos_child">





												<li class="child_name">

													<i class="icon-angle-double-right"></i><a href="productsdcfd.html?id=4"> نسائى </a> </li>


												</li>




											</ul>
										</div>

										<div class="item" style="width: 230px;">


											<div class="category-i">
												<div class="contentCate">
													<h2><a href="category_show5255-2.html?id=9" title="Cooker">رجالى</a></h2>
												</div>
												<div class="thumbimg">
													<a href="category_show5255-2.html?id=9"><img alt="thumb" src="upload/categories_pic/menshoes.jpg" class="thumb34" /></a> </div>
											</div>

											<ul class="pos_child">





												<li class="child_name">

													<i class="icon-angle-double-right"></i><a href="products0055.html?id=11"> رجالى</a> </li>


												<li class="child_name">



											</ul>






											
										</div>




									</div> <!-- .tab_container -->
								</div>


							</div>
						</div>
						<script type="text/javascript">
							$(document).ready(function() {
								var owl = $(".categoryContainer");
								owl.owlCarousel({
									items: 5,
									itemsDesktop: [1200, 3],
									itemsDesktopSmall: [980, 2],
									itemsTablet: [767, 2],
									itemsMobile: [480, 1],
									autoPlay: false,
								});

								// Custom Navigation Events
								$(".nextcateList").click(function() {
									owl.trigger('owl.next');
								})
								$(".prevcateList").click(function() {
									owl.trigger('owl.prev');
								})
							});

						</script>
					</div>







					<div class="posbestsellers">
						<div class="ma-bestsellerproductslider-container">


							<script type="text/javascript">
								// $jq(document).ready(function(){
								$(".ma-bestsellerproductslider-container .owl").owlCarousel({
									autoPlay: false,
									items: 1,
									itemsDesktop: [1199, 1],
									itemsDesktopSmall: [980, 1],
									itemsTablet: [768, 1],
									itemsMobile: [479, 1],

									stopOnHover: true,
									pagination: true,
									scrollPerPage: true,
									afterMove: function() {
										x = $(".ma-bestsellerproductslider-container .owl-pagination .owl-page").index($(".ma-bestsellerproductslider-container .owl-pagination .active"));
										var bthumb = ".best" + x;
										$(".best-left li").removeClass('active');
										$(".best-right li").removeClass('active');
										$(bthumb).addClass('active');
									}
								});
								var bslider = $(".ma-bestsellerproductslider-container .owl").data('owlCarousel');

								function bestslider(x) {
									bslider.goTo(x)
								}
								// });

							</script>
						</div>

					</div>

				</div><!-- #center_column -->
			</div><!-- .row -->
		</div><!-- #columns -->

		<div class="block-group">
			<div class="container">
				<div class="row">
					<div class="pos-feature-product col-md-4 col-xs-12">


						<script type="text/javascript">
							$(document).ready(function() {
								var owl = $(".featureSlide");
								owl.owlCarousel({
									items: 1,
									itemsDesktop: [1200, 1],
									itemsDesktopSmall: [992, 2],
									itemsTablet: [480, 2],
									itemsMobile: [360, 1],
									autoPlay: false,
								});

								// Custom Navigation Events
								$(".nextfea").click(function() {
									owl.trigger('owl.next');
								})
								$(".prevfea").click(function() {
									owl.trigger('owl.prev');
								})
							});

						</script>
					</div>
					<!--<script type="text/javascript">
		  $('.pos-feature-product .bxslider').bxSlider({
            auto: 0,
            slideWidth:270,
			slideMargin: 30,
			minSlides: 1,
			maxSlides: 12,
			speed:  1000,
			pause: 600,
			controls: 1,
            pager: false,
		});
	</script>-->



					<script type="text/javascript">
						$(document).ready(function() {
							var owl = $(".special_product_list");
							owl.owlCarousel({
								pagination: false,
								items: 3,
								itemsDesktop: [1200, 2],
								itemsDesktopSmall: [992, 2],
								itemsTablet: [600, 2],
								itemsMobile: [360, 1],
							});

							// Custom Navigation Events
							$(".nexthot").click(function() {
								owl.trigger('owl.next');
							})
							$(".prevhot").click(function() {
								owl.trigger('owl.prev');
							})
						});

					</script>
				</div>
			</div>
		</div>
		<div class="newproducts">



			<!-- MODULE Block new products -->
			<div class="container">
				<div id="new-products_block_right" class="products_block">
					<div class="new-products-title pos-title">
						<h2 class="title_block">
							<a title="New products"><span class="word1"> آخر </span><span class="word2" style="color:#74b5ff"> المنتجات </span></a>
						</h2>






					</div>
					<div class="block_content">
						<div class="productNew_slide ">
							<div class="item">
								<div class="item-ii last_item clearfix" align="center">
									<div class="product-img">
										<a class="product_img_link" href="show_products38e5.html?id=704112658" title="" itemprop="url">
											<img class="replace-2x img-responsive" src="upload/product/248375081418-07-15_05-02-44.jpg" alt="" title="" itemprop="image" /> </a> </div>
									<h5 class="product-name">
										<a href="show_products38e5.html?id=704112658" title="" style="font-size: 16px;">
											test<br />
										</a> </h5>

									<div class="price-box">
										<span itemprop="price" class="price product-price">
										</span> </div>
								</div>
							</div>
							<div class="item">
								<div class="item-ii last_item clearfix" align="center">
									<div class="product-img">
										<a class="product_img_link" href="show_products659c.html?id=416120542" title="" itemprop="url">
											<img class="replace-2x img-responsive" src="upload/product/91799698918-04-16_12-05-42.jpg" alt="" title="" itemprop="image" /> </a> </div>
									<h5 class="product-name">
										<a href="show_products659c.html?id=416120542" title="" style="font-size: 16px;">
											4005<br />
										</a> </h5>

									<div class="price-box">
										<span itemprop="price" class="price product-price">
										</span> </div>
								</div>
							</div>
							<div class="item">
								<div class="item-ii last_item clearfix" align="center">
									<div class="product-img">
										<a class="product_img_link" href="show_products5ddd.html?id=416120444" title="" itemprop="url">
											<img class="replace-2x img-responsive" src="upload/product/232371618-04-16_12-04-44.jpg" alt="" title="" itemprop="image" /> </a> </div>
									<h5 class="product-name">
										<a href="show_products5ddd.html?id=416120444" title="" style="font-size: 16px;">
											4004<br />
										</a> </h5>

									<div class="price-box">
										<span itemprop="price" class="price product-price">
										</span> </div>
								</div>
							</div>
							<div class="item">
								<div class="item-ii last_item clearfix" align="center">
									<div class="product-img">
										<a class="product_img_link" href="show_products8d38.html?id=416120406" title="" itemprop="url">
											<img class="replace-2x img-responsive" src="upload/product/31890853018-04-16_12-04-06.jpg" alt="" title="" itemprop="image" /> </a> </div>
									<h5 class="product-name">
										<a href="show_products8d38.html?id=416120406" title="" style="font-size: 16px;">
											4003<br />
										</a> </h5>

									<div class="price-box">
										<span itemprop="price" class="price product-price">
										</span> </div>
								</div>
							</div>
							<div class="item">
								<div class="item-ii last_item clearfix" align="center">
									<div class="product-img">
										<a class="product_img_link" href="show_productse9f9.html?id=416120322" title="" itemprop="url">
											<img class="replace-2x img-responsive" src="upload/product/85723611418-04-16_12-03-22.jpg" alt="" title="" itemprop="image" /> </a> </div>
									<h5 class="product-name">
										<a href="show_productse9f9.html?id=416120322" title="" style="font-size: 16px;">
											4002<br />
										</a> </h5>

									<div class="price-box">
										<span itemprop="price" class="price product-price">
										</span> </div>
								</div>
							</div>
							<div class="item">
								<div class="item-ii last_item clearfix" align="center">
									<div class="product-img">
										<a class="product_img_link" href="show_productsf41b.html?id=416120240" title="" itemprop="url">
											<img class="replace-2x img-responsive" src="upload/product/38978187418-04-16_12-02-40.jpg" alt="" title="" itemprop="image" /> </a> </div>
									<h5 class="product-name">
										<a href="show_productsf41b.html?id=416120240" title="" style="font-size: 16px;">
											4001<br />
										</a> </h5>

									<div class="price-box">
										<span itemprop="price" class="price product-price">
										</span> </div>
								</div>
							</div>
							<div class="item">
								<div class="item-ii last_item clearfix" align="center">
									<div class="product-img">
										<a class="product_img_link" href="show_productse018.html?id=416120055" title="" itemprop="url">
											<img class="replace-2x img-responsive" src="upload/product/20022687818-04-16_12-00-55.jpg" alt="" title="" itemprop="image" /> </a> </div>
									<h5 class="product-name">
										<a href="show_productse018.html?id=416120055" title="" style="font-size: 16px;">
											3005<br />
										</a> </h5>

									<div class="price-box">
										<span itemprop="price" class="price product-price">
										</span> </div>
								</div>
							</div>
							<div class="item">
								<div class="item-ii last_item clearfix" align="center">
									<div class="product-img">
										<a class="product_img_link" href="show_products4bd1.html?id=415115945" title="" itemprop="url">
											<img class="replace-2x img-responsive" src="upload/product/12715891318-04-15_11-59-45.jpg" alt="" title="" itemprop="image" /> </a> </div>
									<h5 class="product-name">
										<a href="show_products4bd1.html?id=415115945" title="" style="font-size: 16px;">
											3004<br />
										</a> </h5>

									<div class="price-box">
										<span itemprop="price" class="price product-price">
										</span> </div>
								</div>
							</div>


						</div>
						<div class="nextPrev nextPrevnew">
							<div class="prevnew prev">prev</div>
							<div class="nextnew next">next</div>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				$(document).ready(function() {
					var owl = $(".productNew_slide");
					owl.owlCarousel({
						items: 6,
						itemsDesktop: [1200, 4],
						itemsDesktopSmall: [1024, 3],
						itemsTablet: [980, 2],
						itemsMobile: [360, 1],
						autoPlay: false,
					});

					// Custom Navigation Events
					$(".nextnew").click(function() {
						owl.trigger('owl.next');
					})
					$(".prevnew").click(function() {
						owl.trigger('owl.prev');
					})
				});

			</script>
			<!-- /MODULE Block new products -->
		</div>
	</div><!-- .columns-container -->
	<!-- Footer -->
	<div class="container"></div>








		<div class="footer-container">
			<div id="footer">
				<div class="pos-logo-wapper">
					<div class="brand-slider">
						<div class="container">

							<div class="pos-logo-container">

								<div class="container-inner">


								</div>

								<script type="text/javascript">
									$(document).ready(function() {
										var owl = $(".logo-slider");
										owl.owlCarousel({
											items: 5,
											slideSpeed: 1000,
											pagination: false,
											itemsDesktop: [1199, 5],
											itemsDesktopSmall: [911, 4],
											itemsTablet: [767, 3],
											itemsMobile: [360, 2]
										});
										$(".nextlogo").click(function() {
											owl.trigger('owl.next');
										})
										$(".prevlogo").click(function() {
											owl.trigger('owl.prev');
										})
									});

								</script>

							</div>
						</div>
					</div>
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

												<p>Development by <a target="_blank" href="https://www.facebook.com/sameh.hanini">Sameh Hanini</a></p>
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
			function add_to_cart(product_id, quantity, size, color2, offer_id) {

				$.post("ajax/add_to_cart.html", {
						firm_id: '11',
						product_id: product_id,
						quantity: quantity,
						size: size,
						color2: color2,
						offer_id: offer_id
					},
					function(data) {
						$("#add_to_cart_result").html(data);
					});


				setTimeout(function() {
					window.location = window.location;
				}, 3000);

			}

		</script>








		<script type="text/javascript">
			function add_quantity_to_temp_order(item_id) {

				$.post("ajax/add_quantity_to_temp_order.html", {
						item_id: item_id
					},
					function(data) {
						$("#show_temp_order").html(data);
					});

			}

		</script>



		<script type="text/javascript">
			function remove_quantity_to_temp_order(item_id) {

				$.post("ajax/remove_quantity_to_temp_order.html", {
						item_id: item_id
					},
					function(data) {
						$("#show_temp_order").html(data);
					});

			}

		</script>


		<script type="text/javascript">
			function delete_product_from_temp_order(item_id) {

				$.post("ajax/delete_product_from_temp_order.html", {
						item_id: item_id
					},
					function(data) {
						$("#show_temp_order").html(data);
					});

			}

		</script>




		<div class="back-top"><a href="#" class="mypresta_scrollup hidden-phone"></a></div>
</body>

<!-- Mirrored from www.naboly.ps/index by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 16:56:34 GMT -->

</html>
