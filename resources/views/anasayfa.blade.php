<div id="minimal-bootstrap-carousel" class="carousel slide carousel-fade slider-home-one" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

        @php
            $i=1;
        @endphp
        @foreach ($slider as $itemSlides)
        <div class="item @if ($i==1)
        active
        @endif slide-{{$itemSlides->id}}" style="background-image: url(<?=url("uploads");?>/{{$itemSlides->gosterim_resmi}});background-position: left top;">

            <div class="carousel-caption">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content ">
                            <h3 data-animation="animated fadeInUp">{{ $itemSlides->baslik }}</h3>
                            <h2 data-animation="animated fadeInDown">{{ $itemSlides->text1 }} <br>{{ $itemSlides->text2 }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
            $i++;
        @endphp
        @endforeach
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right"></i>
        <span class="sr-only">Next</span>
    </a>

    <ul class="carousel-indicators list-inline custom-navigation">
        <li data-target="#minimal-bootstrap-carousel" data-slide-to="0" class="active"></li><!--
        --><li data-target="#minimal-bootstrap-carousel" data-slide-to="1"></li>
    </ul>
</div>

<section class="welcome-section sec-pad">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-6">
                <div class="welcome-img-box">
                    <img src="<?=url("site_assets/assets/img");?>/welcome-1-1.png" alt="Awesome Image">
                </div><!-- /.welcome-img-box -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="welcome-content">
                    <div class="title">
                        <p>Mert Baskı Merkezi</p>
                        <h3>Dream it. Print it.</h3>
                    </div><!-- /.title -->
                    <p>When we say we’re not happy until you’re happy, we really do mean it. So whether it’s a typo or an image that didn’t print quite the way you hoped, we’ll do everything we can to <br> fix it.</p>
                    <p>We love great design and believe it can work wonders for every business. That’s why we make it simple to create beautiful, expertly crafted business stationery.</p>
                    <a href="about.html" class="thm-btn yellow-bg">Learn More</a>
                </div><!-- /.welcome-content -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.welcome-section -->

<section class="what-we-do sec-pad">
    <div class="thm-container">
        <div class="sec-title text-center">
            <span>Our features</span>
            <h3>What We Do</h3>
            <p>There are many variations of passages of lorem Ipsum available, but <br> the majority have suffered alteration in some form.</p>
        </div><!-- /.sec-title -->
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="single-what-we-do">
                    <div class="img-box">
                        <img src="<?=url("site_assets/assets/img");?>/what-we-do-1-1.jpg" alt="">
                    </div><!-- /.img-box -->
                    <div class="text-box hvr-bounce-to-bottom">
                        <a href="service-details.html"><h3>3D Baskı</h3></a>
                        <p>There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.</p>
                        <a href="service-details.html" class="read-more fas fa-angle-right"></a>
                    </div><!-- /.text-box -->
                </div><!-- /.single-what-we-do -->
            </div><!-- /.col-md-6 -->
            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="single-what-we-do-one hvr-bounce-to-bottom">
                            <i class="printify-icon-paper-drill"></i>
                            <a href="service-details.html"><h3>Dijital Baskı</h3></a>
                            <p>There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.</p>
                            <a href="service-details.html" class="read-more fas fa-angle-right"></a>
                        </div><!-- /.single-what-we-do-one -->
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6">
                        <div class="single-what-we-do-one hvr-bounce-to-bottom">
                            <i class="printify-icon-printing-text"></i>
                            <a href="service-details.html"><h3>Ofset Baskı</h3></a>
                            <p>There are many people variation of passages of lorem Ipsum available in the majority have suffer alteration in some.</p>
                            <a href="service-details.html" class="read-more fas fa-angle-right"></a>
                        </div><!-- /.single-what-we-do-one -->
                    </div><!-- /.col-sm-6 -->
                </div><!-- /.row -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.what-we-do -->

<section class="testi-carousel-wrapper">
	<div class="overlay"></div><!-- /.overlay -->
    <div class="thm-container">
	    <div class="testi-carousel owl-carousel owl-theme">
	        <div class="item single-testimonials">
                <div class="img-box">
                    <img src="<?=url("site_assets/assets/img");?>/testi-1-1.jpg" alt="Awesome Image">
                </div><!-- /.img-box -->
                <div class="text-box">
                    <h3>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.</h3>
                    <p>Christine Eve</p>
                </div><!-- /.text-box -->
	        </div>
	        <div class="item single-testimonials">
                <div class="img-box">
                    <img src="<?=url("site_assets/assets/img");?>/testi-1-2.jpg" alt="Awesome Image">
                </div><!-- /.img-box -->
                <div class="text-box">
                    <h3>I never leave the house without my business cards. They accompany me to meetings, interviews and all social events, I am very happy with printify.</h3>
                    <p>Jessica Brown</p>
                </div><!-- /.text-box -->
	        </div>
	    </div>
    </div><!-- /.thm-container -->
</section><!-- /.testi-carousel-wrapper -->

<section class="faq-section">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-5">
                <div class="we-believe-carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="single-we-believe text-center">
                            <div class="img-box">
                                <img src="<?=url("site_assets/assets/img");?>/we-belive-in-1-1.jpg" alt="Awesome Image">
                            </div><!-- /.img-box -->
                            <div class="text-box">
                                <h3>We believe in the <br> power of great <br> design</h3>
                                <p>Design helps us stand out: from the clothes we wear, to the homes we live in, to the business cards we use. Design tells a story about <br> us and what we stand for.</p>
                                <a href="services.html" class="thm-btn yellow-bg">Learn More</a>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-we-believe -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="single-we-believe text-center">
                            <div class="img-box">
                                <img src="<?=url("site_assets/assets/img");?>/we-belive-in-1-2.jpg" alt="Awesome Image">
                            </div><!-- /.img-box -->
                            <div class="text-box">
                                <h3>We believe in the <br> power of great <br> design</h3>
                                <p>Design helps us stand out: from the clothes we wear, to the homes we live in, to the business cards we use. Design tells a story about <br> us and what we stand for.</p>
                                <a href="services.html" class="thm-btn yellow-bg">Learn More</a>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-we-believe -->
                    </div><!-- /.item -->
                </div><!-- /.we-believe-carousel -->
            </div><!-- /.col-md-5 -->
            <div class="col-md-7">
                <div class="faq-content">
                    <div class="title">
                        <span>Question and answers</span>
                        <h2>Frequently <br>Asked Questions</h2>
                    </div><!-- /.title -->
                    <div class="accrodion-grp" data-grp-name="faq-accrodion">
                        <div class="accrodion active">
                            <div class="accrodion-title">
                                <h4>Want to make plan for retairment?</h4>
                            </div>
                            <div class="accrodion-content">
                                <p>Color Business Cards start at $19.99 for 50 cards.</p>
                                <p>The final cost depends on which turnaround time and paper/finish options you've selected at checkout - you can get an accurate quote in seconds using our online cost calculator.</p>
                            </div>
                        </div>
                        <div class="accrodion ">
                            <div class="accrodion-title">
                                <h4>How I can get good plan for future for my children education?</h4>
                            </div>
                            <div class="accrodion-content">
                                <p>Color Business Cards start at $19.99 for 50 cards.</p>
                                <p>The final cost depends on which turnaround time and paper/finish options you've selected at checkout - you can get an accurate quote in seconds using our online cost calculator.</p>
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>I can get online appointmet with agent?</h4>
                            </div>
                            <div class="accrodion-content">
                                <p>Color Business Cards start at $19.99 for 50 cards.</p>
                                <p>The final cost depends on which turnaround time and paper/finish options you've selected at checkout - you can get an accurate quote in seconds using our online cost calculator.</p>
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Need a good insurace for term plan?</h4>
                            </div>
                            <div class="accrodion-content">
                                <p>Color Business Cards start at $19.99 for 50 cards.</p>
                                <p>The final cost depends on which turnaround time and paper/finish options you've selected at checkout - you can get an accurate quote in seconds using our online cost calculator.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.faq-content -->
            </div><!-- /.col-md-7 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.faq-section -->


<section class="call-to-action-one">
	<div class="overlay"></div><!-- /.overlay -->
	<div class="inner-wrapper">
		<div class="thm-container">
			<div class="row">
				<div class="col-md-6">
					<div class="call-to-action-content">
						<div class="title">
							<span>Business stationery printing</span>
							<h2>Even More Good <br> Stuff</h2>
						</div><!-- /.title -->
						<ul class="list-box">
							<li><i class="fas fa-check-circle"></i>Professional designs with added fizz</li>
							<li><i class="fas fa-check-circle"></i>Create an army of business stationery</li>
							<li><i class="fas fa-check-circle"></i>Take your attention to detail up a level</li>
							<li><i class="fas fa-check-circle"></i>Totally safe for laser printers</li>
						</ul><!-- /.list-box -->
						<a href="about.html" class="thm-btn yellow-bg">Learn More</a>
					</div><!-- /.call-to-action-content -->
				</div><!-- /.col-md-6 -->
			</div><!-- /.row -->
		</div><!-- /.thm-container -->
	</div><!-- /.inner -->
</section><!-- /.call-to-action -->

<section class="team-section sec-pad">
	<div class="thm-container">
		<div class="sec-title text-center">
            <span>The leadership</span>
            <h3>Meet the Team</h3>
            <p>There are many variations of passages of lorem Ipsum available, but <br> the majority have suffered alteration in some form.</p>
        </div><!-- /.sec-title -->
        <div class="team-carousel owl-carousel owl-theme">
        	<div class="item">
        		<div class="single-team-carousel">
        			<div class="inner">
						<div class="img-box">
							<img src="<?=url("site_assets/assets/img");?>/team-1-1.png" alt="Awesome Image">
						</div><!-- /.img-box -->
						<div class="team-content">
							<div class="title">
								<span>Chief marketing officer</span>
								<h3>Brendan Milliren</h3>
							</div><!-- /.title -->
							<p>Jessica leads our customer team and holds guardianship of our brand.</p>
							<p>An award-winning marketer, Jesscia launched our Boston office, taking a huge step forward in making PRINTIFY a global brand. She’s responsible for our brand strategy and making sure we stay close to our customers. Jessica’s two big passions are the ocean and music. She has a formidable record library – with her purple vinyl of Purple Rain the jewel in her collection.</p>
						</div><!-- /.team-content -->
        			</div><!-- /.inner -->
        		</div><!-- /.single-team-carousel -->
        	</div><!-- /.item -->
        	<div class="item">
        		<div class="single-team-carousel">
        			<div class="inner">
						<div class="img-box">
							<img src="<?=url("site_assets/assets/img");?>/team-1-2.png" alt="Awesome Image">
						</div><!-- /.img-box -->
						<div class="team-content">
							<div class="title">
								<span>Chief marketing officer</span>
								<h3>Mei Langhans</h3>
							</div><!-- /.title -->
							<p>Jessica leads our customer team and holds guardianship of our brand.</p>
							<p>An award-winning marketer, Jesscia launched our Boston office, taking a huge step forward in making PRINTIFY a global brand. She’s responsible for our brand strategy and making sure we stay close to our customers. Jessica’s two big passions are the ocean and music. She has a formidable record library – with her purple vinyl of Purple Rain the jewel in her collection.</p>
						</div><!-- /.team-content -->
        			</div><!-- /.inner -->
        		</div><!-- /.single-team-carousel -->
        	</div><!-- /.item -->
        	<div class="item">
        		<div class="single-team-carousel">
        			<div class="inner">
						<div class="img-box">
							<img src="<?=url("site_assets/assets/img");?>/team-1-3.png" alt="Awesome Image">
						</div><!-- /.img-box -->
						<div class="team-content">
							<div class="title">
								<span>Chief marketing officer</span>
								<h3>Tawana Ledsinger</h3>
							</div><!-- /.title -->
							<p>Jessica leads our customer team and holds guardianship of our brand.</p>
							<p>An award-winning marketer, Jesscia launched our Boston office, taking a huge step forward in making PRINTIFY a global brand. She’s responsible for our brand strategy and making sure we stay close to our customers. Jessica’s two big passions are the ocean and music. She has a formidable record library – with her purple vinyl of Purple Rain the jewel in her collection.</p>
						</div><!-- /.team-content -->
        			</div><!-- /.inner -->
        		</div><!-- /.single-team-carousel -->
        	</div><!-- /.item -->
        </div><!-- /.team-carousel -->
	</div><!-- /.thm-container -->
</section><!-- /.team-section -->

<section class="service-style-one sec-pad">
	<img src="<?=url("site_assets/assets/img");?>/service-bg-1-1.jpg" class="background-right" alt="Awesome Image">
	<div class="thm-container">
		<div class="row">
			<div class="col-md-6">
				<div class="service-content">
					<div class="title">
						<span>Checkout our services</span>
						<h2>Explore Printing <br>Services</h2>
					</div><!-- /.title -->
					<p>We’re an online print and design company that is passionate about great design and the difference it can make to our customers and the world.</p>
					<p>We want to set a new standard for print, with remarkable new products that bring great design and uncompromising, high standards to the web. </p>
					<div class="btn-box">
						<a href="pricing.html" class="thm-btn yellow-bg">Learn More</a><!--
						--><div class="phone-btn"><i class="fas fa-phone"></i>000 8888 999</div><!-- /.phone-btn -->
					</div><!-- /.btn-box -->
				</div><!-- /.service-content -->
			</div><!-- /.col-md-6 -->
			<div class="col-md-6">
				<div class="service-right-content">
					<div class="inner">
						<div class="divider hor"></div><!-- /.divider -->
						<div class="divider ver"></div><!-- /.divider -->
						<div class="row">
							<div class="col-sm-6">
								<div class="single-service-one hvr-bounce-to-bottom">
									<i class="printify-icon-t-shirt-with-square"></i>
									<a href="service-details.html"><h3>T-Shirt <br> Printing</h3></a>
								</div><!-- /.single-service-one -->
							</div><!-- /.col-sm-6 -->
							<div class="col-sm-6">
								<div class="single-service-one hvr-bounce-to-bottom">
									<i class="printify-icon-brochure-folded"></i>
									<a href="service-details.html"><h3>Flyer <br> Printing</h3></a>
								</div><!-- /.single-service-one -->
							</div><!-- /.col-sm-6 -->
							<div class="col-sm-6">
								<div class="single-service-one hvr-bounce-to-bottom">
									<i class="printify-icon-continuous-feed-paper"></i>
									<a href="service-details.html"><h3>Poster <br> Printing</h3></a>
								</div><!-- /.single-service-one -->
							</div><!-- /.col-sm-6 -->
							<div class="col-sm-6">
								<div class="single-service-one hvr-bounce-to-bottom">
									<i class="printify-icon-circular-sticker"></i>
									<a href="service-details.html"><h3>Sticker <br> Printing</h3></a>
								</div><!-- /.single-service-one -->
							</div><!-- /.col-sm-6 -->
						</div><!-- /.row -->
					</div><!-- /.inner -->
				</div><!-- /.service-right-content -->
			</div><!-- /.col-md-6 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.service-style-one -->

<section class="video-box-design-guide sec-pad">
	<div class="thm-container">
		<div class="row">
			<div class="col-md-6">
				<div class="video-box">
					<img src="<?=url("site_assets/assets/img");?>/video-box-1-1.jpg" alt="Awesome Image">
					<div class="content">
						<h3>Printfinity Makes <br> Every Card <br> Unique</h3>

					</div><!-- /.content -->
                    <a href="../watch.html?v=mcL6ZErM49Q" class="video-btn video-popup"><i class="fas fa-play"></i></a>
				</div><!-- /.video-box -->
			</div><!-- /.col-md-6 -->
			<div class="col-md-6">
				<div class="design-guideline">
					<div class="row">
						<div class="col-sm-7">
							<div class="guide-content">
								<h3>Download a Design <br> Guideline</h3>
								<ul class="list-box">
									<li><span>Bleed:</span> 2.91” x 1.26”</li>
									<li><span>Trim:</span> 2.75” x 1.10”</li>
									<li><span>Safe:</span> 2.6” x 0.94”</li>
								</ul><!-- /.list-box -->
							</div><!-- /.guide-content -->
						</div><!-- /.col-sm-6 -->
						<div class="col-sm-5">
							<div class="row version-row">
								<div class="col-xs-6">
									<div class="single-version">
										<div class="version">
											<span>psd</span>
											<i class="fas fa-angle-double-down"></i>
										</div><!-- /.version -->
										<h4>Photoshop</h4>
									</div><!-- /.single-version -->
								</div><!-- /.col-xs-6 -->
								<div class="col-xs-6">
									<div class="single-version">
										<div class="version ai">
											<span>ai</span>
											<i class="fas fa-angle-double-down"></i>
										</div><!-- /.version -->
										<h4>Illustrator</h4>
									</div><!-- /.single-version -->
								</div><!-- /.col-xs-6 -->
								<div class="col-xs-6">
									<div class="single-version">
										<div class="version indesign">
											<span>indd</span>
											<i class="fas fa-angle-double-down"></i>
										</div><!-- /.version -->
										<h4>InDesign</h4>
									</div><!-- /.single-version -->
								</div><!-- /.col-xs-6 -->
								<div class="col-xs-6">
									<div class="single-version">
										<div class="version jpg">
											<span>jpg</span>
											<i class="fas fa-angle-double-down"></i>
										</div><!-- /.version -->
										<h4>Jpeg</h4>
									</div><!-- /.single-version -->
								</div><!-- /.col-xs-6 -->
							</div><!-- /.row -->
						</div><!-- /.col-sm-6 -->
					</div><!-- /.row -->
				</div><!-- /.design-guideline -->
				<div class="guide-line-img-box">
					<img src="<?=url("site_assets/assets/img");?>/download-guide-line-1-1.jpg" alt="Awesome Image">
				</div><!-- /.img-box -->
			</div><!-- /.col-md-6 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.video-box-design-guide -->

<section class="cta-style-two">
    <div class="image-block">
        <img src="<?=url("site_assets/assets/img");?>/free-sample-1-2.jpg" alt="Awesome Image">
        <div class="content-block">
            <h3>Professional designs <br> with added fizz</h3>
        </div><!-- /.content-block -->
    </div><!-- /.image-block -->
	<div class="thm-container">
		<div class="row">
            <div class="col-md-6"></div><!-- /.col-md-6 -->
			<div class="col-md-6">
				<div class="cta-style-two-content">
					<div class="title">
						<span>Order a free sample</span>
						<h2>Get a Feel For <br> Colors</h2>
					</div><!-- /.title -->
					<p>Order a sample so you can touch and feel our premium range of papers and finishes for yourself. It’s free! Print full color on both sides of your business cards.</p>
					<a href="#" class="thm-btn yellow-bg">Get Sample</a>
				</div><!-- /.cta-style-two-content -->
			</div><!-- /.col-md-6 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.cta-style-two -->

<section class="recent-projects sec-pad">
	<div class="thm-container">
		<div class="sec-title text-center">
            <span>Work showcase</span>
            <h3>Recent Projects</h3>
            <p>There are many variations of passages of lorem Ipsum available, but <br> the majority have suffered alteration in some form.</p>
        </div><!-- /.sec-title -->
        <div class="row">
        	<div class="col-md-4 col-sm-6 col-xs-12">
        		<div class="single-recent-project">
        			<div class="img-box">
        				<img src="<?=url("site_assets/assets/img");?>/project-1-1.jpg" alt="Awesome Image">
        			</div><!-- /.img-box -->
        			<div class="text-box">
        				<a href="project-details.html" class="more"><i class="fas fa-plus"></i></a>
        				<div class="inner hvr-bounce-to-bottom">
        					<span>Printing</span>
        					<a href="project-details.html"><h3>Thick Paper Book</h3></a>
        				</div><!-- /.inner -->
        			</div><!-- /.text-box -->
        		</div><!-- /.single-recent-project -->
        	</div><!-- /.col-md-4 -->
        	<div class="col-md-4 col-sm-6 col-xs-12">
        		<div class="single-recent-project">
        			<div class="img-box">
        				<img src="<?=url("site_assets/assets/img");?>/project-1-2.jpg" alt="Awesome Image">
        			</div><!-- /.img-box -->
        			<div class="text-box">
        				<a href="project-details.html" class="more"><i class="fas fa-plus"></i></a>
        				<div class="inner hvr-bounce-to-bottom">
        					<span>Copying</span>
        					<a href="project-details.html"><h3>Ninety Nine You</h3></a>
        				</div><!-- /.inner -->
        			</div><!-- /.text-box -->
        		</div><!-- /.single-recent-project -->
        	</div><!-- /.col-md-4 -->
        	<div class="col-md-4 col-sm-6 col-xs-12">
        		<div class="single-recent-project">
        			<div class="img-box">
        				<img src="<?=url("site_assets/assets/img");?>/project-1-3.jpg" alt="Awesome Image">
        			</div><!-- /.img-box -->
        			<div class="text-box">
        				<a href="project-details.html" class="more"><i class="fas fa-plus"></i></a>
        				<div class="inner hvr-bounce-to-bottom">
        					<span>Printing</span>
        					<a href="project-details.html"><h3>Colorful Photo Print</h3></a>
        				</div><!-- /.inner -->
        			</div><!-- /.text-box -->
        		</div><!-- /.single-recent-project -->
        	</div><!-- /.col-md-4 -->
        </div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.recent-projects -->

<div class="brand-carousel-wrapper">
	<div class="thm-container">
		<div class="brand-carousel owl-theme owl-carousel">
			<div class="item">
				<img src="<?=url("site_assets/assets/img");?>/brand-1-1.png" alt="Awesome Image">
			</div><!-- /.item -->
			<div class="item">
				<img src="<?=url("site_assets/assets/img");?>/brand-1-2.png" alt="Awesome Image">
			</div><!-- /.item -->
			<div class="item">
				<img src="<?=url("site_assets/assets/img");?>/brand-1-3.png" alt="Awesome Image">
			</div><!-- /.item -->
			<div class="item">
				<img src="<?=url("site_assets/assets/img");?>/brand-1-4.png" alt="Awesome Image">
			</div><!-- /.item -->
			<div class="item">
				<img src="<?=url("site_assets/assets/img");?>/brand-1-5.png" alt="Awesome Image">
			</div><!-- /.item -->
			<div class="item">
				<img src="<?=url("site_assets/assets/img");?>/brand-1-6.png" alt="Awesome Image">
			</div><!-- /.item -->
		</div><!-- /.brand-carousel -->
	</div><!-- /.thm-container -->
</div><!-- /.brand-carousel-wrapper -->
