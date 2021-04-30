@section('navbar')
    <div class="navbar">
        <a class="navitem home" href="home">MoVik</a>
        <a class="navitem menu" href="menu">Menu</a>
        {{-- <a class="navitem order" href="">Order</a> --}}
        <div class="space"></div>
        @guest
            <a class="navitem" href="javascript:;" onclick="$('.login').toggleClass('active');">{{ __('Login') }}</a>
            <a class="navitem" href="javascript:;" onclick="$('.register').toggleClass('active');">{{ __('Register') }}</a>
        @else
            <div class="dropdown">
                <a id="account" class="navitem account dropdown-title" href="account">{{ Auth::user()->name }}&nbsp;<i
                        class="fa fa-caret-down"></i></a>
                <div class="content">
                    <a class="navitem item" href="javascript:;"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="logout" method="POST" hidden>@csrf</form>
                    {{-- <a class="navitem" href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a> --}}
                </div>
            </div>
        @endguest
        <div class="theme-button">
            <div class="switch">
                <input type="checkbox">
                <div class="slider round"></div>
            </div>
        </div>
    @show
</div>
@include('includes.login')
@include('includes.register')
