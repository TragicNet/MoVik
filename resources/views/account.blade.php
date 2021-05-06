@extends('layout/app')

@section('content')
    <script>
        jQuery(function() {
            $('.account').toggleClass('active');
        });

    </script>

    <h1>Account</h1>
    <br> Name: {{ $user->name }}
    <br> Email: {{ $user->email }}
    <br> Phone: {{ $user->phone }}
    <br> Address: {{ $user->address }}
    <br>
    <h2>Orders</h2>
    <table cellspacing=10>
        <tr>
            <td>Sr.No.</td>
            <td>Name</td>
            <td></td>
            <td>Description</td>
            <td>Price</td>
            <td>Date</td>
        </tr>
        <?php $i = 1; ?>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $order->name }}</td>
                <td><img src="{{ URL::asset($order->img_path) }}" alt="" height="100px" width="100px"
                        style="object-fit: cover">
                </td>
                <td>{{ $order->description }}</td>
                <td>{{ $order->price }}</td>
                <td>{{ $order->created_at }}</td>
            </tr>
        @endforeach
    </table>
@endsection
