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
                        <li  @if(\Request::route() != null and \Request::route()->getName() == 'home') class="active " @endif><a href="{{route('home')}}">{{__('site.home')}}</a></li>
                        <li><a href="/">{{__('site.how_it_works')}}</a></li>
                        <li><a href="/">{{__('site.about_us')}}</a></li>
                        <li  @if(\Request::route() != null and \Request::route()->getName() == 'products') class="active " @endif><a href="{{route('products')}}">{{__('site.jewelry')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="header-right">
                <div class="language">
                    <div class="selected-language">{{--Config::get('app.locale')--}}Eng</div>
                    <div class="language-list">
                        <ul>
                            <li><a href="{{route('locale', 'az')}}">Aze</a></li>
                            <li><a href="{{route('locale', 'en')}}">Eng</a></li>
                            <li><a href="{{route('locale', 'ru')}}">Rus</a></li>
                        </ul>
                    </div>

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
                    @guest
                    <div class="h-item h-profile">
                        <a href="#"></a>
                    </div>
                    @endguest
                    @auth
                    <div class="h-item h-auth">
                        <a href="#"></a>
                    </div>
                    <div class="profile-menu">
                        <div class="pm-menu-top">
                            <div class="pmt-a">Account</div>
                            <div class="pmt-b">Welcome back, Shahin</div>
                        </div>
                        <div class="pm-items">
                            <ul>
                                <li><a href="./">Orders</a></li>
                                <li><a href="./">Favorites</a></li>
                                <li><a href="./">My reviews</a></li>
                                <li><a href="./">My account</a></li>
                                <li><a href="./">Log out</a></li>
                            </ul>
                        </div>
                    </diV>
                    @endauth
                </div>
            </div>
        </div>
    </div> 
</header>
<!-- Header end -->