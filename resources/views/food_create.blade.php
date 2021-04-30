<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <a href="/food_index">Back</a>
    <form action="food_submit" method="post">
        @csrf
        <table cellspacing=10>
            <input type="number" name="menu_id" value="null" hidden>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <input type="text" name="img_path" value="public/pizza.jpg" hidden>
            <tr>
                <td>Description</td>
                <td><textarea name="description" required></textarea></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="number" name="price" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>
