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
					<span class="active">projet-CMS</span>
					<span>integration  maquette 1</span>
					<span>jeux flappy bird</span>
					<span>integration <!--&amp;--> maquette 2</span>
					<span>integration maquette 3</span>
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
						projet egalité homme/femme sur wordpresse
					</p>
					<p>
						Integration maquette photoshop de office de tourisme.
					</p>
					<p>
					realisation de jeux flappy bird a l'aide d'un tuto en javascript.
					</p>
					<p>
						Integration maquette blue avec HTML et bootstrap.
					</p>
					<p>
						 Integration maquette  stickers .
					</p>
				</div>

				<div class="portfolio-slider__left-cont__grid__person js-person active">
					<img src="img/benice1.png" alt="" class="person-image"/>
				</div>

				<div class="portfolio-slider__left-cont__grid__person js-person">
					<img src="img/ima2.jpg" alt="" />
				</div>

				<div class="portfolio-slider__left-cont__grid__person js-person">
					<img src="img/ima3.jpg" alt=""/>
				</div>

				<div class="portfolio-slider__left-cont__grid__person js-person">
					<img src="img/ima4.jpg" alt="" />
				</div>

				<div class="portfolio-slider__left-cont__grid__person js-person">
					<img src="img/tdou1.jpg" alt="Chensley Photography">
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
				<img src="img/benice2.png" alt="" class="js-slide" />
				<img src="img/benice3.png" alt="" class="js-slide" />
				<img src="img/benice4.png" alt="" class="js-slide" />
        <img src="img/benice5.png" alt="" class="js-slide" />
        <img src="img/benice6.png" alt="" class="js-slide" />
        <img src="img/benice7.png" alt="" class="js-slide" />

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

				<img src="img/ima2.jpg" alt="" class="js-slide active" />
				<img src="img/inte1.jpg" alt="" class="js-slide" />
				<img src="img/int2.jpg" alt="" class="js-slide" />
				<img src="img/inte3.jpg" alt="" class="js-slide" />
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

				<img src="img/ima3.jpg" alt="" class="js-slide active" />
				<img src="img/jeu1.jpg" alt="" class="js-slide" />
				<img src="img/jeu2.jpg" alt="" class="js-slide" />
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

				<img src="img/ima4.jpg" alt="" class="js-slide active" />
				<img src="img/blue1.jpg" alt="" class="js-slide" />
				<img src="img/blue2.jpg" alt="" class="js-slide" />
				<img src="img/blue3.jpg" alt="" class="js-slide" />
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

				<img src="img/tdou1.jpg" alt="" class="js-slide active" />
				<img src="img/tdou2.jpg" alt="" class="js-slide" />
				<img src="img/tdou3.jpg" alt="" class="js-slide" />
				<img src="img/tdou4.jpg" alt="" class="js-slide" />
        	<img src="img/tdou5.jpg" alt="" class="js-slide" />
			</div>
		</div>
	</div>
</section>

</div>

<div class="contenuslide">
  <!-- <div class="textformation">
        <h2 >Formations</h2>
  </div> -->
<section class="portfolio-section ">
	<div class="portfolio-slider">
		<div class="portfolio-slider__left-cont">
			<p class="portfolio-slider__left-cont__title">
				mes hhh
			</p>

			<div class="portfolio-slider__left-cont__name-cont">
				<p class="portfolio-slider__left-cont__name-cont__name">
					<span class="active">projet-CMS</span>
					<span>integration  maquette 1</span>
					<span>jeux flappy bird</span>
					<span>integration <!--&amp;--> maquette 2</span>
					<span>integration maquette 3</span>
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
						projet egalité homme/femme sur wordpresse
					</p>
					<p>
						Integration maquette photoshop de office de tourisme.
					</p>
					<p>
					realisation de jeux flappy bird a l'aide d'un tuto en javascript.
					</p>
					<p>
						Integration maquette blue avec HTML et bootstrap.
					</p>
					<p>
						 Integration maquette  stickers .
					</p>
				</div>

				<div class="portfolio-slider__left-cont__grid__person js-person active">
					<img src="img/benice1.png" alt="" class="person-image"/>
				</div>

				<div class="portfolio-slider__left-cont__grid__person js-person">
					<img src="img/ima2.jpg" alt="" />
				</div>

				<div class="portfolio-slider__left-cont__grid__person js-person">
					<img src="img/ima3.jpg" alt=""/>
				</div>

				<div class="portfolio-slider__left-cont__grid__person js-person">
					<img src="img/ima4.jpg" alt="" />
				</div>

				<div class="portfolio-slider__left-cont__grid__person js-person">
					<img src="img/tdou1.jpg" alt="Chensley Photography">
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
				<img src="img/benice2.png" alt="" class="js-slide" />
				<img src="img/benice3.png" alt="" class="js-slide" />
				<img src="img/benice4.png" alt="" class="js-slide" />
        <img src="img/benice5.png" alt="" class="js-slide" />
        <img src="img/benice6.png" alt="" class="js-slide" />
        <img src="img/benice7.png" alt="" class="js-slide" />

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

				<img src="img/ima2.jpg" alt="" class="js-slide active" />
				<img src="img/inte1.jpg" alt="" class="js-slide" />
				<img src="img/int2.jpg" alt="" class="js-slide" />
				<img src="img/inte3.jpg" alt="" class="js-slide" />
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

				<img src="img/ima3.jpg" alt="" class="js-slide active" />
				<img src="img/jeu1.jpg" alt="" class="js-slide" />
				<img src="img/jeu2.jpg" alt="" class="js-slide" />
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

				<img src="img/ima4.jpg" alt="" class="js-slide active" />
				<img src="img/blue1.jpg" alt="" class="js-slide" />
				<img src="img/blue2.jpg" alt="" class="js-slide" />
				<img src="img/blue3.jpg" alt="" class="js-slide" />
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

				<img src="img/tdou1.jpg" alt="" class="js-slide active" />
				<img src="img/tdou2.jpg" alt="" class="js-slide" />
				<img src="img/tdou3.jpg" alt="" class="js-slide" />
				<img src="img/tdou4.jpg" alt="" class="js-slide" />
        	<img src="img/tdou5.jpg" alt="" class="js-slide" />
			</div>
		</div>
	</div>
</section>

</div>
<div class="boutonslide">
<button class="w3-button1 w3-black w3-display-left" onclick="plusDivs(-1)"><img class="w3-button1 " src="img0/left-arrow.png"/></button>
 <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)"><img class="w3-button " src="img0/right-arrow.png"/></button>
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
