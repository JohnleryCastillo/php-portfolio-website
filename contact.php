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
        $hello = "___CONTACT";
        $fname = "ME___";

        $email = "EMAIL";
        $gmail = "yrelnhoj@gmail.com";
        $phone = "PHONE";
        $mynum = "+639917736315";
        $onWeb = "ON THE WEB";
        $linkedin = "LinkedIn | GitHub";
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
  <ul class="cntct">
      <li class="ctcolor"><?php echo $email ?></li>
      <li><?php echo $gmail ?></li>
  </ul>
  <ul class="cntct">
      <li class="ctcolor"><?php echo $phone ?></li>
      <li><?php echo $mynum ?></li>
  </ul>
  <ul class="cntct">
      <li class="ctcolor"><?php echo $onWeb ?></li>
      <li><?php echo $linkedin ?></li>
  </ul>


</div>





</div>
    
</body>
</html>