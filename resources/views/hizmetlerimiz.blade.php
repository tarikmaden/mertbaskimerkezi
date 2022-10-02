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