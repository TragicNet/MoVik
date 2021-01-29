@section('navbar')
    <script>
        $(document).ready(function() {
            $('.navitem').hover(function() {
                activeClass = $('.active');
                $('.active').toggleClass('active');
            }, function() {
                activeClass.toggleClass('active');
            });
        });

    </script>
    <div class="navbar">
        <div class="container">
            <a class="navitem logo" href="\home">MoVik</a>
            <a class="navitem menu" href="\menu">Menu</a>
            <a class="navitem order" href="">Order</a>
            <a class="navitem account" href="\account">Account</a>
        </div>
    @show
</div>
