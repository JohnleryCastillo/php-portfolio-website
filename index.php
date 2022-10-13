<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" >
</head>
<body>

    <?php 

        $contact = "Contact Me";
        $about = "About Me";
        $home = "Home";
        $portfolio = "Portfolio";
        $hello = "Hello! I Am";
        $fname = "Johnlery Castillo";
        $details = " <strong>Future Professional Web Developer & UI Designer </strong> <br>
       <strong>Independent creative developer </strong> from STI College Caloocan <br> Helping start-up and small businesses
       achive high quality websites. ";
        $hireme = "Hire Me Now";
        $pictureko = "img/meee.png";
    
    ?>


<div class="wrapper">
<h1><?php echo $portfolio ?></h1>
<div class="header">
    <ul>
               
       <li><a href="contact.php"><?php echo $contact ?></a></li> 
       <li><a href="about.php"><?php echo $about ?></a></li> 
       <li><a href="index.php"><?php echo $home  ?></a></li>  
    </ul>
    <img class="pic-me" src="<?php echo $pictureko ?>" alt="Mukha ko" >
</div> 


<div class="personDetail">

  <h2><?php echo $hello ?> </h2>
  <h2 class="name"> <?php echo $fname ?> </h2>
  <p><?php echo $details ?></p>

  <a href="contact.php"><button><?php echo $hireme ?></button></a>

</div>





</div>
    
</body>
</html>