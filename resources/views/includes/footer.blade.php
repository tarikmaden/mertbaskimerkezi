
<footer class="footer">
	<div class="thm-container">
		<div class="row">
			<div class="col-md-4">
				<div class="footer-widget about-widget">
					<div class="title">
						<h3>Mert Baskı Merkezi</h3>
					</div><!-- /.title -->
					<p>{!! $iletisim->ar_id !!}</p>

                    <form action="#" class="footer-subscribe">
                        <input type="text" name="email" placeholder="E-Posta">
                        <button type="submit"><i class="fa fa-angle-right"></i></button>
                    </form><!-- /.footer-subscribe -->
				</div><!-- /.footer-widget about-widget -->
			</div><!-- /.col-md-4 -->
			<div class="col-md-2">
				<div class="footer-widget links-widget explore">
					<div class="title">
						<h3>Menu</h3>
					</div><!-- /.title -->
					<ul class="link-list">
                        @foreach ($menu as $item)
                        <li>
                            <a href="<?=url("");?>/{{ $item->slug }}">{{ $item->baslik }}</a>
                        </li>
                        @endforeach
					</ul><!-- /.link-list -->
				</div><!-- /.footer-widget links-widget explore -->
			</div><!-- /.col-md-2 -->
			<div class="col-md-3">
				<div class="footer-widget post-widget services">
					<div class="title">
						<h3>Blog</h3>
					</div><!-- /.title -->
					<div class="post-widget">

                        <div class="single-post-widget">
                            <a href="#" class="date"></a>
                            <h3 class="post-title">
                                <a href="blog-details.html">

                                </a>
                            </h3>
                        </div>

                    </div><!-- /.post-widget -->
				</div><!-- /.footer-widget links-widget explore -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3">
				<div class="footer-widget contact-widget">
					<div class="title">
						<h3>İletişim</h3>
					</div><!-- /.title -->
					<p>{{ $iletisim->tel1 }}</p>
					<p>{{ $iletisim->tel2 }}</p>
					<p>{{ $iletisim->mail }}</p>
					<p>{{ $iletisim->adres }}</p>
				</div><!-- /.footer-widget links-widget explore -->
			</div><!-- /.col-md-3 -->
		</div><!-- /.row -->
	</div><!-- /.thm-contianer -->
</footer><!-- /.footer -->
<div class="footer-bottom">
	<div class="thm-container clearfix">
		<div class="pull-left copy-text">
			<p>&copy; Copyright <?php echo date("Y");?> Mert Baskı Merkezi Tasarlayan <a href="www.madensoft.com">MadenSoft Yazılım</a></p>
		</div><!-- /.pull-left copy-text -->
		<div class="social-box pull-right">
            <a href="#" class="fab fa-twitter hvr-pulse"></a><!--
             --><a href="#" class="fab fa-pinterest hvr-pulse"></a><!--
             --><a href="#" class="fab fa-facebook-f hvr-pulse"></a><!--
             --><a href="#" class="fab fa-youtube hvr-pulse"></a>
        </div><!-- /.social-box -->
	</div><!-- /.thm-container -->
</div><!-- /.footer-bottom -->

<div class="scroll-to-top scroll-to-target" data-target="html"><i class="fas fa-angle-up"></i></div>

<script src="<?=url("site_assets/assets/js");?>/jquery.js"></script>

<script src="<?=url("site_assets/assets/js");?>/bootstrap.min.js"></script>
<script src="<?=url("site_assets/assets/js");?>/bootstrap-select.min.js"></script>
<script src="<?=url("site_assets/assets/js");?>/jquery.validate.min.js"></script>
<script src="<?=url("site_assets/assets/js");?>/owl.carousel.min.js"></script>
<script src="<?=url("site_assets/assets/js");?>/isotope.js"></script>
<script src="<?=url("site_assets/assets/js");?>/jquery.magnific-popup.min.js"></script>
<script src="<?=url("site_assets/assets/js");?>/waypoints.min.js"></script>
<script src="<?=url("site_assets/assets/js");?>/jquery.counterup.min.js"></script>
<script src="<?=url("site_assets/assets/js");?>/wow.min.js"></script>
<script src="<?=url("site_assets/assets/js");?>/jquery.easing.min.js"></script>
<script src="<?=url("site_assets/assets/js");?>/custom.js"></script>

</body>
</html>
