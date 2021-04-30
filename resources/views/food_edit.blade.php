<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <a href="/food_index">Back</a>
    <form action="{{ route('food_update', [$item->id]) }}" method="post">
        @csrf
        <table cellspacing=10>
            <input type="number" name="menu_id" value="{{ $item->menu_id }}" hidden>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="{{ $item->name }}" required></td>
            </tr>
            <input type="text" name="img_path" value="{{ $item->img_path }}" hidden>
            <tr>
                <td>Description</td>
                <td><textarea name="description" required>{{ $item->description }}</textarea></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="number" name="price" value="{{ $item->price }}" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>
