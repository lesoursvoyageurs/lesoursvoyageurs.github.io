<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Ours Voyageurs - Votre Profil</title>
</head>
<body>
<?php

    $nom = "titoudelaplage";
    $niveau = "150";
    $creation = "16/6/21";


?>


<!-- Haut de la page -->
  
  <nav class="menu-nav">
    <ul>
      <li class="btn">
        <a href="index.html">
          Accueil
        </a>
      </li>
      <li class="btn">
        <a href="voyages.html">
          Voyages
          </a>
      </li>
      <li class="btn">
        <a href="contact.html">
          Contact
        </a>
      </li>
      <li class="btn">
        <a href="aproposdenous.html">
          A propos de nous
        </a>
      </li>
    </ul>
  </nav>
  <img src="img/logolesoursvoyageurs.png">

  <h3>Votre Profil :</h3>
  <h4>Nom : <?= $nom ?></h4>
  <h4>Niveau :</h4>
  <h4>Création du compte :</h4>

</body>
</html>