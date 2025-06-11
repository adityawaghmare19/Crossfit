<?php 
if(isset($_POST['submit'])){
 
    $email = $_POST['email'];
    
    $password = $_POST['password'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'gym';

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "INSERT INTO clogin(email,password) values ('$email','$password')";
    mysqli_query($conn,$sql);



}




?>





<!DOCTYPE html>
<html>
    <head>
 
        <title></title>

        <link rel="stylesheet" href="login.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@800&display=swap" rel="stylesheet">
       
    </head>
    <body>
        <div class="banner20">

            <div class="navbar">
                <img src="" class="logo">
                <ul>
                    <li><a href="home.html">HOME</a></li>
                    <li><a href="">BLOG</a></li>
                    <li><a href="fitness.html">MEMBERSHIP</a></li>
                    <li><a href="trainers.html">TRAINERS</a></li>
                    <li><a href="enquiry.php">ENQUIRY</a></li>
                    <li><a href="login.html">LOGIN</a></li>

                </ul>

            </div>

        </div>
        
        
        <div class="banner1">
            <h1 class="text1">LOGIN FORM</h1>
         <div class="cont">
            <div class="container">
                <h1 class="text5">Customer Login Form</h1>
                <form id="inquiry-form" action="#" method="POST">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <a href="home.html">
                        <button type="submit" name="submit">Submit</button>
                        </a>
                    </div>
                </form>
            </div>
         </div>    
        </div>
            
        
        
    </body>
</html>