<?php 
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $ttype = $_POST['ttype'];
    $time = $_POST['time'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'gym';

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "INSERT INTO admission(name,age,gender,email,phone,ttype,time) values ('$name','$age','$gender','$email','$phone','$ttype','$time')";

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
                    <li><a href="diet.php">DIET</a></li>
                    <li><a href="trainers.html">TRAINERS</a></li>
                    <li><a href="enquiry.php">ENQUIRY</a></li>
                    <li><a href="login_form.php">LOGIN</a></li>

                </ul>

            </div>

        </div>
        <div class="banner1">
            <h1 class="text1">SHOW YOUR INTEREST BY FILLING THE FORM</h1>
            <P class="text2">BEGIN YOUR FITNESS JOURNEY BY FILLING THE FORM</P>
         <div class="sub">
            <div class="container">
                <h1 class="formhead">Admission Form</h1>
                <form id="inquiry-form" action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="age">Age:</label>
                        <input type="text" id="age" name="age" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <input type="text" id="gender" name="gender" required>
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
                    <!-- <select name="cars" id="cars">
                     <option value="volvo">Volvo</option>
                     <option value="saab">Saab</option>
                     <option value="mercedes">Mercedes</option>
                     <option value="audi">Audi</option>
                     </select> -->

                     <div class="form-group">
                     <label for="message">Training type</label>
                                <select id="ttype" name="ttype" required>
                                    <option value="WEIGHT TRAINING">WEIGHT TRAINING</option>
                                    <option value="Calisthenics">CALISTHENICS</option>
                                    <option value="YOGA">YOGA</option>
                                    
                                </select>
                            </div>



                     <div class="form-group">
                     <label for="message">Prefered Timings</label>
                                <select id="time" name="time" required>
                                <option value="6AM-7AM">6AM-7AM</option>
                                    <option value="7AM-8AM">7AM-8AM</option>
                                    <option value="8AM-9AM">8AM-9AM</option>
                                    <option value="9AM-10AM">9AM-10AM</option>
                                    <option value="5PM-6PM">5PM-6PM</option>
                                    <option value="6PM-7PM">6PM-7PM</option>
                                    <option value="7PM-8PM">7PM-8PM</option>
                                    <option value="8PM-9PM">8PM-9PM</option>
                                    
                                </select>
                            </div>


                   


                        <!-- <label for="message">Training type</label>
                        <textarea id="message" name="ttype" placeholder="e.g.Weight Training" rows="4" required></textarea> -->
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