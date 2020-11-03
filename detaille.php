
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Smooth Scrolling with jQuery</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="detaille.css">

</head>
<body>
<!-- partial:index.partial.html -->
<header>
  <div class="topnav" id="myTopnav">
    <a href="#projet1" class="active">Projet 1</a>
    <a href="#projet2">Projet 2</a>
    <a href="#projet3">Projet 3</a>
    <a href="#projet4">Projet 4</a>
      <a href="#projet5">Projet 5 & 6</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>


</header>
<div  id="projet1">
<section class="hero" id="top">
  <div class="container">
    <h1></h1><br><br><br>
    <h1 class="mb-5 display-4" >PROJET 1</h1>
    <div class="card-deck">
      <div class="card">
        <img src="img/benice1.png"   class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">sujet site</h5>
          <p class="card-text">le sujet de site c'est Égalité professionnelle Femmes / Hommes, ou on a traité le sujet de Discrimination à raison du sexe / harcèlement,on a travailler en groupe de 3 personne.</p>

        </div>
      </div>
      <div class="card">
        <img src="img/i1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">les pages de site  </h5>
          <p class="card-text">page accueil  /  page liste articles   / page article</p><br>
          <p class="card-text">page medias   /    recherche  /  Commentaire </p><br>
          <p class="card-text"> page 404.</p><br>
        </div>
      </div>
      <div class="card">
        <img src="img/couleur.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">charte graphique</h5>
          <p class="card-text"> pour les couleurs c'est : Bleu nuit : #040032  Rouge : #ED1B24 Saumon : #EC8E6E </p><br>
          <p class="card-text">  Et pour la typographie c'est : Montserrat : ExtraBold  /  Montserrat : Medium  / Montserrat : SemiBold</p>
        </div>
      </div>
    </div>
</div>
</section>
<p></p><br>
<section class="features" id="features">
  <div class="container">
    <h1 class="mb-5 display-4">CONTENU</h1>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
    <div class="row">
      <div class="col-md-4">
        <h3>logo</h3>
        <img src="img/logo/logo_navbar.png" class="card-img-top" alt="...">
      </div>
      <div class="col-md-4">
        <h3>animation 1</h3>
        <img src="img/im1.png" class="card-img-top" alt="...">
      </div>
      <div class="col-md-4">
        <h3>animation 2</h3>
              <img src="img/im2.gif" class="card-img-top" alt="...">
      </div>
    </div>
  </div>

    <div class="carousel-item ">
<div class="row">
  <div class="col-md-4">
    <h3>animation 3</h3>
          <img src="img/m3.png" class="card-img-top" alt="...">
  </div>
  <div class="col-md-4">
    <h3>animation 4</h3>
          <img src="img/im4.png" class="card-img-top" alt="...">
  </div>
  <div class="col-md-4">
    <h3>animatio 5</h3>
          <img src="img/im5.png" class="card-img-top" alt="...">
  </div>
</div>
  </div>

<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
  </div>
</div>
</section>

<section class="pricing" id="pricing">
  <div class="container">

    <h1 class="mb-5 display-4">Wireframes</h1>
    <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-2">
      <a href="https://ibb.co/LJrzsXD"><h6>la page d'accueil</h6></a>
    </div>
    <div class="col-lg-2">
      <a href="https://ibb.co/z2hhgfr"><h6>la page S'informer</h6></a>
    </div>
    <div class="col-lg-2">
      <a href="https://ibb.co/Jvr84Py"><h6>la page <br>Médias</h6></a>
    </div>
    <div class="col-lg-2">
      <a href="https://ibb.co/fF7J9rv"><h6>la page Discrimination</h6></a>
    </div>
    <div class="col-lg-2">
        <a href="https://ibb.co/pLYzZLM"><h6>la page <br>article</h6></a>
    </div>
    <div class="col-lg-1">
    </div>
</div>
</div>
</section>
<section class="features" id="features">
  <div class="container">
    <h1 class="mb-5 display-4">Organisation du projet</h1>
    <div class="row no-gutters">
      <div class="col-md-4">
        <div class="card bg-info">
          <div class="card-header bg-primary text-white">
        Groupes
          </div>
          <div class="card-block">
            <h4 class="card-title titre">Groupe de trois</h4>
            <p class="card-text">
              <ol>
               <li>MOI(farhane rajae)</li>
               <li>kaoutar</li>
               <li>Charles.</li>
            </ol>
            </p>

          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card featured-price bg-inverse text-white">
          <div class="card-header bg-danger text-uppercase">
            organistion de travaille
          </div>
          <div class="card-block">
            <h4 class="card-title titre">le partage des pages</h4>
            <p class="card-text">
              <ol>
               <li>moi : page s'informer/page discrimination/page harcélement/page article/page 404/page recherche</li>
               <li>kaoutar : page d'accueil</li>
               <li>Charles : page Médias</li>
              </ol>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card bg-info">
          <div class="card-header bg-primary text-white">
            Langages
          </div>
          <div class="card-block">
            <h4 class="card-title titre">    wordpresse</h4>
            <p class="card-text">
              <ol>
                 <li>php </li>
                 <li>html</li>
                 <li>CSS</li>
              </ol>
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pricing" id="pricing">
  <div class="container">

    <h1 class="mb-5 display-4">Maquettes de mes pages partie desctop</h1>
    <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-2">
      <a href="https://ibb.co/6Rwthgt"><h6>la page s'informer</h6></a>
    </div>
    <div class="col-lg-2">
      <a href="https://ibb.co/q0h3bJd"><h6>la page discrimination</h6></a>
    </div>
    <div class="col-lg-2">
      <a href="https://ibb.co/fDQCrKF"><h6>la page <br>article</h6></a>
    </div>
    <div class="col-lg-2">
      <a href="https://ibb.co/JzXQ03h"><h6>la page 404</h6></a>
    </div>
    <div class="col-lg-2">
        <a href="https://ibb.co/6Rwthgt"><h6>la page <br>recherche</h6></a>
    </div>
    <div class="col-lg-1">
    </div>
</div>

    <h1 class="mb-5 display-4">Maquettes de mes pages partie mobile</h1>
    <div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-2">
      <a href="https://ibb.co/4f2n8sf"><h6>la page s'informer</h6></a>
    </div>
    <div class="col-lg-2">
      <a href="https://ibb.co/YNkMQxj"><h6>la page discrimination (article)</h6></a>
    </div>
    <div class="col-lg-2">
      <a href="https://ibb.co/rG7dRYd"><h6>la page <br>search</h6></a>
    </div>
    <div class="col-lg-2">
      <a href="https://ibb.co/Rgzm2Zc"><h6>la page 404</h6></a>
    </div>

    <div class="col-lg-2">
    </div>
</div>
</div>
<a href="https://rajaef.promo-42.codeur.online/be-nice/"><h1 style="color:red;margin-top:10vh;">visiter le site en ligne<h1></a>
</section>
</div>
<div id="projet2">
<section class="features" id="features" style="color:black;">
  <div class="container">
    <h1 class="mb-5 display-4" style="color:white;">PROJET 2</h1>
    <div class="card-deck">
      <div class="card">
        <img src="img/ima2.jpg"   class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">sujet du projet</h5>
          <p class="card-text">c'est ma premiére intagration que j'ai fais ou j'ai choisi une maquette sur internet et j'ai inégrer en version mobile et desctop</p>

        </div>
      </div>
      <div class="card">
        <img src="img/ima2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">les pages de site  </h5>
          <p class="card-text">le site c'est de one page </p><br>

        </div>
      </div>
      <div class="card">
        <img src="img/ima2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">la maquette</h5>
          <p class="card-text"> c'est une maquette sur photoshope en psd, et le travaille c'est individuel pour une durée d'une semaine</p><br>

        </div>
      </div>
    </div>
</div>
<a href="https://rajaef.promo-42.codeur.online/integrationMaquette/index.php"><h1 style="color:red;margin-top:10vh;margin-left:35vw;">visiter le site en ligne<h1></a>
</section>
</div>
<div  id="projet3">
<section class="hero" id="top">
  <div class="container">
    <h1 class="mb-5 display-4">PROJET 3</h1>
    <div class="card-deck">
      <div class="card">
        <img src="img/ima4.jpg"   class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">sujet du projet</h5>
          <p class="card-text">c'est une maquette proposé par notre formateur afin de la fair en bootstra et css .</p>

        </div>
      </div>
      <div class="card">
        <img src="img/ima4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">les pages de site  </h5>
          <p class="card-text">c'est un site one page</p><br>

        </div>
      </div>
      <div class="card">
        <img src="img/ima4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">la maquette</h5>
          <p class="card-text"> c'est une maquette sur photoshop et le travaile c'est individuel afin de reussir a fair le pixel perfect</p><br>

        </div>
      </div>
    </div>
</div>

<a href="https://rajaef.promo-42.codeur.online/blue/index.php"><h1 style="color:red;margin-top:10vh;margin-left:35vw;">visiter le site en ligne<h1></a>
</section>
</div>
<div id="projet4">
<section class="features" id="features" style="color:black;">
  <div class="container">
    <h1 class="mb-5 display-4" style="color:white;">PROJET 4</h1>
    <div class="card-deck">
      <div class="card">
        <img src="img/ima1.jpg"   class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">sujet du projet</h5>
          <p class="card-text">c'est un projet en binome ou on a choisie la maquette et on divisé le projet en deux partie</p>

        </div>
      </div>
      <div class="card">
        <img src="img/ima1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">les pages de site  </h5>
          <p class="card-text">le site c'est de one page </p><br>

        </div>
      </div>
      <div class="card">
        <img src="img/ima1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">la maquette</h5>
          <p class="card-text"> c'est une maquette sur adobe xd en psd, et le travaille c'est en binome avec PAULINE ou j'ai fait la partie front(integration)+le back-end ou j'ai fais la partie connexion de l'admin et pauline a pris une partie de site pour la rendre dynamique avec la bas de données et moi j'ai pri son code et j'ai fais la boucle php pour fair la liaison entre le front et le back</p><br>

        </div>
      </div>
    </div>
</div>
<a href="https://rajaef.promo-42.codeur.online/integrationMaquette/index.php"><h1 style="color:red;margin-top:10vh;margin-left:35vw;">visiter le site en ligne<h1></a>
</section>
</div>
<div  id="projet5 ">
<section class="hero" id="top" >
  <div class="container">
    <h1 class="mb-5 display-4">PROJET 5 et 6</h1>
    <div class="card-deck">
      <div class="card">
        <img src="img/tdou5.jpg"   class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">sujet du projet</h5>
          <p class="card-text">c'est un projet en groupe de 4 personne .</p>

        </div>
      </div>
      <div class="card">
        <img src="img/tdou4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">les pages de site  </h5>
          <p class="card-text">page accueil/ page liste/page details/page panier/page a propos/</p><br>


        </div>
      </div>
      <div class="card">
        <img src="img/tdou5.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">la maquette</h5>
          <p class="card-text"> l'autre groupe a fais la maquette ou chaqu'un il a fais une page et nous on a integrer leur pages  </p><br>

        </div>
      </div>
    </div>
</div>
</section>
<p></p><br>
<section class="features" id="features">
  <div class="container">
    <h1 class="mb-5 display-4">Organisation du projet</h1>
    <div class="row no-gutters">
      <div class="col-md-4">
        <div class="card bg-info">
          <div class="card-header bg-primary text-white">
        Groupes
          </div>
          <div class="card-block">
            <h4 class="card-title titre">Groupe de quatre</h4>
            <p class="card-text">
              <ol>
               <li>MOI(farhane rajae)</li>
               <li>kaoutar</li>
               <li>Charles.</li>
               <li>Dimitri</li>
            </ol>
            </p>

          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card featured-price bg-inverse text-white">
          <div class="card-header bg-danger text-uppercase">
            organistion de travaille
          </div>
          <div class="card-block">
            <h4 class="card-title titre">le partage des pages</h4>
            <p class="card-text">
              <ol>
               <li>moi : page details/page panier</li>
               <li>kaoutar : page a propos</li>
               <li>Charles : page accueil</li>
               <li>Charles : page liste</li>
              </ol>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card bg-info">
          <div class="card-header bg-primary text-white">
            les outils
          </div>
          <div class="card-block">
            <h4 class="card-title titre">    Langages</h4>
            <p class="card-text">
              <ol>
                 <li>HTML </li>
                 <li>CSS</li>
                 <li>JavaScript</li>
              </ol>
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>
<a href="https://rajaef.promo-42.codeur.online/detaille/details.php"><h1 style="color:red;margin-top:10vh;margin-left:35vw;">visiter le site en ligne de la page details<h1></a>
<a href="https://rajaef.promo-42.codeur.online/panier/"><h1 style="color:red;margin-top:10vh;margin-left:35vw;">visiter le site en ligne de la page panier<h1></a>
</section>



</div>
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
