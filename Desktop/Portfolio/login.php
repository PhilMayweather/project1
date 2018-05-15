<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
<style type="text/css">
    body{
        background-color:grey;
        align-content: center
    }
    #div1{
        background-color:skyblue;
        height: 200px;
        width: 350px;
        margin-top: 200px;
        margin-left: 550px;
        position: relative;
        margin: 500 500 0 0;
        border: 1px black solid;
    }
</style>

</head>
<body>
    <div id="div1">
        <form class="form" action="admin.php" method="GET">
            Username: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            keep me logged in:<input type="radio"><br>
            <input type="submit" value="Log in"><br>
            <button><a href="profile.php"> <--back to Portfolio</a></button>
        </form>
    </div>
</body>
</html>