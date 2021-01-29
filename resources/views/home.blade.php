@extends('layout/app')

@section('content')
    <script>
        jQuery(function() {
            $('.home').toggleClass('active');
        });

    </script>
    <h1>Home</h1>
@endsection

@section('sidebar')
    @parent
    <p>Appended Side Bar</p>
@endsection
