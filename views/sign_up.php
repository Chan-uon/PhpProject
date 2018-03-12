<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
    </head>
    <body>
    <h1><?php echo $_GET['url']; ?> </h1>
    <a href="index.php">Home</a>
    <br />
    <form>
        <table>
            <tr>
                <td>
                    <label for="fname">First name</label>
                </td>
                <td>
                    <input type="text" id="fname" value="first name">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="lname">Last name</label>
                </td>
                <td>
                    <input type="text" id="lname" value="last name">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="username">Username</label>
                </td>
                <td>
                    <input type="text" id="username" value="username">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="userpw">Password</label>
                </td>
                <td>
                    <input type="password" id="userpw" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="userconfirm">Password confirm</label>
                </td>
                <td>
                    <input type="password" id="userconfirm" value="">
                </td>
            </tr>
        </table>
        <input type="submit" value="Submit">
    </form>
    </body>
</html>