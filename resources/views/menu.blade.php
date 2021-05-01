@extends('layout/app')

@section('content')
    <script>
        jQuery(function() {
            $('.menu').toggleClass('active');
        });

    </script>
    <h1>Menu</h1>
    <table cellspacing=10>
        <tr>
            <td>Name</td>
            <td></td>
            <td>Description</td>
            <td>Price</td>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td><img src="{{ URL::asset($item->img_path) }}" alt="" height="100px" width="100px"
                        style="object-fit: cover"></td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->price }}</td>
                <td><a href="food_order/{{ $item->id }}">Order</a></td>
            </tr>
        @endforeach
    </table>
@endsection
