<!-- Start of service page section
	============================================= -->
	<!-- <section id="service_page" class="service_page_section ">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="service_page_content relative-position">
						<div class="service_page_text">
							<div class="section_title_area headline pera-content">
								<p>
									<span class="title_shape_left"></span>
									20+ years of experience
								</p>
								<h2>
									Get Coverage Built
									To Protect You &
									Your Family.
								</h2>
							</div>
							<div class="servicepage_btn ul-li">
								<ul>
									<li><a class="block-display" href="!#">contact us</a></li>
									<li><a class="block-display" href="!#">Services <i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="service_pageimg">
							<img src="<?=url("assets");?>/img/service/srs.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
<!-- End of service page section
	============================================= -->

<!-- Start of service page section
	============================================= -->
	<section id="practice_service" class="service_style_two practice_service_section relative-position">
		<div class="container">
			<div class="section_title_area text-center headline pera-content">
				<p>
					<span class="title_shape_left"></span>
					Ahval Hukuk
					<span class="title_shape_right"></span>
				</p>
				<h2>
					<?=$seo->baslik;?>
				</h2>
			</div>
			<div class="service_content">
				<div class="row">
				<?php foreach ($calisma_alanlarimiz as $key) {?>
					<div class="col-lg-4 col-md-6">
						<div class="service_icon_text text-center">
							<div class="service_icon relative-position">
								<i class="flaticon-mace"></i>
							</div>
							<div class="service_text headline pera-content">
								<h3><a href="#"><?=$key->baslik;?></a></h3>
								<p><?=$key->baslik;?></p>
							</div>
							<div class="how_work_btn">
								<a href="!#"><i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
				<?php }?>
				</div>
			</div>
		</div>
	</section>
<!-- Start of service page section
	============================================= -->

<!-- Start of partner section
	============================================= -->
	<!-- <div class="client_area service_page_client">
		<div class="client_list ul-li clearfix">
			<ul>
				<li><img src="<?=url("assets");?>/img/client/c1.png" alt=""></li>
				<li><img src="<?=url("assets");?>/img/client/c2.png" alt=""></li>
				<li><img src="<?=url("assets");?>/img/client/c3.png" alt=""></li>
				<li><img src="<?=url("assets");?>/img/client/c4.png" alt=""></li>
				<li><img src="<?=url("assets");?>/img/client/c5.png" alt=""></li>
			</ul>
		</div>
	</div> -->
<!-- End  of partner section
	============================================= -->
