<!doctype html>
<html lang="tr">

<head>
    <!-- :: Required Meta Tags -->
    <!-- :: Title -->
    <title>{{$seo->title}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{$seo->desc}}">

    <!-- :: Bootstrap CSS -->
    <link rel="stylesheet" href="<?= url("site_assets/assets"); ?>/css/bootstrap.min.css">

    <!-- :: Favicon -->
    <link rel="icon" type="image/png" href="<?= url("uploads"); ?>/{{$settings ->favicon}}">

    <!-- :: Google Fonts -->
    <link rel="stylesheet" href="<?= url("site_assets/assets"); ?>/css/css2.css?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap">

    <!-- :: Fontawesome -->
    <link rel="stylesheet" href="<?= url("site_assets/assets"); ?>/fonts/fontawesome/css/all.min.css">

    <!-- :: Flaticon -->
    <link rel="stylesheet" href="<?= url("site_assets/assets"); ?>/fonts/flaticon/css/flaticon.css">

    <!-- :: OWL Carousel -->
    <link rel="stylesheet" href="<?= url("site_assets/assets"); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= url("site_assets/assets"); ?>/css/owl.theme.default.min.css">

    <!-- :: Nice Select CSS -->
    <link rel="stylesheet" href="<?= url("site_assets/assets"); ?>/css/nice-select.css">

    <!-- :: Lity -->
    <link rel="stylesheet" href="<?= url("site_assets/assets"); ?>/css/lity.min.css">

    <!-- :: Animate CSS -->
    <link rel="stylesheet" href="<?= url("site_assets/assets"); ?>/css/animate.css">

    <!-- :: Style CSS -->
    <link rel="stylesheet" href="<?= url("site_assets/assets"); ?>/css/style.css">

    <!-- :: Style Responsive CSS -->
    <link rel="stylesheet" href="<?= url("site_assets/assets"); ?>/css/responsive.css">

</head>

<body>
    <!-- :: Loading -->
    <div class="loading">
        <div class="loading-box">
            <div class="sk-fading-circle">
                <div class="sk-circle1 sk-circle"></div>
                <div class="sk-circle2 sk-circle"></div>
                <div class="sk-circle3 sk-circle"></div>
                <div class="sk-circle4 sk-circle"></div>
                <div class="sk-circle5 sk-circle"></div>
                <div class="sk-circle6 sk-circle"></div>
                <div class="sk-circle7 sk-circle"></div>
                <div class="sk-circle8 sk-circle"></div>
                <div class="sk-circle9 sk-circle"></div>
                <div class="sk-circle10 sk-circle"></div>
                <div class="sk-circle11 sk-circle"></div>
                <div class="sk-circle12 sk-circle"></div>
            </div>
        </div>
    </div>

    <!-- :: Navs -->
    <header class="navs">
        <div class="nav-top">
            <div class="container">
                <div class="nav-top-box d-flex align-items-center justify-content-between">
                    <ul class="info">
                        <li><span>Email :</span> {{$iletisim->mail}}</li>
                        <li><span>Telefon :</span> {{$iletisim->tel1}}</li>
                    </ul>
                    <ul class="icon-follow">
                        <li><a target="_blank" href="{{$iletisim->facebook}}" class="icon"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a target="_blank" href="{{$iletisim->twitter}}" class="icon"><i class="fab fa-twitter"></i></a></li>
                        <li><a target="_blank" href="{{$iletisim->instagram}}" class="icon"><i class="fab fa-instagram"></i></a></li>
                        <li><a style="cursor:pointer" target="_blank" class="icon open-search-box"><i class="fas fa-search"></i></a></li>
                        <li><a style="cursor:pointer" target="_blank" class="icon open-menu"><i class="fas fa-th"></i></a></li>
                        <li><a class="btn-1 btn-2" href="<?= url("iletisim"); ?>">İletişim</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- :: Navbar -->
        <nav class="nav-bar">
            <div class="container">
                <div class="box-content d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <a href="<?= url(""); ?>" class="logo-nav">
                            <img class="img-fluid one" src="<?= url("uploads"); ?>/{{$settings ->logo}}" alt="01 Logo">
                            <img class="img-fluid two" src="<?= url("uploads"); ?>/{{$settings ->logo2}}" alt="02 Logo">
                        </a>
                        <a href="#open-nav-bar-menu" class="open-nav-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                    <div class="nav-bar-link" id="open-nav-bar-menu">
                        <ul class="level-1">
                            @foreach($menu as $menu_cek)
                            @if($menu_cek->ust_id == null && $menu_cek->id != 6)
                            <li>
                                <a href="{{$menu_cek->slug}}">{{$menu_cek->baslik}}</a>
                                @foreach($menu as $menu_alt_cek)
                                @if($menu_alt_cek->ust_id == $menu_cek->id)
                                <ul class="level-2">
                                    @foreach($menu as $menu_alt_cek)
                                    @if($menu_alt_cek->ust_id == $menu_cek->id)
                                    <li><a href="{{$menu_alt_cek->slug}}">{{$menu_alt_cek->baslik}}</a></li>
                                    @endif
                                    @endforeach
                                </ul>
                                @endif
                                @endforeach
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="info-nav">
                        <i class="flaticon-call"></i>
                        <div class="contact-nav">
                            <p>{{$iletisim->tel1}}</p>
                            <span>Danışma İçin Bizi Arayın</span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- :: Search Box -->
    <div class="search-box">
        <form action="{{ route('search') }}" method="post">
            @csrf
            <input type="search" name="search" placeholder="Site içi arama...">
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>
        <i class="fas fa-times close-search"></i>
    </div>

    <!-- :: Menu Box -->
    <div class="menu-box">
        <div class="inner-menu">
            <div class="website-info">
                <a href="#" class="logo">
                    <img class="img-fluid" src="<?= url("uploads"); ?>/{{$settings->logo2}}" alt="02 Logo"></a>
                <p>{{$iletisim->ar_id}}</p>
            </div>
            <div class="contact-info">
                <h4>İletişim</h4>
                <div class="contact-box">
                    <i class="flaticon-call"></i>
                    <div class="box">
                        <p>{{$iletisim->tel1}}</p>
                    </div>
                </div>
                <div class="contact-box">
                    <i class="flaticon-email"></i>
                    <div class="box">
                        <p>{{$iletisim->mail}}</p>
                    </div>
                </div>
                <div class="contact-box">
                    <i class="flaticon-location"></i>
                    <div class="box">
                        <p>{{$iletisim->adres}}</p>
                    </div>
                </div>
            </div>
            <div class="follow-us">
                <h4>Sosyal Medya</h4>
                <ul class="icon-follow">
                    <li><a target="_blank" href="{{$iletisim->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a target="_blank" href="{{$iletisim->twitter}}"><i class="fab fa-twitter"></i></a></li>
                    <li><a target="_blank" href="{{$iletisim->instagram}}"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="exit-menu-box">
                <i class="fas fa-times"></i>
            </div>
        </div>
    </div>