<section class="page-title">
    <div class="thm-container">
        <h3>{{ $seo->baslik }}</h3>
    </div><!-- /.thm-container -->
</section><!-- /.page-title -->

<div class="breadcumb-wrapper">
    <div class="thm-container">
        <ul class="breadcumb">
            <li><a href="<?=url("");?>">Ana Sayfa</a></li><!--
            --><li><span class="sep">-</span></li><!--
            --><li><span>{{ $seo->baslik }}</span></li>
        </ul><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</div><!-- /.breadcumb-wrapper -->

<section class="about-section sec-pad">
    <div class="thm-container">
        <div class="row masonary-layout">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-about">
                    <div class="text-box hvr-bounce-to-bottom">
                        <a href="#"><h3>{{ $seo->baslik }}</h3></a>
                        <p>
                            {!! $seo->icerik !!}
                        </p>
                    </div><!-- /.text-box -->
                </div><!-- /.single-about -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-about">
                    <div class="img-box">
                        <img class="img-responsive" src="<?=url("uploads");?>/{{ $seo->gosterim_resmi }}" alt="{{ $seo->baslik }}"/>
                    </div><!-- /.img-box -->
                </div><!-- /.single-about -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.about-section -->
