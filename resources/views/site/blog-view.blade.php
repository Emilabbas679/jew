@extends('site.home')
@section('title', $blog->title)
@section('content')
<!-- Blog view start -->
<section class="blog-view">
    <div class="centered">
        <div class="blog-view-wrap">
            <div class="blog-content">
                <div class="blg-top">
                    <h2 class="blog-view-title">{{$blog->title}}</h2>
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
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" target="_blank"></a>
                                        </li>
                                        <li class="s-wp">
                                            <a href="https://api.whatsapp.com/send?text={{$blog->title}} - {{url()->current()}}" target="_blank"></a>
                                        </li>
                                        <li class="s-tg">
                                            <a href="https://telegram.me/share/url?url={{url()->current()}}&text={{$blog->title}}" target="_blank"></a>
                                        </li>
                                        <li class="s-xt">
                                            <a href="https://x.com/intent/tweet?text={{$blog->title}}&url={{url()->current()}}" target="_blank"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="share-url">
                                    <i></i>
                                    <div class="share-link">{{route('blog_detail',$blog->id )}}</div>
                                    <div id="copy-message">Kopyalandı</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-view-date">{{date('d.m.Y', strtotime($blog->created_at))}}/ {{date('H:i', strtotime($blog->created_at))}}</div>
                <div class="blog-main-img"><img src="{{asset('/images/p/blogv1.jpg')}}"></div>
                <div class="blog-text">
                    {!! $blog->description !!}
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
                @foreach($blogs as $item)
                    <div class="blog-item">
                        <a href="{{route('blog', $item->id)}}">
                            <div class="blog-image"><img src="{{asset('/storage/'.$item->image)}}"></div>
                            <div class="blog-info">
                                <div class="blog-date">{{date('d.m.Y', strtotime($item->created_at))}}</div>
                                <h2 class="blog-title">{{$item->title}}</h2>
                            </div>
                        </a>
                    </div>
                @endforeach

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
