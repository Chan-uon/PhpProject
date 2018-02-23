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
        <label for="fname">First name:</label>
        <input type="text" id="fname" value="first name"><br />
        
        <label for="lname">Last name:</label>
        <input type="text" id="lname" value="last name"><br />
        
        <label for="username">Username:</label>
        <input type="text" id="username" value="username"><br />
        
        <label for="userpw">Password:</label>
        <input type="password" id="userpw" value=""><br />
        
        <label for="userconfirm">Password confirm:</label>
        <input type="password" id="userconfirm"value=""><br />
        <input type="submit" value="submit">
    </form>
    </body>
</html>