@extends('site.home')
@section('title', __('site.login_page_title'))

@section('content')
<div class="lg-page">
    <div class="centered">
        <div class="lg-page-wrap">
            <div class="lg-form">
                <form method="POST" action="{{ route('login') }}">
                    @include('site.flash')
                    @csrf
                    <div class="lg-title">{{__('site.login')}}</div>
                    <div class="lg-input">
                        <input type="email" name="email" required placeholder="{{__('site.email_placeholder')}}">
                    </div>
                    <div class="lg-input w-icon">
                        <input class="s-pass" type="password" name="password" id="password" required placeholder="{{__('site.password_placeholder')}}">
                        <div class="show-pass"></div>
                    </div>
                    <div class="fg-pass"><a href="{{route('forgot')}}">{{__('site.forgot_pass?')}}</a></div>
                    <div class="lg-button">
                        <button type="submit">{{__('site.login_btn')}}</button>
                    </div>
                </form>
                <div class="g-register">
                    <div class="lg-title">{{__('site.register')}}</div>
                    <div class="lg-text">{{__('site.login_desc')}}</div>
                    <div class="lg-button">
                        <a href="{{route('register')}}">{{__('site.register_account')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
