<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
    <h1>Badwords</h1>
    <?php

      $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

      //determino le parole da sostituire passata in GET
      $bad_words = $_GETZ["Badwords"];

      //determino la censura
      $censured = array("***");

      //applico la cenura sulla frase
      $text = str_ireplace($bad_words,$censured,$text);

      //stampo la frase
      echo $text;

    ?>
  </body>
</html>
