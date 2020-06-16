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

<<<<<<< d4b5df6c84a079ff57a09a32edce3adb70c5c6a4
      //determino le parole da sostituire
      $bad_words = array("puffo");
=======
      //determino le parole da sostituire passata in GET
      $bad_words = $_GET["Badwords"];
>>>>>>> fix

      //determino la censura
      $censured = array("***");

      //applico la cenura sulla frase
      $text = str_ireplace($bad_words,$censured,$text);

      //stampo la frase
      echo $text;

    ?>
  </body>
</html>
