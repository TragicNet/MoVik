@extends('layout/app')

@section('content')
    <script>
        jQuery(function() {
            $('.menu').toggleClass('active');
        });

    </script>
    <h1>Sub Menu</h1>
@endsection
