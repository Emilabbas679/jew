@extends('site.home')
@section('title', __('site.error_page_title'))
@section('content')

    <div class="not-found">
        <div class="centered">
            <div class="not-found-b">
                <div class="nf-i"></div>
                <div class="nf-text">{{__('site.404_not_found')}}</div>
                <div class="nf-desc">{{__('site.404_not_found_desc')}}</div>
                <div class="nf-button"><a href="{{route('home')}}">{{__('site.go_homepage')}}</a></div>
            </div>
        </div>
    </div>

@endsection
