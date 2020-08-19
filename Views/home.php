
<?php

	include_once('Template/body_public.php'); 
	include_once('Template/header_public.php');

?>
	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(<?= Assets(); ?>images/slide-01.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Women Collection 2018
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									NEW SEASON
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(<?= Assets(); ?>images/slide-02.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Men New-Season
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									Jackets & Coats
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(<?= Assets(); ?>images/slide-03.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Men Collection 2018
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									New arrivals
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Banner hombre y mujer -->
	<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="row">
			<?php foreach ($data['categories'] as $categories):?>
				<div class="col-md-6 p-b-30 m-lr-auto">
					<div class="block1 wrap-pic-w">
						<img src="<?= Assets().$categories['image']; ?>">
						<a class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8 text-uppercase">
									<?= $categories['name']?>
								</span>

								<span class="block1-info stext-102 trans-04 text-capitalize">
								<?= $categories['description']?>
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Coleccion 2020
								</div>
							</div>
						</a>
					</div>
				</div>
			<?php endforeach; ?>

			<?php foreach ($data['categoriesSecu'] as $caregoriesSecu):?>
				<div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="<?= Assets();?>images/banner-03.jpg" alt="IMG-BANNER">

						<a class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8 text-uppercase">
									<?= $caregoriesSecu['name'];?>
								</span>

								<span class="block1-info stext-102 trans-04 text-capitalize">
								<?= $caregoriesSecu['description'];?>
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Coleccion 2020
								</div>
							</div>
						</a>
					</div>
				</div>
			<?php endforeach;?>
			</div>
		</div>
	</div>

	<!-- Tienda -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Tienda
				</h3>
			</div>

			<!-- Filtrado de catalogo -->
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Productos
					</button>

					<?php foreach ($data['allcategories'] as $allcategories):?>
						<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 text-capitalize" data-filter=".<?= $allcategories['name']?>">
							<?= $allcategories['name']?>
						</button>
					<?php endforeach;?>
		
				</div>
			</div>

			<!-- Lista de catalogo -->
			<div class="row isotope-grid">
				<?php foreach ($data['products'] as $products):?>
					<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?= $products['categorie']; ?>">
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="<?= Assets(); ?><?=$products['image'];?>" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Ver Fotos
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="#" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6 text-capitalize">
									<?= $products['name']?>
								</a>

								<span class="stext-105 cl3">
									<?= MONEDA.formatMoney($products['price'])." ".PAIS?>
								</span>
							</div>
						</div>
					
					</div>
				</div>
				<?php endforeach;?>
			</div>
		</div>
	</section>

<?php include_once('Template/footer_public.php'); ?>