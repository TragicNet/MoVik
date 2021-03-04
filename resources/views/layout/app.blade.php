<!DOCTYPE html>
<html lang="en" class="theme-light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/MoVik.ico') }}" />
    <title>MoVik</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- Fonts --}}
    <link href='https://fonts.googleapis.com/css?family=Kalam' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    {{-- JavaScript/jQuery --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js" defer></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>

    <header class="header">
        <a class="logo" href="\home">
            <div class="title">MoVik</div>
            <div class="tagline">Your Food is On the Way</div>
        </a>
    </header>

    @if (session()->has('msg'))
        <script>
            jQuery(function() {
                alert("{{ session('msg') }}");
            })

        </script>
    @endif

    @include('includes.navbar')

    <main>
        @yield('content')

        @include('includes.sidebar')
    </main>

    <div class="scroll-to-top bottom-right">
        <i class="fa fa-chevron-circle-up"></i>
    </div>

</body>

</html>
