<div class="my-profile-head">
    <ul>
        <li><a href="./">Orders</a></li>
        <li @if(\Request::route() != null and \Request::route()->getName() == 'profile.favorites') class="active " @endif><a href="{{route('profile.favorites')}}">Favorites</a></li>
        <li><a href="./">My reviews</a></li>
        <li @if(\Request::route() != null and \Request::route()->getName() == 'profile') class="active " @endif><a href="{{route('profile')}}">My account</a></li>
    </ul>
    <div class="m-logout">
        <a href="{{route('logout')}}">Log out</a>
    </div>
</div>