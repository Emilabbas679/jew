@extends('site.home')
@section('title', __('site.products_page_title'))
@section('content')
    <!-- My account start -->
    <section class="my-profile my-acc">
        <div class="centered">
            <div class="my-profile-wrap">
                <div class="mpr-title">My account</div> 
            </div>
            <div class="my-profile-head">
                <ul>
                    <li><a href="./">Orders</a></li>
                    <li><a href="./">Favorites</a></li>
                    <li><a href="./">My reviews</a></li>
                    <li class="active"><a href="./">My account</a></li>
                </ul>
                <div class="m-logout">
                    <a href="#">Log out</a>
                </div>
            </div>
       
            <div class="my-profile-block">
                <div class="pr-form">
                    <div class="pr-edit-form">
                        <div class="fr-title">Edit my profile</div>
                        <form>
                            <div class="pr-item">
                                <div class="pr-label">First name</div>
                                <div class="pr-input">
                                    <input type="text" placeholder="First name" value="Jeniffer">
                                </div>
                            </div>
                            <div class="pr-item">
                                <div class="pr-label">Last name</div>
                                <div class="pr-input">
                                    <input type="text" placeholder="Last name" value="Thomson">
                                </div>
                            </div>
                            <div class="pr-item">
                                <div class="pr-label">E-mail</div>
                                <div class="pr-input">
                                    <input type="text" placeholder="First name" value="jenniferth@gmail.com">
                                </div>
                            </div>
                            <div class="pr-item">
                                <div class="pr-label">Phone number</div>
                                <div class="pr-input">
                                    <input type="text" placeholder="Enter your phone number (+994)">
                                </div>
                            </div>
                            <div class="pr-check">
                                <input id="e-c" type="checkbox">
                                <label for="e-c">Send me Fancy news updates and offers.</label>
                            </div>
                            <div class="pr-button">
                                <button type="submit">Save changes</button>
                            </div>
                        </form>
                    </div>
                    <div class="pr-change-pass">
                        <div class="fr-title">Update account password</div>
                        <form>
                            <div class="pr-item">
                                <div class="pr-label">Current Password</div>
                                <div class="pr-input p-icon">
                                    <input class="s-pass" type="password" placeholder="Current Password">
                                    <div class="show-pass"></div>
                                </div>
                            </div>
                            <div class="pr-item">
                                <div class="pr-label">New Password</div>
                                <div class="pr-input p-icon">
                                    <input class="s-pass" type="password" placeholder="New Password">
                                    <div class="show-pass"></div>
                                </div>
                            </div>
                            <div class="pr-text">Passwords are case sensitive and must be at least 6 characters long.</div>
                            <div class="pr-button">
                                <button type="submit">Save changes</button>
                            </div>
                        </form>
                    </div>
                    <div class="pr-vc">Your privacy is important to us. <a href="./">View Privacy Policy.</a></div>
                </div>
            </div>
               
        </div>
    </section>
    <!-- My account end -->
@endsection

@section('css')
    
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            

        });
    </script>
@endsection