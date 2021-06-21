
<?php 

require_once __DIR__ . "/classes/product.php";
require_once __DIR__ . "/classes/user.php";
require_once __DIR__ . "/classes/premium_user.php";

$product1 = new Product("Pringles", 3, "/../assets/img/pringles.jpg", "La qualità delle patate è una della migliori; la croccantezza è pari a quella di uno stuzzicadenti e il sapore è quello afrodisiaco tipico delle Pringles", "Patatine", false);
$product2 = new Product("Fonzies", 2, "/../assets/img/fonzies.jpg", "La qualità delle patatine è inesistente, il formaggio copre completamente il sapore e la sapidità delle patate; Non sono croccanti e sembrano fatte di cartoncino.", "Patatine", true);
$user1 = new User("Giorgio", "Vanni","/../assets/img/Vanni.jpg");
$premiumuser1 = new PremiumUser("Cristina", "D'Avena","/../assets/img/Cristina.jpg", "2");
$premiumuser2 = new PremiumUser("Pietro", "Smusi", "/../assets/img/Smusi.jpg", "1");
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <title>Shop Online Snacks</title>
</head>
<body>
  <div class="wrapper">
    <div class="row">
      <div class="card">
        <img src="<?php echo $product1->img ?>" alt="">
        <?php echo $product1->stampa()?>
      </div>
      <div class="card">
        <img src="<?php echo $product2->img ?>" alt="">
        <?php echo $product2->stampa()?>
      </div>
    </div>
    <h1>Utenti Registrati a questo Sito sicuramento non uno Scam:</h1>
    <div class="row">
      <div class="card">
       <img src="<?php echo $user1->img ?>" alt="Impossibile caricare l'immagine">
       <p>Nome: <?php echo $user1->name ?></p>
       <p>Cognome: <?php echo $user1->surname ?></p>
      </div>
      <div class="card">
       <img src="<?php echo $premiumuser1->img ?>" alt="Impossibile caricare l'immagine">
       <p>Nome: <?php echo $premiumuser1->name ?></p>
       <p>Cognome: <?php echo $premiumuser1->surname ?></p>
      </div>
      <div class="card">
      <img src="<?php echo $premiumuser2->img ?>" alt="Impossibile caricare l'immagine">
      <p>Nome: <?php echo $premiumuser2->name ?></p>
      <p>Cognome: <?php echo $premiumuser2->surname ?></p>
      </div>
    </div>
  </div>
</body>
</html>