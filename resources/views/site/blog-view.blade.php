@extends('site.home')
@section('title', __('site.blogview_title'))
@section('content')
<!-- Blog view start -->
<section class="blog-view">
    <div class="centered">
        <div class="blog-view-wrap">
            <div class="blog-content">
                <div class="blg-top">
                    <h2 class="blog-view-title">How To Wear Diamond Jewelry In The Most Affordable Way</h2>
                    <div class="pr-share m-md" data-target="#pr-share"></div>
                </div>
                <div class="product-share m-modal" id="pr-share">
                    <div class="ps-a">
                        <div class="ps-b">
                            <div class="share-bl">
                                <div class="ps-top">
                                    <div class="ps-t">Share jewelry</div>
                                    <div class="ps-close"></div>
                                </div>
                                <div class="ps-info">Share this page with those who help you choose jewelry</div>
                                <div class="share-list">
                                    <ul>
                                        <li class="s-fb">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=link" target="_blank"></a>
                                        </li>
                                        <li class="s-wp">
                                            <a href="https://api.whatsapp.com/send?text=title - link" target="_blank"></a>
                                        </li>
                                        <li class="s-tg">
                                            <a href="https://telegram.me/share/url?url=link&text=title" target="_blank"></a>
                                        </li>
                                        <li class="s-xt">
                                            <a href="https://x.com/intent/tweet?text=title&url=link" target="_blank"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="share-url">
                                    <i></i>
                                    <div class="share-link">https://but.az/blog-view</div>
                                    <div id="copy-message">Kopyalandı</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-view-date">10 Sep, 2024 / 15:32</div>
                <div class="blog-main-img"><img src="{{asset('/images/p/blogv1.jpg')}}"></div>
                <div class="blog-text">
                    <p class="p-type-a">Lorem ipsum dolor sit amet consectetur. Amet ut at et ac arcu suspendisse mattis. Varius et gravida nibh blandit fames. Ultricies quis molestie arcu sit duis porttitor elit quisque. Faucibus tincidunt arcu consectetur massa nullam quam orci gravida. Eget lectus varius dictum massa suscipit. Nisl odio ante eu amet ac arcu gravida. Malesuada quis vitae dictum faucibus nunc nunc lacinia tellus. Et diam proin in posuere massa vitae orci ut. Enim vitae nunc ac viverra.</p>
                    <p>Cras ipsum velit tincidunt urna et facilisi. Amet nulla mauris ullamcorper in posuere sagittis adipiscing tellus. At duis sed nisl eros commodo sapien vitae scelerisque. Vitae dignissim dignissim convallis at. Etiam sit neque imperdiet est ultrices et eget. Mauris diam dolor mattis turpis. Consectetur tellus amet ut mus nibh vulputate. Et vestibulum dictum ultrices egestas. Lorem diam mattis magnis neque. Vestibulum cras pellentesque id euismod nulla. Mattis cursus id tincidunt justo feugiat. Pretium justo non blandit enim egestas sed venenatis morbi. Purus dui lorem adipiscing mauris. Egestas proin feugiat tincidunt pretium. Augue dolor suspendisse massa tincidunt ipsum placerat orci. Tincidunt nam eu felis aliquet ultricies tincidunt malesuada justo vitae. Nibh blandit ut pellentesque phasellus viverra nec quisque congue est.</p>
                    <section class="products">
                        <div class="centered">
                            <div class="j-head">
                                <h2 class="j-title">Collection</h2>
                            </div>
                            <div class="product-blog-carousel owl-carousel">
                                <div class="product-item">
                                    <div class="product-item-a">
                                        <a href="./">
                                            <div class="product-image">
                                                <img src="{{asset('/images/p/product1.jpg')}}">
                                            </div>
                                            <div class="product-info">
                                                <div class="product-title">Cartier Juste un Clou</div>
                                                <div class="product-price">
                                                    <div class="prc-a">$ 19.45 /</div>
                                                    <div class="prc-b"> Per Day</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="product-fav"></div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="product-item-a">
                                        <a href="./">
                                            <div class="product-image">
                                                <img src="{{asset('/images/p/product2.jpg')}}">
                                            </div>
                                            <div class="product-info">
                                                <div class="product-title">Doves by Doron Paloma</div>
                                                <div class="product-price">
                                                    <div class="prc-a">$ 20.50 /</div>
                                                    <div class="prc-b"> Per Day</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="product-fav"></div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="product-item-a">
                                        <a href="./">
                                            <div class="product-image">
                                                <img src="{{asset('/images/p/product3.jpg')}}">
                                            </div>
                                            <div class="product-info">
                                                <div class="product-title">Green Emerald and Pave</div>
                                                <div class="product-price">
                                                    <div class="prc-a">$ 34.00 /</div>
                                                    <div class="prc-b"> Per Day</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="product-fav active"></div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="product-item-a">
                                        <a href="./">
                                            <div class="product-image">
                                                <img src="{{asset('/images/p/product4.jpg')}}">
                                            </div>
                                            <div class="product-info">
                                                <div class="product-title">Van Cleef Red Alhambra</div>
                                                <div class="product-price">
                                                    <div class="prc-a">$ 28.45 /</div>
                                                    <div class="prc-b"> Per Day</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="product-fav"></div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="product-item-a">
                                        <a href="./">
                                            <div class="product-image">
                                                <img src="{{asset('/images/p/product1.jpg')}}">
                                            </div>
                                            <div class="product-info">
                                                <div class="product-title">Cartier Juste un Clou</div>
                                                <div class="product-price">
                                                    <div class="prc-a">$ 19.45 /</div>
                                                    <div class="prc-b"> Per Day</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="product-fav"></div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="product-item-a">
                                        <a href="./">
                                            <div class="product-image">
                                                <img src="{{asset('/images/p/product2.jpg')}}">
                                            </div>
                                            <div class="product-info">
                                                <div class="product-title">Doves by Doron Paloma</div>
                                                <div class="product-price">
                                                    <div class="prc-a">$ 20.50 /</div>
                                                    <div class="prc-b"> Per Day</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="product-fav"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <p>In aliquam duis orci mattis. Sit etiam felis nisl sed nam. Facilisi posuere nisl fermentum cursus dictum tortor tempus. Et congue fringilla suspendisse magna nec porttitor. Amet quis odio ridiculus ut mollis volutpat vel. Convallis mattis dui fringilla in. Sit nibh et habitasse ultrices ipsum.</p>
                    <p>Varius netus ullamcorper curabitur nullam odio nisi tempor in morbi. Amet pulvinar nisl rhoncus faucibus eget at. Sit at volutpat sit auctor et enim pulvinar sed. Quam aliquam diam at in nibh faucibus risus. Varius integer sociis dui tincidunt id arcu vel. Amet magna iaculis condimentum porttitor diam. Vitae libero parturient interdum neque sagittis. Sodales at ultrices tortor ultrices viverra ipsum sit phasellus. Interdum in mauris vitae maecenas tellus eu quam. Egestas sed orci neque volutpat vel. Libero mauris velit consectetur fusce eget. Duis vitae venenatis mattis neque mattis at mollis integer arcu. Ultrices fermentum pellentesque in at donec. Nec nisl ullamcorper id euismod magna ante risus metus feugiat. Sem sollicitudin pulvinar purus posuere.</p>
                    <img src="{{asset('/images/p/blogv2.jpg')}}">
                     <p>Cras ipsum velit tincidunt urna et facilisi. Amet nulla mauris ullamcorper in posuere sagittis adipiscing tellus. At duis sed nisl eros commodo sapien vitae scelerisque. Vitae dignissim dignissim convallis at. Etiam sit neque imperdiet est ultrices et eget. Mauris diam dolor mattis turpis. Consectetur tellus amet ut mus nibh vulputate. Et vestibulum dictum ultrices egestas. Lorem diam mattis magnis neque. Vestibulum cras pellentesque id euismod nulla. Mattis cursus id tincidunt justo feugiat. Pretium justo non blandit enim egestas sed venenatis morbi. Purus dui lorem adipiscing mauris. Egestas proin feugiat tincidunt pretium. Augue dolor suspendisse massa tincidunt ipsum placerat orci. Tincidunt nam eu felis aliquet ultricies tincidunt malesuada justo vitae. Nibh blandit ut pellentesque phasellus viverra nec quisque congue est.</p>
                    <p>In aliquam duis orci mattis. Sit etiam felis nisl sed nam. Facilisi posuere nisl fermentum cursus dictum tortor tempus. Et congue fringilla suspendisse magna nec porttitor. Amet quis odio ridiculus ut mollis volutpat vel. Convallis mattis dui fringilla in. Sit nibh et habitasse ultrices ipsum.</p>
                </div>
                <div class="blog-share">
                    <div class="bl-s">Share this blog with your friends:</div>
                    <div class="b-share m-md" data-target="#pr-share">Share</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog view end -->
<!-- Blog start -->
<section class="blog-page">
    <div class="centered">
        <div class="blog-page-wrap">
            <div class="bg-title">Latest Blog Posts</div>
            <div class="blog-list">
                <div class="blog-item">
                    <a href="./">
                        <div class="blog-image"><img src="./images/p/blog1.jpg"></div>
                        <div class="blog-info">
                            <div class="blog-date">10 Sep, 2024</div>
                            <h2 class="blog-title">Different necklaces to wear with different necklines</h2>
                        </div>
                    </a>
                </div>
                <div class="blog-item">
                    <a href="./">
                        <div class="blog-image"><img src="./images/p/blog2.jpg"></div>
                        <div class="blog-info">
                            <div class="blog-date">10 Sep, 2024</div>
                            <h2 class="blog-title">Stronger Together - in The Aftermath of The Tinder Swindler</h2>
                        </div>
                    </a>
                </div>
                <div class="blog-item">
                    <a href="./">
                        <div class="blog-image"><img src="./images/p/blog3.jpg"></div>
                        <div class="blog-info">
                            <div class="blog-date">10 Sep, 2024</div>
                            <h2 class="blog-title">The Ultimate Guide To Spring Jewelry Styles</h2>
                        </div>
                    </a>
                </div>
                <div class="blog-item">
                    <a href="./">
                        <div class="blog-image"><img src="./images/p/blog4.jpg"></div>
                        <div class="blog-info">
                            <div class="blog-date">10 Sep, 2024</div>
                            <h2 class="blog-title">Why We Love Tiffany & Co. Designer Jewelry</h2>
                        </div>
                    </a>
                </div>
                <div class="blog-item">
                    <a href="./">
                        <div class="blog-image"><img src="./images/p/blog5.jpg"></div>
                        <div class="blog-info">
                            <div class="blog-date">10 Sep, 2024</div>
                            <h2 class="blog-title">How To Wear Diamond Jewelry In The Most Affordable Way</h2>
                        </div>
                    </a>
                </div>
                <div class="blog-item">
                    <a href="./">
                        <div class="blog-image"><img src="./images/p/blog6.jpg"></div>
                        <div class="blog-info">
                            <div class="blog-date">10 Sep, 2024</div>
                            <h2 class="blog-title">Different necklaces to wear with different necklines</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog end -->

@endsection

@section('css')

@endsection

@section('js')
<script>
    $(document).ready(function() {

        $('.share-url').click(function(){
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($('.share-link').text()).select();
            document.execCommand("copy");
            $temp.remove();

            $('#copy-message').fadeIn().delay(2000).fadeOut();
        });

        $('.m-md').on('click', function(e) {
            e.stopPropagation();
            $(($(this).attr("data-target"))).show();
            $('body').addClass('vd-open')
        });

        $('.ps-close').on('click', function() {
            $('body').removeClass('vd-open')
            $(this).parents('.m-modal').hide()
        });

        var productBlogSlider=$('.product-blog-carousel');
            productBlogSlider.owlCarousel({
            loop:true,
            items:3,
            margin:24,
            dots:true,
            navText:false,
            nav:false,
            autoplay:false,
            dotsEach: 1
        });

    });
</script>
@endsection