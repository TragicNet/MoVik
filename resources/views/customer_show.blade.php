<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <a href="customer_create">Insert</a>
    <br />
    {{ session('msg') }}
    <br />
    <table cellspacing=10>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>phone</td>
            <td>address</td>
            <td>created</td>
            <td>updated</td>
        </tr>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->created_at }}</td>
                <td>{{ $customer->updated_at }}</td>
                <td><a href="customer_delete/{{ $customer->id }}">Delete</a></td>
                <td><a href="customer_edit/{{ $customer->id }}">Edit</a></td>
            </tr>
        @endforeach
    </table>
</body>

</html>
