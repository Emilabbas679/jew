@extends('site.home')
@section('title', __('site.faq_title'))
@section('content')
<!-- FAQ start -->
<section class="faq-page">
    <div class="centered">
        <div class="faq-page-wrap">
            <div class="faq-content">
                <h2 class="abt-title">Frequently Asked Questions</h2>
                <div class="faq-accordion">
                    <div class="fq-accordion-section">
                        <div class="fq-accordion-header">How does jewelry rental work?<i></i></div>
                        <div class="fq-accordion-content">
                            <div class="fq-content">
                                In aliquam duis orci mattis. Sit etiam felis nisl sed nam. Facilisi posuere nisl fermentum cursus dictum tortor tempus. Et congue fringilla suspendisse magna nec porttitor. Amet quis odio ridiculus ut mollis volutpat vel. Convallis mattis dui fringilla in. Sit nibh et habitasse ultrices ipsum.
                            </div>
                        </div>
                    </div>
                    <div class="fq-accordion-section">
                        <div class="fq-accordion-header">Do I need a user account to rent jewelry, or can I check out as a guest?<i></i></div>
                        <div class="fq-accordion-content">
                            <div class="fq-content">
                                In aliquam duis orci mattis. Sit etiam felis nisl sed nam. Facilisi posuere nisl fermentum cursus dictum tortor tempus. Et congue fringilla suspendisse magna nec porttitor. Amet quis odio ridiculus ut mollis volutpat vel. Convallis mattis dui fringilla in. Sit nibh et habitasse ultrices ipsum.
                            </div>
                        </div>
                    </div>
                    <div class="fq-accordion-section">
                        <div class="fq-accordion-header">What does the user verification process involve?<i></i></div>
                        <div class="fq-accordion-content">
                            <div class="fq-content">
                                In aliquam duis orci mattis. Sit etiam felis nisl sed nam. Facilisi posuere nisl fermentum cursus dictum tortor tempus. Et congue fringilla suspendisse magna nec porttitor. Amet quis odio ridiculus ut mollis volutpat vel. Convallis mattis dui fringilla in. Sit nibh et habitasse ultrices ipsum.
                            </div>
                        </div>
                    </div>
                    <div class="fq-accordion-section">
                        <div class="fq-accordion-header">What happens if I do not pass the verification process?<i></i></div>
                        <div class="fq-accordion-content">
                            <div class="fq-content">
                                In aliquam duis orci mattis. Sit etiam felis nisl sed nam. Facilisi posuere nisl fermentum cursus dictum tortor tempus. Et congue fringilla suspendisse magna nec porttitor. Amet quis odio ridiculus ut mollis volutpat vel. Convallis mattis dui fringilla in. Sit nibh et habitasse ultrices ipsum.
                            </div>
                        </div>
                    </div>
                    <div class="fq-accordion-section">
                        <div class="fq-accordion-header">How many days do I have the jewelry for?<i></i></div>
                        <div class="fq-accordion-content">
                            <div class="fq-content">
                                In aliquam duis orci mattis. Sit etiam felis nisl sed nam. Facilisi posuere nisl fermentum cursus dictum tortor tempus. Et congue fringilla suspendisse magna nec porttitor. Amet quis odio ridiculus ut mollis volutpat vel. Convallis mattis dui fringilla in. Sit nibh et habitasse ultrices ipsum.
                            </div>
                        </div>
                    </div>
                    <div class="fq-accordion-section">
                        <div class="fq-accordion-header">How many pieces of jewelry can I rent at a time?<i></i></div>
                        <div class="fq-accordion-content">
                            <div class="fq-content">
                                In aliquam duis orci mattis. Sit etiam felis nisl sed nam. Facilisi posuere nisl fermentum cursus dictum tortor tempus. Et congue fringilla suspendisse magna nec porttitor. Amet quis odio ridiculus ut mollis volutpat vel. Convallis mattis dui fringilla in. Sit nibh et habitasse ultrices ipsum.
                            </div>
                        </div>
                    </div>
                    <div class="fq-accordion-section">
                        <div class="fq-accordion-header">Do you require a deposit to rent jewelry?<i></i></div>
                        <div class="fq-accordion-content">
                            <div class="fq-content">
                                In aliquam duis orci mattis. Sit etiam felis nisl sed nam. Facilisi posuere nisl fermentum cursus dictum tortor tempus. Et congue fringilla suspendisse magna nec porttitor. Amet quis odio ridiculus ut mollis volutpat vel. Convallis mattis dui fringilla in. Sit nibh et habitasse ultrices ipsum.
                            </div>
                        </div>
                    </div>
                    <div class="fq-accordion-section">
                        <div class="fq-accordion-header">Do you require a deposit to rent jewelry?<i></i></div>
                        <div class="fq-accordion-content">
                            <div class="fq-content">
                                In aliquam duis orci mattis. Sit etiam felis nisl sed nam. Facilisi posuere nisl fermentum cursus dictum tortor tempus. Et congue fringilla suspendisse magna nec porttitor. Amet quis odio ridiculus ut mollis volutpat vel. Convallis mattis dui fringilla in. Sit nibh et habitasse ultrices ipsum.
                            </div>
                        </div>
                    </div>
                    <div class="fq-accordion-section">
                        <div class="fq-accordion-header">What if I fall in love with the jewelry and want to keep it?<i></i></div>
                        <div class="fq-accordion-content">
                            <div class="fq-content">
                                In aliquam duis orci mattis. Sit etiam felis nisl sed nam. Facilisi posuere nisl fermentum cursus dictum tortor tempus. Et congue fringilla suspendisse magna nec porttitor. Amet quis odio ridiculus ut mollis volutpat vel. Convallis mattis dui fringilla in. Sit nibh et habitasse ultrices ipsum.
                            </div>
                        </div>
                    </div>
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