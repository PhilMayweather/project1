<?php 
require 'connect.php';
// require("inculdes/connect.php")

$email = 'oluluphilip@gmail.com';
$sql = "SELECT * FROM porto WHERE email = '$email'";
$query = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Olulu | Front-end Developer</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="profile.css"> -->
    <style type="text/css">
                body{
            background-image: url('background.jpg');
            text-align: left
        }
        #logo-img{
            width: 70px;
            height: auto;
            border-radius: 20%;
        }
        #div1{
            width:100%;
			margin: 0 auto;
			height: 70px;
            background-color: rgb(48, 48, 48);
            
        }
        .logo{
            float: left;
            margin-left: 50px;
        }
        #div2{
            width: 0 auto;
            margin: 0 auto;
            height: 400px;
            background-image: url('macbook.jpg');
            background-size: 100% 100%;
            border: 1px solid black; 
            text-align: center;
            background-attachment: fixed;
        }
        #div2 h1{
            color: white;
            position: relative;
        }
        #div2 h4{
            color: whitesmoke;
            position: relative;;
            height: 20%;
        }
        .button {
            background-color: #1111;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        #div3{
            width: 100%;
            margin: 0 auto;
            height: 100px;
            background-color: rgba(47, 48, 44, 0.027);
        }
        .sub{
            text-align: center;
            padding-top: 30px;
        }
        div4 inf{
            position: relative;
        }
        p{
            text-align: center;
        }
        foot{
            height: 100%;
            margin: 0 auto;
            background-color: black;
            text-decoration-color: white;
            position: fixed;
        }
        .container{
            display: flex;
            height: 100%;
            text-align: center
        }
        .container2{
            display: flex;
            text-align: center;
            margin-left: 60px;
            border
        }
        ul li a{
            display: flex;
            float: right;
            padding: 4px;
            margin-top: 0;
            font-size: 20px;
            color: black
        }
        a:hover{
            background-color: white;
            border-radius: 5%;
            
        }
        ul li{
            list-style: none;
			display: inline;
        }
        ul{

            float: right;
            padding: 5px
        }
        #do{
            display: flex;
            height: 400px;
            /* border: 1px grey solid; */
            border-radius: 20px;
            text-align: center
        }
        .info{
            width: 500px;
            padding: 5px;
            margin: 5px;
            border-radius: 20px;
        }
        .inf{
            width: 500px;
            padding: 40px;
            margin: 5px;
            transition: transform .5s;
        }
        .inf:hover{
            transform: scale(1.5);

        }
        #do div{
            margin: 50px;
            padding: 50px;
            border: 1px black solid;
            background-color: white
        }
        #done{
            display: flex;
            height:300px;
            border: 1px grey solid;
            border-radius:20px;
            positon: relative;
            margin: 100px;
            padding: 100px;
            background-image: url('programmer.jpg');
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        figure{
            margin: 0 0 0 0;
        }
        h1{
            margin-top: 0;
            /* margin-bottom: -200px; */
            text-align: center;
            text-decoration: underline
        }
    </style>
</head>
<body>
    <header>
        <div id="div1">
            <ul>
                <li><a href="login.php">Admin Login</a></li>
                <li><a href="">Social</a></li>
                <li><a href="">Projects</a></li>
                <li><a href="">Home</a></li>
                
            </ul>
        </div>
    </header>
    <div id="div2">
        <h1>Hi, my name is Philip. I'm a Front-end Developer living in Port-Harcourt, R/S.</h1>
        <h4>Front-end perfection? Your search ends here!</h4>
        <img id="logo-img" src="biopic.jpg">
        <div>
            <a class="link" href="", onclick="alert('Call Me on: 07064998471')">Get to know me</a>
        </div>
    </div>
    <div id="div3">
        <div class="sub">
            Get updates on my projects:
            <input type="text" value="enter e-mail">
            <button class="button" type="submit">Get Updates</button>
        </div>
    </div>
    <div id="do">
        <div class="info" >
            <figure><img src="designer.svg" alt=""><strong> CONTACT INFO </strong></figure>
            
            <p>Facebook:<?php echo $row["facebook"];?><br>Twitter:<?php echo $row["twitter"];?><br>Instagram:<?php echo $row["instagram"];?></p>
        </div>
        <div class="info" >
            <figure><img src="frontend.svg" alt=""><strong>PERSONAL INFO</strong></figure>
            <p>Name:Olulu Philip</p>
        </div>
        <div class="info" >
            <figure><img src="mentor.svg" alt=""><strong>ABOUT ME</strong></figure>
            <p>I'm a Front-end developer<br>currently working with OlotuSquare.<br> I build simple and dynamic websites<br> for best UI/UX.</p>
        </div>
    </div>
    <h1>My Projects</h1>
    <div id="done">
        <div class="inf">
            <img src="one.jpg" alt="">
        </div>
        <div class="inf" >
            <img src="two.jpg" alt="">
        </div>
        <div class="inf" >
            <img src="three.jpg" alt="">
        </div>
        <div class="inf">
            <img src="four.jpg" alt="">
        </div>
    </div>
    <footer id="foot"><p>2018 &copy; copyright | OLOTU SQUARE Web Design</p></footer>
</body>
</html>