<?php
$maxprice = 3000;
  if (isset($_POST)){
    if (isset($_POST["guess"])){
      $price = intval($_POST["guess"]);
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Le Juste Prix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&amp;display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/modern-css-reset/dist/reset.min.css"
    />
    <link href="style.css" rel="stylesheet" />
  </head>

  <body>
    <header>
      <img alt="logo du juste prix" src="logo.jpg" />
    </header>
    <main>
      <img src="montre.jpg" alt="une belle montre de luxe" />
      <form action="guess.php" method="post">
        <div class="input-group">
          <label for="price">C'est combien ?</label>
          <span>$</span><input id="price" name="guess" />
        </div>
        <?php
          if ($price < $maxprice){
            echo "<p style=\"color:red\">faux, le prix est plus que $price$</p>";
          }else if($price > $maxprice){
            echo "<p style=\"color:red\">faux, le prix est moins que $price$</p>";
          }else if($price == $maxprice){
            echo "<p style=\"color:green\">bien, le prix est juste</p>";
          }
        ?>
        <button type="submit">Valider</button>
      </form>
    </main>
  </body>
</html>
