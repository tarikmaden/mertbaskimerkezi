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