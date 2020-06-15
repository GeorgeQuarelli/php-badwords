<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
    <h1>Badwords</h1>
    <?php

      $text = 'ciao come stai? sei proprio un puffo! si proprio un puffo!';

      //determino le parole da sostituire
      $bad_words = array("puffo");

      //determino la censura
      $censured = array("***");

      //applico la cenura sulla frase
      $text = str_ireplace($bad_words,$censured,$text);

      //stampo la frase
      echo $text;

    ?>
  </body>
</html>
