<section class="page-title">
    <div class="thm-container">
        <h3>Blog</h3>
    </div><!-- /.thm-container -->
</section><!-- /.page-title -->

<div class="breadcumb-wrapper">
    <div class="thm-container">
        <ul class="breadcumb">
            <li><a href="<?=url("");?>">Ana Sayfa</a></li><!--
            --><li><span class="sep">-</span></li><!--
            --><li><span>Blog</span></li>
        </ul><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</div><!-- /.breadcumb-wrapper -->


<section class="service-style-three sec-pad">
    <div class="thm-container">
        <div class="row masonary-layout">
            @foreach ($yazilarimiz as $hizmetItem)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service-three">
                        <div class="img-box">
                            <img src="<?=url("uploads");?>/{{ $hizmetItem->gosterim_resmi }}" alt="Awesome Image">
                        </div><!-- /.img-box -->
                        <div class="text-box hvr-bounce-to-bottom">
                            <a href="service-details.html"><h3>{{ $hizmetItem->baslik }}</h3></a>
                            <p>
                                {!! $hizmetItem->ozet !!}
                            </p>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-service-three -->
                </div>
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.all-services -->
