@extends('site.home')
@section('title', __('site.how_title'))
@section('content')
<!-- How works start -->
<section class="how-page">
    <div class="centered">
        <div class="how-page-wrap">
            <div class="hpw-top">
                <div class="hi-image"><img src="./images/p/how-it-works.jpg"></div>
                <div class="hpw-info">
                    <div class="hpw-info-a">A shortcut to luxury</div>
                    <div class="hpw-info-b">Renting beautiful jewelry has never been this easy - or<br> this fun.</div>
                    <div class="hpw-info-c">Watch the video to find out<i></i></div>
                </div>
            </div>
            <div class="how-works-b">
                <div class="hw-z">
                    <div class="j-head">
                        <div class="j-title">How it works</div>
                        <div class="j-desc">Renting fine jewelry is easy, fast, fun, and affordable.</div>
                    </div>
                    <div class="hw-steps">
                        <div class="hw-step-item">
                            <div class="hw-icon hw-icon-a"></div>
                            <div class="hw-title">Select jewelry to rent</div>
                            <div class="hw-desc">Browse jewelry for rent. Choose what you like, and reserve it for your event date.</div>
                        </div>
                        <div class="hw-step-item">
                            <div class="hw-icon hw-icon-b"></div>
                            <div class="hw-title">Wear jewelry at your event</div>
                            <div class="hw-desc">We ship the jewelry to you for free. Wear it for your event, and experience luxury.</div>
                        </div>
                        <div class="hw-step-item">
                            <div class="hw-icon hw-icon-c"></div>
                            <div class="hw-title">Return the jewelry</div>
                            <div class="hw-desc">At the end of the rental period, return the jewelry with a pre-paid label.</div>
                        </div>
                    </div>
                    <div class="hw-browsing"><a href="./">Start browsing</a></div>
                    <div class="hw-extra-text">
                        <div class="hw-extra-a">Discover how easy it is to rent jewelry on a whim</div>
                        <div class="hw-extra-b">Renting jewelry from Trejours is the perfect way to always have up to date luxury jewelry without the cost of owning it. Go beyond everyday jewelry and experience wearing one of a kind designer fine jewelry for your next special event. Discover an affordable way to always show up looking like a million bucks with new top designer jewelry every time.</div>
                    </div>
                    <div class="faq-content">
                        <h2 class="bg-title">Frequently Asked Questions</h2>
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
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How works end -->

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