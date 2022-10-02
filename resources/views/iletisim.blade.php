<style>
    .contactpage_details {
        top: -115px;
        z-index: 0;
        padding: 60px 0px;
        position: relative;
        background-color: #fff;
        border: 2px solid #e4e4e4;
    }
    .contact_d_icontext .con_icon {
        line-height: 1;
        margin-bottom: 40px;
        display: inline-block;
    }
    .contact_d_icontext .con_icon i {
        font-size: 75px;
        color: #b89b5e;
    }
    .contact_d_icontext .con_text h4 {
        font-size: 20px;
        padding-bottom: 20px;
    }
    .contact_d_icontext .con_text span {
        font-size: 16px;
        max-width: 205px;
        margin: 0 auto;
        display: inline-block;
    }
    .contact_d_icontext .con_bg {
        line-height: 1;
        bottom: -50px;
        z-index: -1;
        opacity: 0;
        left: 40px;
        position: absolute;
        -webkit-transition: 0.5s all ease-in-out;
        -o-transition: 0.5s all ease-in-out;
        transition: 0.5s all ease-in-out;
    }
    .contact_d_icontext:after {
        content: "";
        position: absolute;
        height: 100%;
        width: 2px;
        top: 0;
        right: 0;
        background-color: #e4e4e4;
    }
</style>

<section>
    <div id="google-map">
        <iframe width="100%" height="600" src="{{$iletisim->maps}}"></iframe>
    </div>
    <!-- /#google-map-->
    <div class="container">
        <div class="contactpage_details">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact_d_icontext text-center">
                        <div class="con_icon relative-position">
                            <i class="flaticon-email"></i>
                        </div>
                        <div class="con_text headline">
                            <h4>Email</h4>
                            <span>info@ahvalhukuk.com</span>
                            <div class="con_bg">
                                <i class="flaticon-email"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact_d_icontext text-center">
                        <div class="con_icon relative-position">
                            <i class="flaticon-call"></i>
                        </div>
                        <div class="con_text headline">
                            <h4>Telefon</h4>
                            <span>05323832725</span>
                            <div class="con_bg">
                                <i class="flaticon-call"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact_d_icontext text-center">
                        <div class="con_icon relative-position">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="con_text headline">
                            <h4>Adres</h4>
                            <span>Eyüpyolu Caddesi Altıparmak iş merkezi no:12 kat:1 Gaziosmanpaşa İstanbul</span>
                            <div class="con_bg">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- :: History -->
<section class="history" style="padding-top:0;">
    <!-- :: Quote -->
    <div class="quote" style="padding-top:0;">
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
                                        <font style="vertical-align: inherit;">İletişim Formu</font>
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