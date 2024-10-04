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
                        <li @if(\Request::route() != null and \Request::route()->getName() == 'about') class="active " @endif><a href="{{route('about')}}" >{{__('site.about_us')}}</a></li>
                        <li  @if(\Request::route() != null and \Request::route()->getName() == 'products') class="active " @endif><a href="{{route('products')}}">{{__('site.jewelry')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="header-right">
                <div class="language">
                    <div class="selected-language">
                        @if(Config::get('app.locale') == 'az') Aze @elseif(Config::get('app.locale') == 'en') Eng @else Rus @endif</div>
                    <div class="language-list">
                        <ul>
                            <li><a href="{{route('locale', 'az')}}">Aze</a></li>
                            <li><a href="{{route('locale', 'en')}}">Eng</a></li>
                            <li><a href="{{route('locale', 'ru')}}">Rus</a></li>
                        </ul>
                    </div>

                </div>
                <div class="h-items">
                    <div class="h-item h-search">
                        <a href="#"></a>
                    </div>
                    <div class="h-item h-basket">
                        <a href="{{route('profile.cart')}}"></a>
                    </div>
                    <div class="h-item h-favorite">
                        <a href="{{route('profile.favorites')}}"></a>
                    </div>
                    @guest
                    <div class="h-item h-profile">
                        <a href="{{route('login')}}"></a>
                    </div>
                    @endguest
                    @auth
                    <div class="h-item h-auth">
                        <a href="#"></a>
                    </div>
                    <div class="profile-menu">
                        <div class="pm-menu-top">
                            <div class="pmt-a">{{__('site.account')}}</div>
                            <div class="pmt-b">{{__('site.welcome')}}, {{auth()->user()->name}}</div>
                        </div>
                        <div class="pm-items">
                            <ul>
                                <li><a href="./">Orders</a></li>
                                <li><a href="{{route('profile.favorites')}}">Favorites</a></li>
                                <li><a href="./">My reviews</a></li>
                                <li><a href="{{route('profile')}}">{{__('site.my_account')}}</a></li>
                                <li><a href="{{route('logout')}}">{{__('site.logout')}}</a></li>
                            </ul>
                        </div>
                    </div>
                    @endauth
                    <div class="h-item h-menu">
                        <a href="#"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header end -->
<!-- Mobile menu start -->
<div class="mobile-menu">
    <div class="mobile-menu-h">
        <div class="m-language">
            <ul>
                <li @if(Config::get('app.locale') == 'az') class="active" @endif><a href="{{route('locale', 'az')}}">Aze</a></li>
                <li @if(Config::get('app.locale') == 'en') class="active" @endif><a href="{{route('locale', 'en')}}">Eng</a></li>
                <li @if(Config::get('app.locale') == 'ru') class="active" @endif><a href="{{route('locale', 'ru')}}">Rus</a></li>
            </ul>
        </div>
        <div class="m-close"></div>
    </div>
    <div class="mobile-menu-b">
        <div class="m-menu m-fr">
            <ul>
                <ul>
                    <li  @if(\Request::route() != null and \Request::route()->getName() == 'home') class="active " @endif><a href="{{route('home')}}">{{__('site.home')}}</a></li>
                    <li><a href="/">{{__('site.how_it_works')}}</a></li>
                    <li @if(\Request::route() != null and \Request::route()->getName() == 'about') class="active " @endif><a href="{{route('about')}}" >{{__('site.about_us')}}</a></li>
                    <li  @if(\Request::route() != null and \Request::route()->getName() == 'products') class="active " @endif><a href="{{route('products')}}">{{__('site.jewelry')}}</a></li>
            </ul>
        </div>
        <div class="m-menu">
            <ul>
                <ul>
                    <li><a href="{{route('blog')}}">Blog</a></li>
                    <li><a href="{{route('testimonials')}}">Testimonials</a></li>
                    <li><a href="./">Become a Vendor</a></li>
                    <li><a href="{{route('faq')}}">FAQ</a></li>
                    <li><a href="{{route('contact')}}">Contact us</a></li>
                </ul>
        </div>
    </div>
</div>
<!-- Mobile menu end -->
