<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Onglets</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">

    <div class="container-onglets">
        <div class="onglets active" data-anim="1">Destination</div>
        <div class="onglets" data-anim="2">Voyages</div>
        <div class="onglets" data-anim="3">Tarifs</div>
    </div>

    <div class="contenu activeContenu" data-anim="1">
      <?php
       include("verticalslider.php"); ?>

    </div>

    <div class="contenu" data-anim="2">
        <h3>Lorem ipsum dolor sit amet. 2</h3>

    </div>

    <div class="contenu" data-anim="3">
        <h3>Lorem ipsum dolor sit amet. 3</h3>

    </div>


    </div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
