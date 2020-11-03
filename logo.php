
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Smooth Scrolling with jQuery</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="css/logo.css">

</head>
<body>
<!-- partial:index.partial.html -->
<header>
  <div class="topnav" id="myTopnav">
    <a href="#projet1" class="active">logo 1 portfolio</a>
      <a href="#projet2" >logo be-nice</a>
      <a href="#projet3" >logo explorateure de fichier</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>


</header>
<div  id="projet1">
<section class="hero" id="top">
  <div class="container">
    <h1></h1><br><br><br>
    <h1 class="mb-5 display-4" >Mes logo de portfolio</h1>
    <div class="card-deck">
      <div class="card">
        <img src="img/logo/logo4.png"   class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">logo 1</h5>
          <p class="card-text">c'est la version finale de mon logo de portfolio c'est le mélange des couleurs gris et blanc avec un ambre</p>

        </div>
      </div>
      <div class="card">
        <img src="img/logo/logo1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">logo 2 </h5>
          <p class="card-text">logo test pour mon portfolio</p><br>
        </div>
      </div>
      <div class="card">
        <img src="img/logo/logo2.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">logo 3</h5>
          <p class="card-text">logo test de mon portfolio </p>
        </div>
      </div>
      <div class="card">
        <img src="img/logo/logo3.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">logo 3</h5>
          <p class="card-text">logo test de mon portfolio </p>
        </div>
      </div>
    </div>
    <div class="container" id="projet2">
      <h1></h1><br><br><br>
      <h1 class="mb-5 display-4" >Mes logo de site wordpresse be-nice</h1>
      <div class="card-deck">
        <div class="card">
          <img src="img/logo/log1.png"   class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">logo 1</h5>
            <p class="card-text">c'est mon logo pour le site wordpresse be-nice version 1</p>
          </div>
        </div>
        <div class="card">
          <img src="img/logo/log2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">logo 2 </h5>
            <p class="card-text">c'est mon logo pour le site wordpresse be-nice version 2</p><br>
          </div>
        </div>
</div>
</section>
<p></p><br>
</div>

<div class="container" id="projet3">
  <h1></h1><br><br><br>
  <h1 class="mb-5 display-4" >Mes logo de l'explorateur de fichier</h1>
  <div class="card-deck">
    <div class="card">
      <img src="img/logo/logoexplorateur.png"   class="card-img-top t" alt="...">
      <div class="card-body">
        <h5 class="card-title">logo 1</h5>
        <p class="card-text">c'est mon logo pour le projet de l'explorateur de fichier</p>

      </div>
    </div>


</div>
</section>
<p></p><br>

</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</script><script  src="script.js"></script>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
