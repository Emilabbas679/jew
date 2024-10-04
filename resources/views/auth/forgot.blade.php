@extends('site.home')

@section('content')
<div class="lg-page">
    <div class="centered">
        <div class="lg-page-wrap">
            <div class="lg-form">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="lg-title">Forgot password?</div>
                    <div class="lg-input">
                        <input type="email" name="email" required placeholder="Enter e-mail  address">
                    </div>
                    <div class="lg-button">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
