<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <a href="customer_show">Back</a>
    <form action="customer_submit" method="post">
        @csrf
        <table cellspacing=10>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone" required></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="address" required></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>
