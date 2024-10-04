@extends('site.home')
@section('title', __('site.faq_title'))
@section('content')
<!-- FAQ start -->
<section class="faq-page">
    <div class="centered">
        <div class="faq-page-wrap">
            <div class="faq-content">
                <h2 class="bg-title">Frequently Asked Questions</h2>
                <div class="my-profile-head">
                    <ul>
                        <li class="active"><a href="./">Customers</a></li>
                        <li><a href="./">Vendors</a></li>
                    </ul>
                </div>
                <div class="faq-accordion">

                    @foreach($faqs as $faq)
                        <div class="fq-accordion-section">
                            <div class="fq-accordion-header">{{$faq->title}}<i></i></div>
                            <div class="fq-accordion-content">
                                <div class="fq-content">
                                    {!! $faq->description !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ end -->

@endsection

@section('css')

@endsection

@section('js')
<script>
    $(document).ready(function() {

        $(".fq-accordion-header, .fq-accordion-content").click(function() {
            var parentSection = $(this).closest(".fq-accordion-section");

            if (parentSection.hasClass("active")) {
                parentSection.removeClass("active");
                parentSection.find(".fq-accordion-content").slideUp();
            } else {
                $(".fq-accordion-section").removeClass("active");
                $(".fq-accordion-content").slideUp();
                parentSection.addClass("active");
                parentSection.find(".fq-accordion-content").slideDown();  //
            }
        });


    });
</script>
@endsection
