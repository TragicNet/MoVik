@section('navbar')
    <div class="navbar">
        <div class="container">
            <a class="navitem home" href="\home">MoVik</a>
            <a class="navitem menu" href="\menu">Menu</a>
            <a class="navitem order" href="">Order</a>
            <a class="navitem account" href="\account">{{ $username ?? 'Account' }}</a>
        </div>
    @show
</div>
