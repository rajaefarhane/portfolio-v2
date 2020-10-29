<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>mon portfolio</title>
    <link rel="stylesheet" type="text/css" href="main.css">
  </head>
  <body>
<section class="zoom" id="accueil">

<img src="imbo/mountain1.png" id="layer1">
<img src="imbo/mountain2.png" id="layer2">
<img src="imbo/bird.gif." id="bird">
<img src="imbo/bird.gif." id="bird1">
<img src="imbo/logo.png" id="logo">
<div class="titremoi">
  <div class="sec">
    <h1 class="titre1" data-text="Farhane Rajae"> Farhane Rajae</h1>
  </div>



</div>

</section>

<section >
<?php
 include("effetTitre.php"); ?>


</section>
<section id="apropos">
  <div class="navbar">
  <ul>
      <li class="test"><a href="#accueil">accueil</a></li>
      <li><a href="#apropos">Apropos</a></li>
      <li><a href="#formations">Formations</a></li>
      <li><a href="#projets">Projets</a></li>
      <li><a href="#formations">Compétences</a></li>
      <li><a href="#contact">Contact</a></li>
  </ul>
</div>

  <?php
   include("apropos1.php"); ?>
</section>

<section class="forma" id="formations">

  <?php
   include("formations.php"); ?>
</section>

<section class="formaslide" id="projets">

  <?php
   include("slide.php"); ?>
</section>
<!-- <section class="forma">

  <!-- <?php
   // include("verticalslider.php"); ?> -->
</section>

<section class="forma" id="competences">

  <?php
   include("competences.php"); ?>
</section>

<section class="forma" id="contact">
<a href="#accueil"><img src="img/upload.png" id="srcimg" /></a>

  <?php
   include("contact.php"); ?>
</section>

<section class="foote">
<footer class="foote ">
  <div class="row">
    <div class="nomfooter">
      <p>FARHANE Rajae</p>
      <p class="droit">©2001-2020 01copyright.fr. tous droit reservés.</p>
    </div>
    <div class="col-lg-4">


    </div>
  </div>
  <div class="row">
    <div class="nomfooter1">
      <!-- <img src="img0/up-arrow.png" class="flech"/> -->
        <p class="mes">Mes informations de contact</p><br>
        <span><i class="fas fa-at"></i> 18 rue ERNEST LORY</span>
        <p>21 000 Dijon City</p>
      <span><i class="fas fa-at"></i> rajae19beddi@gmail.com</span>
    </div>


  </div>
</footer>
</section>


<script type="text/javascript">
var layer1 = document.getElementById('layer1')
scroll = window.pageYOffset;
document.addEventListener('scroll', function (e){
var offset = window.pageYOffset;
scroll = offset;
layer1.style.width  = (100 + scroll) + '%';

});

var layer2 = document.getElementById('layer2')
scroll = window.pageYOffset;
document.addEventListener('scroll', function (e){
var offset = window.pageYOffset;
scroll = offset;
layer2.style.width  = (100 + scroll/5) + '%';
layer2.style.left  = scroll/50 + '%';

});
</script>

  </body>
</html>
