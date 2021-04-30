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
            {{-- <td>img_path</td> --}}
            <td>Description</td>
            <td>Price</td>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                {{-- <td>{{ $item->img_path }}</td> --}}
                <td>{{ $item->description }}</td>
                <td>{{ $item->price }}</td>
                <td><a href="">Order</a></td>
                {{-- <td><a href="food_delete/{{ $item->id }}">Delete</a></td>
                <td><a href="food_edit/{{ $item->id }}">Edit</a></td> --}}
            </tr>
        @endforeach
    </table>
@endsection
