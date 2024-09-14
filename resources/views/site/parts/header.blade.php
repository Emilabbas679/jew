<!-- Header start -->
<header class="header">
    <div class="centered">
        <div class="header-wrap">
            <div class="header-left">
                <div class="logo">
                    <a href="/"><img src="{{asset('/images/logo.svg')}}"></a>
                </div>
                <div class="top-menu">
                    <ul>
                        <li  @if(\Request::route()->getName() == 'home') class="active " @endif><a href="{{route('home')}}">{{__('site.home')}}</a></li>
                        <li><a href="/">{{__('site.how_it_works')}}</a></li>
                        <li><a href="/">{{__('site.about_us')}}</a></li>
                        <li  @if(\Request::route()->getName() == 'products') class="active " @endif><a href="{{route('products')}}">{{__('site.jewelry')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="header-right">
                <div class="language">
                    <div class="selected-language">Eng</div>

{{--                     Dil deyisme linki--}}
{{--                    {{route('locale', 'az')}}--}}
                </div>
                <div class="h-items">
                    <div class="h-item h-search">
                        <a href="#"></a>
                    </div>
                    <div class="h-item h-basket">
                        <a href="#"></a>
                    </div>
                    <div class="h-item h-favorite">
                        <a href="#"></a>
                    </div>
                    <div class="h-item h-profile">
                        <a href="#"></a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</header>
<!-- Header end -->