<!-- :: About -->
<section class="about py-100" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="img-box">
                    <div class="about-img">
                        <img class="img-fluid" src="<?= url("site_assets/assets"); ?>/images/about/01_about.jpg" alt="01 Hakkında">
                    </div>
                    <div class="case-about">
                        <i class="flaticon-law-book"></i>
                        <div class="counter">2.310</div>
                        <h5>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Dava Kazanıldı</font>
                            </font>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-box">
                    <div class="sec-title">
                        <h2>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Hakkımızda</font>
                            </font>
                        </h2>
                        <h3>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">İlişkileri Korumak başarının temelidir.</font>
                            </font>
                        </h3>
                        <p>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Karar Profesyonel Bir Avukat ve Avukatlık Hizmeti Sağlayıcı Kurumlardır. </font>
                                <font style="vertical-align: inherit;">Hukuk Bürosu, Yaralanma Hukuku, Trafik Bileti Avukatı, Miras Ve Daha Fazlası İçin Uygun.</font>
                            </font>
                        </p>
                    </div>
                    <ul class="core-about">
                        <li><i class="fas fa-check"></i>
                            <h4>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Pratik Ticaret Çözümleri</font>
                                </font>
                            </h4>
                        </li>
                        <li><i class="fas fa-check"></i>
                            <h4>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">40 Yıl Hizmet Veren</font>
                                </font>
                            </h4>
                        </li>
                        <li><i class="fas fa-check"></i>
                            <h4>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">En Büyük Hukuk Bürosu</font>
                                </font>
                            </h4>
                        </li>
                        <li><i class="fas fa-check"></i>
                            <h4>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Ve dahası...</font>
                                </font>
                            </h4>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="p-about">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Lorem Ipsum, basım ve dizgi endüstrisinin basitçe sahte metnidir.</font>
                                </font>
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="p-about">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Lorem Ipsum, basım ve dizgi endüstrisinin basitçe sahte metnidir.</font>
                                </font>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a class="btn-1" href="01_about.html">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Hakkımızda</font>
                                </font>
                            </a>
                        </div>
                        <div class="col-sm-6 d-flex align-items-center">
                            <img class="img-fluid sign-about" src="<?= url("site_assets/assets"); ?>/images/sign.png" alt="Hakkında İmzala">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- :: Practice Area -->
<section class="practice-area py-100-70">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="sec-title text-center">
                    <h2>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{$calisma_alanlari->text1}}</font>
                        </font>
                    </h2>
                    <h3>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{$calisma_alanlari->baslik}}</font>
                        </font>
                    </h3>
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{$calisma_alanlari->ozet}}</font>
                        </font>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach($calisma_alanlari_cat as $calisma_alanlari_cat_cek)
            <div class="col-md-6 col-lg-4">
                <div class="practice-area-item">
                    <i class="{{$calisma_alanlari_cat_cek->text1}}"></i>
                    <div class="content">
                        <h4>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$calisma_alanlari_cat_cek->baslik}}</font>
                            </font>
                        </h4>
                        <p>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"><?= $calisma_alanlari_cat_cek->ozet ?></font>
                            </font>
                        </p>
                        <a href="#">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Devamını oku</font>
                            </font>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- :: Advisors -->
<section class="advisors py-100-70">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="sec-title text-center">
                    <h2>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Takım</font>
                        </font>
                    </h2>
                    <h3>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Danışmanlarımız</font>
                        </font>
                    </h3>
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Karar Profesyonel Bir Avukat ve Avukatlık Hizmeti Sağlayıcı Kurumlardır. </font>
                            <font style="vertical-align: inherit;">Hukuk Bürosu, Yaralanma Hukuku, Trafik Bileti Avukatı, Miras Ve Daha Fazlası İçin Uygun.</font>
                        </font>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="advisors-box">
                    <div class="img-box">
                        <img class="img-fluid" src="<?= url("site_assets/assets"); ?>/images/advisors/01_advisors.jpg" alt="01 advisors">
                        <div class="img-box-hover">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-box text-center">
                        <h5>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Enver Ramazan</font>
                            </font>
                        </h5>
                        <span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">hukuk avukatı</font>
                            </font>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="advisors-box">
                    <div class="img-box">
                        <img class="img-fluid" src="<?= url("site_assets/assets"); ?>/images/advisors/02_advisors.jpg" alt="02 advisors">
                        <div class="img-box-hover">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-box text-center">
                        <h5>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Usame Bakri</font>
                            </font>
                        </h5>
                        <span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">iş avukatı</font>
                            </font>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="advisors-box">
                    <div class="img-box">
                        <img class="img-fluid" src="<?= url("site_assets/assets"); ?>/images/advisors/03_advisors.jpg" alt="03 advisors">
                        <div class="img-box-hover">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-box text-center">
                        <h5>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Sana El Shamy</font>
                            </font>
                        </h5>
                        <span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Suç Savunması</font>
                            </font>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- :: Provide -->
<section class="provide">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="text-box">
                    <div class="sec-title">
                        <h2>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Neden Bizi Seçmelisiniz?</font>
                            </font>
                        </h2>
                        <h3>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">40 yıllık işletim deneyimine sahip en iyi avukatlarız</font>
                            </font>
                        </h3>
                        <p>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Karar Profesyonel Bir Avukat ve Avukatlık Hizmeti Sağlayıcı Kurumlardır. </font>
                                <font style="vertical-align: inherit;">Hukuk Bürosu, Yaralanma Hukuku, Trafik Bileti Avukatı, Miras Ve Daha Fazlası İçin Uygun.</font>
                            </font>
                        </p>
                    </div>
                    <div class="content-box">
                        <div class="content-item">
                            <i class="flaticon-books"></i>
                            <div class="box">
                                <h4>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Başarı Vakalarımız</font>
                                    </font>
                                </h4>
                                <p>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Lorem Ipsum, baskı ve dizgi endüstrisinin basit bir sahte metnidir.</font>
                                    </font>
                                </p>
                            </div>
                        </div>
                        <div class="content-item">
                            <i class="flaticon-lawyer"></i>
                            <div class="box">
                                <h4>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Profesyonel Avukatlar</font>
                                    </font>
                                </h4>
                                <p>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Lorem Ipsum, baskı ve dizgi endüstrisinin basit bir sahte metnidir.</font>
                                    </font>
                                </p>
                            </div>
                        </div>
                        <div class="content-item">
                            <i class="flaticon-portfolio"></i>
                            <div class="box">
                                <h4>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Uzun Deneyim</font>
                                    </font>
                                </h4>
                                <p>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Lorem Ipsum, baskı ve dizgi endüstrisinin basit bir sahte metnidir.</font>
                                    </font>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <div class="img-provide"></div>
                    <div class="statistic-owl owl-carousel owl-theme owl-loaded owl-drag">


                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-1680px, 0px, 0px); transition: all 1.5s ease 0s; width: 2880px;">
                                <div class="owl-item cloned" style="width: 240px;">
                                    <div class="statistic-item">
                                        <i class="flaticon-gavel"></i>
                                        <div class="content-box">
                                            <span class="counter">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">8</font>
                                                </font>
                                            </span>
                                            <div class="name-content">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Çözülmüş Vakalar</font>
                                                </font>
                                            </div>
                                        </div>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Lorem Ipsum, baskı ve dizgi endüstrisinin basit bir sahte metnidir</font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 240px;">
                                    <div class="statistic-item">
                                        <i class="flaticon-lawyer"></i>
                                        <div class="content-box">
                                            <span class="counter">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">8</font>
                                                </font>
                                            </span>
                                            <div class="name-content">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Güvenilir Müşteriler</font>
                                                </font>
                                            </div>
                                        </div>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Lorem Ipsum, baskı ve dizgi endüstrisinin basit bir sahte metnidir</font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 240px;">
                                    <div class="statistic-item">
                                        <i class="flaticon-gavel"></i>
                                        <div class="content-box">
                                            <span class="counter">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">8</font>
                                                </font>
                                            </span>
                                            <div class="name-content">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Çözülmüş Vakalar</font>
                                                </font>
                                            </div>
                                        </div>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Lorem Ipsum, baskı ve dizgi endüstrisinin basit bir sahte metnidir</font>
                                            </font>
                                        </p>
                                    </div>
                                </div>


                                <div class="owl-item" style="width: 240px;">
                                    <div class="statistic-item">
                                        <i class="flaticon-lawyer"></i>
                                        <div class="content-box">
                                            <span class="counter">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">8</font>
                                                </font>
                                            </span>
                                            <div class="name-content">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Güvenilir Müşteriler</font>
                                                </font>
                                            </div>
                                        </div>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Lorem Ipsum, baskı ve dizgi endüstrisinin basit bir sahte metnidir</font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 240px;">
                                    <div class="statistic-item">
                                        <i class="flaticon-gavel"></i>
                                        <div class="content-box">
                                            <span class="counter">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">8</font>
                                                </font>
                                            </span>
                                            <div class="name-content">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Çözülmüş Vakalar</font>
                                                </font>
                                            </div>
                                        </div>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Lorem Ipsum, baskı ve dizgi endüstrisinin basit bir sahte metnidir</font>
                                            </font>
                                        </p>
                                    </div>
                                </div>


                                <div class="owl-item cloned" style="width: 240px;">
                                    <div class="statistic-item">
                                        <i class="flaticon-lawyer"></i>
                                        <div class="content-box">
                                            <span class="counter">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">8</font>
                                                </font>
                                            </span>
                                            <div class="name-content">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Güvenilir Müşteriler</font>
                                                </font>
                                            </div>
                                        </div>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Lorem Ipsum, baskı ve dizgi endüstrisinin basit bir sahte metnidir</font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 240px;">
                                    <div class="statistic-item">
                                        <i class="flaticon-gavel"></i>
                                        <div class="content-box">
                                            <span class="counter">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">8</font>
                                                </font>
                                            </span>
                                            <div class="name-content">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Çözülmüş Vakalar</font>
                                                </font>
                                            </div>
                                        </div>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Lorem Ipsum, baskı ve dizgi endüstrisinin basit bir sahte metnidir</font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 240px;">
                                    <div class="statistic-item">
                                        <i class="flaticon-lawyer"></i>
                                        <div class="content-box">
                                            <span class="counter">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">8</font>
                                                </font>
                                            </span>
                                            <div class="name-content">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Güvenilir Müşteriler</font>
                                                </font>
                                            </div>
                                        </div>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Lorem Ipsum, baskı ve dizgi endüstrisinin basit bir sahte metnidir</font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Öncesi">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">‹</font>
                                    </font>
                                </span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Sonraki">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">›</font>
                                    </font>
                                </span></button></div>
                        <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div>
                        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Öncesi">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">‹</font>
                                    </font>
                                </span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Sonraki">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">›</font>
                                    </font>
                                </span></button></div>
                        <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="presentation-box">
        <a href="../../watch.html" class="pulse" data-lity="">
            <i class="fas fa-play"></i>
        </a>
    </div>
</section>

<!-- :: Blog -->
<section class="bolg py-100-70">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="sec-title text-center">
                    <h2>blog</h2>
                    <h3>{{$yazilarimiz->baslik}}</h3>

                </div>
            </div>
        </div>
        <div class="row">
            @foreach($yazilarimiz_cat as $yazilarimiz_cat_cek)
            <div class="col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="img-box">
                        <a href="02_blog.html" class="open-post">
                            <img class="img-fluid" src="<?= url("site_assets/assets"); ?>/images/blog/01_blog.jpg" alt="01 Blog">
                        </a>
                        <ul>
                            <li><a href="#">BLOG</a></li>
                        </ul>
                    </div>
                    <div class="text-box">
                        <span class="blog-date">{{$yazilarimiz_cat_cek->created_at}}</span>
                        <a href="02_blog.html" class="title-blog">
                            <h5>{{$yazilarimiz_cat_cek->baslik}}</h5>
                        </a>
                        <p>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    <div>

                                    </div>
                                </font>
                            </font>
                        </p>
                        <a href="02_blog.html" class="link">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Devamını oku</font>
                            </font>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>