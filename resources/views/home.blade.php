@extends('layout/app')

@section('content')
    <script>
        jQuery(function() {
            $('.home').toggleClass('active');
        });

    </script>
    <h1>Home</h1>

    <form id="logout-form" action="logout" method="POST" class="d-none">
        @csrf
    </form>
@endsection

@section('sidebar')
    @parent
    <p>Appended Side Bar</p>
@endsection
