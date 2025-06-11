<?php
 $host = 'localhost';
 $username ='root';
 $password = '';
 $dbname = 'subscription_detail';

 $con = mysqli_connect($host,$username,$password,$dbname);
if(isset($_POST['Click']))
{ 
    $cname = $_POST['cname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $blood = $_POST['blood'];
    $addr = $_POST['addr'];
    $trainers = $_POST['trainers'];
    $ptime = $_POST['ptime'];

    $sql = "INSERT INTO subscription_form(cname,age,gender,email,blood,addr,trainers,ptime) values ('$cname','$age','$gender','$email','$blood','$addr','$trainers','$ptime')";
    $query= mysqli_query($con,$sql);

    if ($query) {
        // Form submitted successfully
        // $successMessage = "Form submitted successfully!";
        echo "<script>alert('Form submitted successfully!')</script>";
    }
}
$id="";
if(isset($_GET['id']))
{
    $id=$_GET['id'];
}
$sql_query="SELECT * from subscription WHERE sid = $id";
$myresult=$con->query($sql_query);
?>
<!DOCTYPE html>
    <head>
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="customerform.css">
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
                      
                        <li><a href="fitness.html">MEMBERSHIP</a></li>
                        <li><a href="option.html">TRAINERS</a></li>
                        <li><a href="enquiry.php">ENQUIRY</a></li>
                        <li><a href="login.html">LOGIN</a></li>

                    </ul>
   
                </div>

             

         

        </div>
        <div class="banner1">
            <h1 class="text1">CUSTOMER FORM</h1>
            <p class="text2">FILL UP THE FOLLOWING DETAILS</p>\

            <div class="cont">

                <div class="container">
                    <h2 class="text10">Customer Information</h2>
                    <?php
                if($myresult->num_rows >0)
     {
        while($row = $myresult->fetch_assoc())
        {
      ?>
                    <div class="form-wrapper">
                        <form id="personal-info-form"  method="POST">
                            <h3 class="text11">Personal Information</h3>
                            <div class="form-group">
                            <label for="plan">Plan and Price</label>
                            <input type="text" value="<?php echo $row['month'];?> (&#8377;<?php echo $row['sprice'];?>)"readonly>
                        </div>
                            <div class="form-group">
                                
                                <label for="name">Course:</label>
                                <input type="text" value="YOGA"><br><br>
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="cname" required>
                            </div>
                            <div class="form-group">
                                <label for="age">Age:</label>
                                <input type="number" id="age" name="age" required>
                            </div>
                            <div class="form-group-custom">
                                <label>Gender:</label>&nbsp;
                                <input type="radio" id="male" name="gender" value="male" required>
                                <label for="male">Male</label>&nbsp;
                                <input type="radio" id="female" name="gender" value="female" required>
                                <label for="female">Female</label>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="blood-group">Blood Group:</label>
                                <select id="blood-group" name="blood" required>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="time">Time Slots:</label>
                                <select id="time" name="ptime" required>
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
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <textarea id="address" name="addr" required></textarea>

                            </div>
                            <div class="form-group">
                            <label for="trainers">Trainers(Course)</label>
                            <select name="trainers" id="trainers">
                                <option value="PIYUSH PHALAK (YOGA)">PIYUSH PHALAK (YOGA)</option>
                                <option value="ISHAN DANGRE (YOGA)">ISHAN DANGRE (YOGA)</option>
                                <option value="AMEYA MASURKER (YOGA)">AMEYA MASURKER (YOGA)</option>
                               
                            </select>


                            </div>


                            

                            
                        <!-- </form> -->
                        <!-- <form id="credit-card-info-form" method="POST"> -->
                            <h3 class="text11">Credit Card Information</h3>
                            <div class="form-group">
                                <label for="name-on-card">Name on Card:</label>
                                <input type="text" id="name-on-card" name="name-on-card" required>
                            </div>
                            <div class="form-group">
                                <label for="credit-card-number">Credit Card Number:</label>
                                <input type="number" id="credit-card-number" name="credit-card-number" required>
                            </div>
                            <div class="form-group">
                                <label for="exp-month">Expiration Month:</label>
                                <input type="text" id="exp-month" name="exp-month" required>
                            </div>
                            <div class="form-group">
                                <label for="exp-year">Expiration Year:</label>
                                <input type="text" id="exp-year" name="exp-year" required>
                            </div>
                            <div class="form-group">
                                <label for="cvv">CVV:</label>
                                <input type="password" id="cvv" name="cvv" required>
                                <input type="submit" name="Click" value="Submit">
                                <!-- <button name="Click" onclick="closePopup()">Click</button>
                                <div id="popup" style="display: none;" class="popup">
                                    <p id="popup-message"></p>
                                    <button onclick="closePopup()">Close</button>
                                </div> -->
                            </div>
                        </form>
                    </div>
                </div>
                <?php
        }
  }
  ?>
            
                

                
                    

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
        <script>
    function showPopup(message) {
        var popup = document.getElementById("popup");
        var popupMessage = document.getElementById("popup-message");
        popupMessage.innerHTML = message;
        popup.style.display = "block";
    }

    function closePopup() {
        var popup = document.getElementById("popup");
        popup.style.display = "none";
    }
</script>

    </body>
</html>