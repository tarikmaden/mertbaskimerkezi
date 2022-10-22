<!doctype html>
<html lang="tr">

<head>
    <title>{{$seo->title}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$seo->desc}}">
    <!-- :: Favicon -->
    <link rel="icon" type="image/png" href="<?= url("uploads"); ?>/{{$settings ->favicon}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="<?=url("site_assets/assets/css");?>/style.css">
    <link rel="stylesheet" href="<?=url("site_assets/assets/css");?>/responsive.css">

</head>

<body class="active-preloader-ovh">

    <div class="preloader">
        <div class="spinner"></div>
    </div>

    <header class="header home-page-one">
        <nav class="navbar navbar-default header-navigation stricky">
            <div class="thm-container clearfix">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navigation" aria-expanded="false">
                        <span class="sr-only">Aç Kapat</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./">
                        <img src="<?=url("site_assets/assets/img");?>/logo.png" alt="Awesome Image">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse main-navigation mainmenu " id="main-nav-bar">

                    <ul class="nav navbar-nav navigation-box">

                        @foreach ($menu as $item)
                        <li>
                            <a href="<?=url("");?>/{{ $item->slug }}">{{ $item->baslik }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div><!-- /.navbar-collapse -->
                <div class="right-side-box">
                    <div class="social">
                        <a href="#" class="fab fa-twitter hvr-pulse"></a><!--
                         --><a href="#" class="fab fa-pinterest hvr-pulse"></a><!--
                         --><a href="#" class="fab fa-facebook-f hvr-pulse"></a><!--
                         --><a href="#" class="fab fa-youtube hvr-pulse"></a>
                    </div><!-- /.social -->
                </div><!-- /.right-side-box -->
            </div><!-- /.container -->
        </nav>
    </header><!-- /.header -->
