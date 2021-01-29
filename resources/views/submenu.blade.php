@extends('layout/app')

@section('content')
    <script>
        $(document).ready(function() {
            $('.menu').toggleClass('active');
        });

    </script>
    <h1>Sub Menu</h1>
@endsection
