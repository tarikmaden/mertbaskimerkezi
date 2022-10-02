<!-- :: Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="logo">
                    <img class="img-fluid" src="<?= url("site_assets/assets"); ?>/images/logo/03_logo.png" alt="Footer Logo">
                    <p><?= $iletisim->ar_id; ?></p>
                    <ul>
                        <li><a target="_blank" href="{{$iletisim->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a target="_blank" href="{{$iletisim->twitter}}"><i class="fab fa-twitter"></i></a></li>
                        <li><a target="_blank" href="{{$iletisim->instagram}}"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-2">
                <div class="footer-title">
                    <h4>Hızlı Menu</h4>
                </div>
                <ul class="links">
                    @foreach($menu as $menu_cek)
                    @if($menu_cek->ust_id == null)
                    <li>
                        <a href="{{$menu_cek->slug}}">{{$menu_cek->baslik}}</a>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-2">
                <div class="footer-title">
                    <h4>Product</h4>
                </div>
                <ul class="links">
                    @foreach($son_blog_cek as $key)
                    <li>
                        <a href="{{$key->slug}}">{{$key->baslik}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="newsletter">
                    <h5>E-Bülten</h5>
                    </p>
                    <form>
                        <input type="email" name="email" placeholder="Email Adres">
                        <a href="#"><i class="fas fa-arrow-right"></i></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container d-flex justify-content-center">
            <p>@ <?=date("Y");?> Ahvalhukuk</a></p>
        </div>
    </div>
</footer>

<!-- :: Button Dark Mode -->
<div class="dark-mode-decision">
    <i class="fas fa-moon"></i>
</div>

<!-- :: Scroll UP -->
<div class="scroll-up">
    <a href="#page" class="move-section">
        <i class="fas fa-long-arrow-alt-up"></i>
    </a>
</div>

<!-- :: jQuery JS -->
<script src="<?= url("site_assets/assets"); ?>/js/jquery-3.6.0.min.js"></script>

<!-- :: Popper JS -->
<script src="<?= url("site_assets/assets"); ?>/js/popper.min.js"></script>

<!-- :: BootStrap JS -->
<script src="<?= url("site_assets/assets"); ?>/js/bootstrap.min.js"></script>

<!-- :: OWL Carousel -->
<script src="<?= url("site_assets/assets"); ?>/js/owl.carousel.min.js"></script>

<!-- :: Nice Select -->
<script src="<?= url("site_assets/assets"); ?>/js/jquery.nice-select.min.js"></script>

<!-- :: Waypoints -->
<script src="<?= url("site_assets/assets"); ?>/js/jquery.waypoints.min.js"></script>

<!-- :: CounterUp -->
<script src="<?= url("site_assets/assets"); ?>/js/jquery.counterup.min.js"></script>

<!-- :: Lity -->
<script src="<?= url("site_assets/assets"); ?>/js/lity.min.js"></script>

<!-- :: Main JS -->
<script src="<?= url("site_assets/assets"); ?>/js/main.js"></script>
<script src="<?= url("site_assets/assets"); ?>/js/ajax-script.js"></script>
</body>

</html>