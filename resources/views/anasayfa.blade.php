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
                    <img src="<?=url("uploads");?>/{{ $slider_alti->gosterim_resmi }}" alt="Awesome Image">
                </div><!-- /.welcome-img-box -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="welcome-content">
                    <div class="title">
                        <p>Mert Baskı Merkezi</p>
                        <h3>{{ $slider_alti->baslik }}</h3>
                    </div><!-- /.title -->
                    <p>
                        {!! $slider_alti->ozet !!}
                    </p>
                    <a href="<?=url("kurumsal");?>" class="thm-btn yellow-bg">Daha Fazla</a>
                </div><!-- /.welcome-content -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.welcome-section -->

<section class="recent-projects sec-pad">
	<div class="thm-container">
		<div class="sec-title text-center">
            <span>Work showcase</span>
            <h3>Recent Projects</h3>
            <p>There are many variations of passages of lorem Ipsum available, but <br> the majority have suffered alteration in some form.</p>
        </div><!-- /.sec-title -->
        <div class="row">

        @foreach ($hizmetler as $itemHizmet)
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single-recent-project">
                <div class="img-box">
                    <img src="<?=url("uploads");?>/{{ $itemHizmet->gosterim_resmi }}" alt="{{ $itemHizmet->baslik }}">
                </div><!-- /.img-box -->
                <div class="text-box">
                    <a href="<?=url("hizmet-detay");?>/{{ $itemHizmet->baslik }}" class="more"><i class="fas fa-plus"></i></a>
                    <div class="inner hvr-bounce-to-bottom">
                        <a href="<?=url("hizmet-detay");?>/{{ $itemHizmet->baslik }}"><h3>Detay</h3></a>
                    </div><!-- /.inner -->
                </div><!-- /.text-box -->
            </div><!-- /.single-recent-project -->
        </div>
        @endforeach

        </div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.recent-projects -->
