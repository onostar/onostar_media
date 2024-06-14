
<?php
  
  include "header.php";

?>




<br><br><br>
<br>
<!DOCTYPE html>
<html>
<head>
  <title>book appointment</title>
   <!-- font awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


   <!-- custom css file link -->
     <link rel="stylesheet" href="style.css">
     
</head>
<body>
  
  <!-- appointment section starts -->

<section class="appointment" id="appointment">

  <h1 class="heading"> <span>book appointment</span> now </h1>

    <div class="row">

     <div class="image">
       <img src="image/app1.png">
     </div>

     <form action="" method="post">

       <h3>make appointment</h3>
       <input type="text"name="name" placeholder="your name" class="box">
       <input type="tel"name="number" placeholder="your number" class="box">
       <input type="email"name="email" placeholder="your email" class="box">
       <input type="date"name="date"  class="box">
       <input type="submit"name="submit" value="appointment now" class="btn" >
       

     </form>

     <!-- <div class="box">
      <h3>contact info</h3>
       <i class="fas fa-phone"></i>+2348033367202
       <i class="fas fab fa-whatsapp"></i>+2347041865291
 
          <i class="fas fa-envelope"></i>elroid.r.lab@gmail.com
         <i class="fas fa-map-marker-alt"></i><p> 10, james watt road,benin city, edo state</p>
         <i class="fas fa-map-marker-alt"></i><p>branch address: ugbor plaza opp. ugbor market,GRA benin city</p>
         <p>branch number: 09055229163</p>
    </div> -->


    </div>

</section>

<!-- appointment section ends -->

<br>

<?php

include "footer.php";

?>




<script src="script.js"></script>
</body>
</html>
