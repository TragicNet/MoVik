<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <a href="/food_create">Insert</a>
    <br />
    {{ session('msg') }}
    <br />
    <table cellspacing=10>
        <tr>
            <td>id</td>
            <td>menu_id</td>
            <td>name</td>
            <td>img_path</td>
            <td>description</td>
            <td>price</td>
            <td>created</td>
            <td>updated</td>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->menu_id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->img_path }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
                <td><a href="food_delete/{{ $item->id }}">Delete</a></td>
                <td><a href="food_edit/{{ $item->id }}">Edit</a></td>
            </tr>
        @endforeach
    </table>
</body>

</html>
