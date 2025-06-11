<!-- <?php
// $host = 'localhost';
// $username ='root';
// $password = '';
// $dbname = 'subscription_detail';

// $con = mysqli_connect($host,$username,$password,$dbname);

// $sql="SELECT * FROM subscription WHERE sid BETWEEN 9 AND 12 ";
// $all_sub=$con->query($sql);
?> -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="packages.css">
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
                        <li><a href="login.php">LOGIN</a></li>

                    </ul>
   
                </div>

       </div>
      
        <div class="text10" > <!--card-->
          <p>WEIGHT TRAINING</p>
          <BR>
          <P>The weight training refers to the training type that includes working out and lifting weight , unlike the calesthenic where only body weight is used for training</P>
          
        <br>
       <hr>
       <br>

        </div><!--card-->

      

        <div class="banner3">
     
              <div class="main_container">
                   <div class="slideshow-container">
   
                     <!--first img  -->
                     <div class="mySlides fade">
                       <img src="img/muscular-man-barbell-bicep-curls.webp" style="width:500px"  >

                     </div>
                     <!--second img  -->
                     <div class="mySlides fade">
                       <img src="img/mandumbbells.webp" width="500px" height="323px"  >
         
                     </div>
                     <!--third img  -->
                     <div class="mySlides fade">
                       <img src="img/liftlift.jpg" style="width:500px">
         
                     </div>

                     <!--fourth img  -->
                     <div class="mySlides fade">
                        <img src="img/leg-workouts-for-men-7-best-7.jpg" style="width:500px">
        
                        </div>
     
       <!-- Next and previous buttons -->
       <a class="prev" onclick="plusSlides(-1)">&#10094;</a>

       <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>  <!-- slide show -->


    <p class="info">Weight training is a type of strength training that uses weights for resistance. 
      This could be weight machines or free weights, like dumbbells or barbells, at home or a gym. 
      It stresses and strengthens your muscles over time to grow
    <pre class="info2">Weight training also improves:
    -Blood pressure
    -Blood sugar (diabetes)
    -Brain health
    -Bone density
    -Cholesterol
    -Chronic pain
    -Heart disease</pre>
      <!-- <br>2 Ang the bath under the waterfall.
      <br>3 The area continues to attract tou.</p> -->
  </div>    
 <br>
  <div class="text10" > <!--card-->
        
          <P>Start your Weight Training Program !!</P>
</div>
           
  <a href="admission.php"> <button class="button3" >ENROLE NOW</button> </a>

        </div>


      <!-- footer -->
      <div class="footer-basic">
            <footer>
               
              <ul class="list-inline">
                  <li class="list-inline-item"></a><i class="fa-brands fa-instagram"></i></li>
                  <li class="list-inline-item"><i class="fa-brands fa-facebook"></i></li>
                  <li class="list-inline-item"><i class="fa-brands fa-twitter"></i></li>
                  
              </ul>
              <p class="copyright">CROSSFIT © 2024</p>
          </footer>
      </div>
      

        
      <script>
    let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
showSlides(slideIndex = n);
}

function showSlides(n) {
let i;
let slides = document.getElementsByClassName("mySlides");
let dots = document.getElementsByClassName("dot");
if (n > slides.length) {slideIndex = 1}
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";
}
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " active";
}



   
</script>
    </body>
</html>