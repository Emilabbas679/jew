@extends('site.home')
@section('title', __('site.register_page_title'))
@section('content')
<div class="lg-page">
    <div class="lg-page-wrap">
        <div class="lg-form">
            <form method="POST" action="{{ route('register') }}">
                @include('site.flash')
                @csrf
                <div class="lg-title">{{__('site.register')}}</div>
                <div class="lg-input">
                    <input type="text" name="name" required placeholder="{{__('site.first_name_placeholder')}}" value="{{old('name')}}">
                </div>
                <div class="lg-input">
                    <input type="text" name="surname" required placeholder="{{__('site.last_name_placeholder')}}" value="{{old('surname')}}">
                </div>
                <div class="lg-input">
                    <input type="email" name="email" required placeholder="{{__('site.email_placeholder')}}" value="{{old('email')}}">
                </div>
                <div class="lg-input w-icon">
                    <input class="s-pass" type="password" name="password" id="password" required placeholder="{{__('site.password_placeholder')}}">
                    <div class="show-pass"></div>
                </div>
                <div class="lg-input w-icon">
                    <input class="s-pass" type="password" name="password_confirmation" id="password_confirmation" required placeholder="{{__('site.confirm_password_placeholder')}}">
                    <div class="show-pass"></div>
                </div>
                <div class="fg-pass"><a href="{{route('forgot')}}">{{__('site.forgot_pass?')}}</a></div>
                <div class="lg-button">
                    <button type="submit">{{__('site.register_account')}}</button>
                </div>
            </form>
            <div class="g-register">
                <div class="lg-text mb-0">{{__('site.terms_register_desc')}}</div>
            </div>
        </div>
    </div>
</div>
@endsection