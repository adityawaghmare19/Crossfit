<?php 
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'gym';

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "INSERT INTO customer_enq(name,email,phone,message) values ('$name','$email','$phone','$message')";

    $query=mysqli_query($conn,$sql);
    if ($query) {
        // Form submitted successfully
        // $successMessage = "Form submitted successfully!";
        echo "<script>alert('Form submitted successfully!')</script>";
    }




}




?>




<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="enquiry.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    </head>
    <body>
        <div class="banner20">

            <div class="navbar">
                <img src="" class="logo">
                <ul>
                    <li><a href="home.html">HOME</a></li>
                   
                    <li><a href="option.html">MEMBERSHIP</a></li>
                    <li><a href="trainers.html">TRAINERS</a></li>
                    <li><a href="enquiry.php">ENQUIRY</a></li>
                    <li><a href="login_form.php">LOGIN</a></li>

                </ul>

            </div>

        </div>
        <div class="banner1">
            <h1 class="text1">CUSTOMER ENQUIRY FORM</h1>
            <P class="text2">ENTER YOUR DOUBTS AND WE WILL RESPOND TO IT</P>
         <div class="sub">
            <div class="container">
                <h1 class="formhead">Customer Enquiry Form</h1>
                <form id="inquiry-form" action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone No:</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit">Submit</button>
                    </div>
                </form>
            </div>
         </div> 

        </div>



        <div class="footer-basic">
            <footer>
               
              <ul class="list-inline">
                  <li class="list-inline-item"></a><i class="fa-brands fa-instagram"></i></li>
                  <li class="list-inline-item"><i class="fa-brands fa-facebook"></i></li>
                  <li class="list-inline-item"><i class="fa-brands fa-twitter"></i></li>
                  <li class="list-inline-item"><i class="fa-solid fa-lock"></i></li>
              </ul>
              <p class="copyright">CROSSFIT © 2023</p>
          </footer>
      </div>

        <script src="" async defer></script>
    </body>
</html>