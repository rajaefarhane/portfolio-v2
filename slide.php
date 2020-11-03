<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Flex &amp; Grid Photography Slider</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'><link rel="stylesheet" href="css/slide.css">
</head>
<body>
<!-- partial:index.partial.html -->
<!-- I eventually ended up using kitten images since
these are google images of couples. Enjoy :D -->
<div class="texthoriz1"><h2>Réalisations</h2>
</div>

<div class="texthorizs"><h2>Réalisations</h2>
</div>
<div class="contenuslide ">
  <!-- <div class="textformation">
  <h2 >Formations</h2>
</div> -->
<section class="portfolio-section">
  <div class="portfolio-slider">
    <div class="portfolio-slider__left-cont">
      <p class="portfolio-slider__left-cont__title">
        mes realisations
      </p>

      <div class="portfolio-slider__left-cont__name-cont">
        <p class="portfolio-slider__left-cont__name-cont__name">
          <span class="active"><a href="detaille.php">afficher plus</a></span>
          <span><a href="backend.php">afficher plus</a></span>
          <span><a href="logo.php">afficher plus</a></span>
          <span><a href="maquette.php">afficher plus</a></span>
          <span><a href="detaille.php">afficher plus</a></span>
        </p>

        <div class="portfolio-slider__left-cont__name-cont__controls">
          <i class="portfolio-slider__left-cont__name-cont__controls__prev">
            <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M-2.09808e-05 4.47761L10.8333 0V10L-2.09808e-05 4.47761Z" fill="#120E4D"/>
            </svg>
          </i>
          <i class="portfolio-slider__left-cont__name-cont__controls__next">
            <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.8333 4.47761L-7.62939e-06 0V10L10.8333 4.47761Z" fill="#120E4D"/>
            </svg>
          </i>
        </div>
      </div>


      <div class="portfolio-slider__left-cont__grid">
        <div class="portfolio-slider__left-cont__grid__copy">
          <p class="active">
          Intégration maquette avec HTML/CSS/JavaScript/Bootstrap
          </p>
          <p>
            Développement des API avec PHP/PDO/MYSQLI
          </p>
          <p>
            Realisation deS logo sur photoshop/adobe XD
          </p>
          <p>
            Réalisation des maquettes sur photoshop et adobe XD
          </p>
          <p>
            Integration des maquettes sur wordpresse .
          </p>
        </div>

        <div class="portfolio-slider__left-cont__grid__person js-person active">
          <h1 class="tit1 active">Intégration</h1>
        </div>

        <div class="portfolio-slider__left-cont__grid__person js-person">
            <h1 class="tit1">Back-End</h1>
        </div>

        <div class="portfolio-slider__left-cont__grid__person js-person">
          <h1 class="tit1">Logo</h1>
        </div>

        <div class="portfolio-slider__left-cont__grid__person js-person">
          <h1 class="tit1">Maquette</h1>
        </div>

        <div class="portfolio-slider__left-cont__grid__person js-person">
      <h1 class="tit1">wordpresse</h1>
        </div>
      </div>
    </div>

    <div class="portfolio-slider__image-slider-cont">
      <div class="portfolio-slider__image-slider-cont__slider active">
        <div class="portfolio-slider__image-slider-cont__slider__controls-cont">
          <i class="portfolio-slider__image-slider-cont__slider__controls-cont__prev">
            <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M-2.09808e-05 4.47761L10.8333 0V10L-2.09808e-05 4.47761Z" fill="#120E4D"/>
            </svg>
          </i>
          <p class="portfolio-slider__image-slider-cont__slider__controls-cont__index">
            <span class="js-current-image-num">1</span>
            /
            <span class="js-total-image-num">4</span>
          </p>
          <i class="portfolio-slider__image-slider-cont__slider__controls-cont__next">
            <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.8333 4.47761L-7.62939e-06 0V10L10.8333 4.47761Z" fill="#120E4D"/>
            </svg>
          </i>
        </div>
        <!-- les images a bouger -->
       <img src="img/benice1.png" alt="" class="js-slide active" />
       <img src="img/ima2.jpg" alt="" class="js-slide" />
        <img src="img/ima4.jpg" alt="" class="js-slide" />
        <img src="img/ima1.jpg" alt="" class="js-slide" />
        <img src="img/tdou4.jpg" alt="" class="js-slide" />
        <img src="img/tdou5.jpg" alt="" class="js-slide" />
      </div>

      <div class="portfolio-slider__image-slider-cont__slider">
        <div class="portfolio-slider__image-slider-cont__slider__controls-cont">
          <i class="portfolio-slider__image-slider-cont__slider__controls-cont__prev">
            <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M-2.09808e-05 4.47761L10.8333 0V10L-2.09808e-05 4.47761Z" fill="#120E4D"/>
            </svg>
          </i>
          <p class="portfolio-slider__image-slider-cont__slider__controls-cont__index">
            <span class="js-current-image-num">1</span>
            /
            <span class="js-total-image-num">3</span>
          </p>
          <i class="portfolio-slider__image-slider-cont__slider__controls-cont__next">
            <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.8333 4.47761L-7.62939e-06 0V10L10.8333 4.47761Z" fill="#120E4D"/>
            </svg>
          </i>
        </div>

        <img src="img/ins1.jpg" alt="" class="js-slide active" />
        <img src="img/backrest1.jpg" alt="" class="js-slide" />
        <img src="img/capture.jpg" alt="" class="js-slide" />
        <img src="img/ima3.jpg" alt="" class="js-slide" />
        <img src="img/multiplication1.jpg" alt="" class="js-slide" />
        <img src="img/form.png" alt="" class="js-slide" />
      </div>

      <div class="portfolio-slider__image-slider-cont__slider">
        <div class="portfolio-slider__image-slider-cont__slider__controls-cont">
          <i class="portfolio-slider__image-slider-cont__slider__controls-cont__prev">
            <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M-2.09808e-05 4.47761L10.8333 0V10L-2.09808e-05 4.47761Z" fill="#120E4D"/>
            </svg>
          </i>
          <p class="portfolio-slider__image-slider-cont__slider__controls-cont__index">
            <span class="js-current-image-num">1</span>
            /
            <span class="js-total-image-num">3</span>
          </p>
          <i class="portfolio-slider__image-slider-cont__slider__controls-cont__next">
            <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.8333 4.47761L-7.62939e-06 0V10L10.8333 4.47761Z" fill="#120E4D"/>
            </svg>
          </i>
        </div>

        <img src="img/logo/logo4.png" alt="" class="js-slide active a" />
        <img src="img/logo/logo1.png" alt="" class="js-slide a" />
        <img src="img/logo/logo2.png" alt="" class="js-slide a" />
        <img src="img/logo/logo3.png" alt="" class="js-slide a" />
        <img src="img/logo/log1.png" alt="" class="js-slide a" />
        <img src="img/logo/log2.png" alt="" class="js-slide a" />
        <img src="img/logo/logoexplorateur.png" alt="" class="js-slide a" />
      </div>

      <div class="portfolio-slider__image-slider-cont__slider">
        <div class="portfolio-slider__image-slider-cont__slider__controls-cont">
          <i class="portfolio-slider__image-slider-cont__slider__controls-cont__prev">
            <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M-2.09808e-05 4.47761L10.8333 0V10L-2.09808e-05 4.47761Z" fill="#120E4D"/>
            </svg>
          </i>
          <p class="portfolio-slider__image-slider-cont__slider__controls-cont__index">
            <span class="js-current-image-num">1</span>
            /
            <span class="js-total-image-num">3</span>
          </p>
          <i class="portfolio-slider__image-slider-cont__slider__controls-cont__next">
            <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.8333 4.47761L-7.62939e-06 0V10L10.8333 4.47761Z" fill="#120E4D"/>
            </svg>
          </i>
        </div>

        <img src="img/maquette/2.jpg" alt="" class="js-slide active" />
        <img src="img/maquette/1.jpg" alt="" class="js-slide" />
        <img src="img/maquette/ex1.jpg" alt="" class="js-slide" />
        <img src="img/maquette/boulen.jpg" alt="" class="js-slide" />
        <img src="img/maquette/desc4.jpg" alt="" class="js-slide" />
        <img src="img/maquette/desc44.jpg" alt="" class="js-slide" />
      </div>

      <div class="portfolio-slider__image-slider-cont__slider">
        <div class="portfolio-slider__image-slider-cont__slider__controls-cont">
          <i class="portfolio-slider__image-slider-cont__slider__controls-cont__prev">
            <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M-2.09808e-05 4.47761L10.8333 0V10L-2.09808e-05 4.47761Z" fill="#120E4D"/>
            </svg>
          </i>
          <p class="portfolio-slider__image-slider-cont__slider__controls-cont__index">
            <span class="js-current-image-num">1</span>
            /
            <span class="js-total-image-num">3</span>
          </p>
          <i class="portfolio-slider__image-slider-cont__slider__controls-cont__next">
            <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.8333 4.47761L-7.62939e-06 0V10L10.8333 4.47761Z" fill="#120E4D"/>
            </svg>
          </i>
        </div>

        <img src="img/benice1.png" alt="" class="js-slide active" />
        <img src="img/maquette/6.jpg" alt="" class="js-slide" />
      </div>
    </div>
  </div>
</section>
</div>

<!-- partial -->
  <script  src="js/slide.js"></script>
  <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("contenuslide");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>

</body>
</html>
