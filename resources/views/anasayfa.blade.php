<style>
    @media (max-width:767px) {
        div#cell {
            height: 100vh !important;
        }
    }
</style>
<!-- :: Header -->
<header class="header" id="page">
    <div class="header-owl owl-carousel owl-theme">
        @foreach($slider as $sld)
        <div class="sec-hero display-table" style="background-image: url(<?= url("uploads"); ?>/{{$sld->gosterim_resmi}})">
            <div id="cell" class="table-cell">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner" style="opacity: 1;">
                                <div class="headline-top animated fadeInUp" style="opacity: 1;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">{{$sld->text1}}</font>
                                    </font>
                                </div>
                                <h1 class="handline animated fadeInUp" style="opacity: 1;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">{{$sld->baslik}}</font>
                                    </font>
                                </h1>
                                <p class="about-website animated fadeInDown" style="opacity: 1;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">{{$sld->text2}}</font>
                                    </font>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</header>

<!-- :: Features -->
<section class="features">
    <div class="container">
        <div class="features-box">
            <?php $i = 1; ?>
            @foreach($uclu_alan as $uclu_alam_cek)
            @if($i==1)
            <div class="features-item">
                <i class="flaticon-detective"></i>
                <div class="item-text">
                    <span>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{$uclu_alam_cek->text1}}</font>
                        </font>
                    </span>
                    <h4>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{$uclu_alam_cek->baslik}}</font>
                        </font>
                    </h4>
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"><?= $uclu_alam_cek->ozet; ?></font>
                        </font>
                    </p>
                </div>
            </div>
            @endif
            @if($i==2)
            <div class="features-item">
                <i class="flaticon-oath"></i>
                <div class="item-text">
                    <span>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{$uclu_alam_cek->text1}}</font>
                        </font>
                    </span>
                    <h4>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{$uclu_alam_cek->baslik}}</font>
                        </font>
                    </h4>
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"><?= $uclu_alam_cek->ozet; ?></font>
                        </font>
                    </p>
                </div>
            </div>
            @endif
            @if($i==4)
            <div class="features-item">
                <i class="flaticon-libra"></i>
                <div class="item-text">
                    <span>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{$uclu_alam_cek->text1}}</font>
                        </font>
                    </span>
                    <h4>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">{{$uclu_alam_cek->baslik}}</font>
                        </font>
                    </h4>
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"><?= $uclu_alam_cek->ozet; ?></font>
                        </font>
                    </p>
                </div>
            </div>
            <?php $i++; ?>
            @endif
            @endforeach
        </div>
    </div>
</section>

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

<!-- :: History -->
<section class="history">
    <div class="bg-section">
        <div class="overlay"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="sec-title text-center">
                    <h2>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Tarih</font>
                        </font>
                    </h2>
                    <h3>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Zaman Çizelgesi Şirketi</font>
                        </font>
                    </h3>
                </div>
            </div>
        </div>
        <div class="history-line owl-carousel owl-theme owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-1110px, 0px, 0px); transition: all 0s ease 0s; width: 3330px;">
                    <div class="owl-item cloned" style="width: 222px;">
                        <div class="box-line">
                            <div class="head">
                                <h4>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">kuruluş</font>
                                    </font>
                                </h4>
                            </div>
                            <div class="down">
                                <span>2016</span>
                                <span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">5 Mayıs</font>
                                    </font>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 222px;">
                        <div class="box-line">
                            <div class="head">
                                <h4>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Ciddi Müşteriler</font>
                                    </font>
                                </h4>
                            </div>
                            <div class="down">
                                <span>2017</span>
                                <span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">mart, 8</font>
                                    </font>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 222px;">
                        <div class="box-line">
                            <div class="head">
                                <h4>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">insan hakları</font>
                                    </font>
                                </h4>
                            </div>
                            <div class="down">
                                <span>2018</span>
                                <span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">12 Nisan</font>
                                    </font>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 222px;">
                        <div class="box-line">
                            <div class="head">
                                <h4>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Yılın Adayı</font>
                                    </font>
                                </h4>
                            </div>
                            <div class="down">
                                <span>2019</span>
                                <span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Haziran, 19</font>
                                    </font>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 222px;">
                        <div class="box-line">
                            <div class="head">
                                <h4>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Yılın En İyi Firması</font>
                                    </font>
                                </h4>
                            </div>
                            <div class="down">
                                <span>2020</span>
                                <span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">20 Mayıs</font>
                                    </font>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 222px;">
                        <div class="box-line">
                            <div class="head">
                                <h4>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">kuruluş</font>
                                    </font>
                                </h4>
                            </div>
                            <div class="down">
                                <span>2016</span>
                                <span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">5 Mayıs</font>
                                    </font>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 222px;">
                        <div class="box-line">
                            <div class="head">
                                <h4>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Ciddi Müşteriler</font>
                                    </font>
                                </h4>
                            </div>
                            <div class="down">
                                <span>2017</span>
                                <span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">mart, 8</font>
                                    </font>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 222px;">
                        <div class="box-line">
                            <div class="head">
                                <h4>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">insan hakları</font>
                                    </font>
                                </h4>
                            </div>
                            <div class="down">
                                <span>2018</span>
                                <span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">12 Nisan</font>
                                    </font>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 222px;">
                        <div class="box-line">
                            <div class="head">
                                <h4>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Yılın Adayı</font>
                                    </font>
                                </h4>
                            </div>
                            <div class="down">
                                <span>2019</span>
                                <span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Haziran, 19</font>
                                    </font>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 222px;">
                        <div class="box-line">
                            <div class="head">
                                <h4>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Yılın En İyi Firması</font>
                                    </font>
                                </h4>
                            </div>
                            <div class="down">
                                <span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">2020</font>
                                    </font>
                                </span>
                                <span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">20 Mayıs</font>
                                    </font>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 222px;">
                        <div class="box-line">
                            <div class="head">
                                <h4>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">kuruluş</font>
                                    </font>
                                </h4>
                            </div>
                            <div class="down">
                                <span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">2016</font>
                                    </font>
                                </span>
                                <span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">5 Mayıs</font>
                                    </font>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 222px;">
                        <div class="box-line">
                            <div class="head">
                                <h4>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Ciddi Müşteriler</font>
                                    </font>
                                </h4>
                            </div>
                            <div class="down">
                                <span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">2017</font>
                                    </font>
                                </span>
                                <span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">mart, 8</font>
                                    </font>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 222px;">
                        <div class="box-line">
                            <div class="head">
                                <h4>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">insan hakları</font>
                                    </font>
                                </h4>
                            </div>
                            <div class="down">
                                <span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">2018</font>
                                    </font>
                                </span>
                                <span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">12 Nisan</font>
                                    </font>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 222px;">
                        <div class="box-line">
                            <div class="head">
                                <h4>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Yılın Adayı</font>
                                    </font>
                                </h4>
                            </div>
                            <div class="down">
                                <span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">2019</font>
                                    </font>
                                </span>
                                <span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Haziran, 19</font>
                                    </font>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 222px;">
                        <div class="box-line">
                            <div class="head">
                                <h4>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Yılın En İyi Firması</font>
                                    </font>
                                </h4>
                            </div>
                            <div class="down">
                                <span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">2020</font>
                                    </font>
                                </span>
                                <span>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">20 Mayıs</font>
                                    </font>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
            <div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div>
        </div>
    </div>

    <!-- :: Quote -->
    <div class="quote">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="img-box">
                            <div class="quote-img">
                                <img class="img-fluid" src="<?= url("site_assets/assets"); ?>/images/quote/01_quote.jpg" alt="01 Alıntı">
                            </div>
                            <div class="quote-info">
                                <i class="flaticon-call"></i>
                                <h4>{{$iletisim->tel1}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="quote-box">
                            <div class="sec-title">
                                <h3>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Danışma İçin Bizi Arayın</font>
                                    </font>
                                </h3>
                                <p>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Karar Profesyonel Bir Avukat ve Avukatlık Hizmeti Sağlayıcı Kurumlardır. </font>
                                    </font>
                                </p>
                            </div>
                            <form class="form-contact">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="quote-item">
                                            <input type="text" name="name" placeholder="Ad Soyad" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quote-item">
                                            <input type="email" name="email" placeholder="E-Mail" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quote-item">
                                            <input type="text" name="subj" placeholder="Konu" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quote-item">
                                            <input type="text" name="phone" placeholder="Telefon">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="quote-item">
                                            <div class="quote-item">
                                                <textarea name="message" placeholder="Mesajınız..." required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="quote-item">
                                            <button type="submit" class="btn-1">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Gönder</font>
                                                </font>
                                            </button>
                                            <span class="out-message"></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- :: Sponsors -->
<div class="sponsors">
    <div class="container">
        <div class="sponsors-box owl-carousel owl-theme owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                    <div class="owl-item">
                        <div class="sponsors-box-item">
                            <img class="img-fluid" src="<?= url("site_assets/assets"); ?>/images/sponsors/01_sponsors.png" alt="01 Sponsors">
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="sponsors-box-item">
                            <img class="img-fluid" src="<?= url("site_assets/assets"); ?>/images/sponsors/02_sponsors.png" alt="02 Sponsors">
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="sponsors-box-item">
                            <img class="img-fluid" src="<?= url("site_assets/assets"); ?>/images/sponsors/03_sponsors.png" alt="03 Sponsors">
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="sponsors-box-item">
                            <img class="img-fluid" src="<?= url("site_assets/assets"); ?>/images/sponsors/04_sponsors.png" alt="04 Sponsors">
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav disabled">
                <button type="button" role="presentation" class="owl-prev">
                    <span aria-label="Previous">‹</span>
                </button>
                <button type="button" role="presentation" class="owl-next">
                    <span aria-label="Next">›</span>
                </button>
            </div>
            <div class="owl-dots disabled"></div>
        </div>
    </div>
</div>

<!-- :: Case Study -->
<!-- <section class="case-study py-100-70">
      <div class="container">
          <div class="row">
              <div class="col-md-8 offset-md-2">
                  <div class="sec-title text-center">
                      <h2>
                          <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">ne yapıyoruz</font>
                          </font>
                      </h2>
                      <h3>
                          <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">Vaka Çalışmalarımız</font>
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
                  <div class="case-study-item">
                      <span></span>
                      <div class="img-box">
                          <img class="img-fluid gallery-item-img" src="<?= url("site_assets/assets"); ?>/images/case-study/01_case-study.jpg" alt="01 Vaka Çalışması">
                      </div>
                      <div class="hover-box">
                          <div class="text-box">
                              <div class="tags"><a href="01_single-case-study.html">
                                      <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">Hukuk Hizmetleri</font>
                                      </font>
                                  </a></div>
                              <h4><a href="01_single-case-study.html">
                                      <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">Kişisel yaralanma</font>
                                      </font>
                                  </a></h4>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4">
                  <div class="case-study-item">
                      <span></span>
                      <div class="img-box">
                          <img class="img-fluid gallery-item-img" src="<?= url("site_assets/assets"); ?>/images/case-study/02_case-study.jpg" alt="02 Vaka Çalışması">
                      </div>
                      <div class="hover-box">
                          <div class="text-box">
                              <div class="tags"><a href="01_single-case-study.html">
                                      <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">Genel</font>
                                      </font>
                                  </a></div>
                              <h4><a href="01_single-case-study.html">
                                      <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">Rekabet Hukuku</font>
                                      </font>
                                  </a></h4>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4">
                  <div class="case-study-item">
                      <span></span>
                      <div class="img-box">
                          <img class="img-fluid gallery-item-img" src="<?= url("site_assets/assets"); ?>/images/case-study/03_case-study.jpg" alt="03 Case Study">
                      </div>
                      <div class="hover-box">
                          <div class="text-box">
                              <div class="tags"><a href="01_single-case-study.html">
                                      <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">İşletme</font>
                                      </font>
                                  </a></div>
                              <h4><a href="01_single-case-study.html">
                                      <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">İşletme Muhasebesi</font>
                                      </font>
                                  </a></h4>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4">
                  <div class="case-study-item">
                      <span></span>
                      <div class="img-box">
                          <img class="img-fluid gallery-item-img" src="<?= url("site_assets/assets"); ?>/images/case-study/04_case-study.jpg" alt="04 Case Study">
                      </div>
                      <div class="hover-box">
                          <div class="text-box">
                              <div class="tags"><a href="01_single-case-study.html">
                                      <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">Genel</font>
                                      </font>
                                  </a></div>
                              <h4><a href="01_single-case-study.html">
                                      <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">Kaza Vakası</font>
                                      </font>
                                  </a></h4>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4">
                  <div class="case-study-item">
                      <span></span>
                      <div class="img-box">
                          <img class="img-fluid gallery-item-img" src="<?= url("site_assets/assets"); ?>/images/case-study/05_case-study.jpg" alt="05 Case Study">
                      </div>
                      <div class="hover-box">
                          <div class="text-box">
                              <div class="tags"><a href="01_single-case-study.html">
                                      <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">Adli</font>
                                      </font>
                                  </a></div>
                              <h4><a href="01_single-case-study.html">
                                      <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">Ceza Sorunu</font>
                                      </font>
                                  </a></h4>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4">
                  <div class="case-study-item">
                      <span></span>
                      <div class="img-box">
                          <img class="img-fluid gallery-item-img" src="<?= url("site_assets/assets"); ?>/images/case-study/06_case-study.jpg" alt="06 Case Study">
                      </div>
                      <div class="hover-box">
                          <div class="text-box">
                              <div class="tags"><a href="01_single-case-study.html">
                                      <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">Kurumsal</font>
                                      </font>
                                  </a></div>
                              <h4><a href="01_single-case-study.html">
                                      <font style="vertical-align: inherit;">
                                          <font style="vertical-align: inherit;">Genel Servisler</font>
                                      </font>
                                  </a></h4>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section> -->

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