<!-- <!DOCTYPE html> -->
<!-- <html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
    <h1>Badwords</h1>

<<<<<<< HEAD

      // $text = 'ciao come stai? sei proprio un puffo! si proprio un puffo!';
      //
      // //determino le parole da sostituire
      // $bad_words = array("puffo");
      //
      // //determino la censura
      // $censured = array("***");
      //
      // //applico la cenura sulla frase
      // $text = str_ireplace($bad_words,$censured,$text);
      //
      // //stampo la frase
      // echo $text;


//   </body>
// </html> -->

<!-- CORREZIONE -->
<?php
$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

$lunghezza = strlen($text);

//determino le parole da sostituire passata in GET
$bad_words = $_GET["Badwords"];

$numero_sostituzioni = 0;

$testo_censurato = str_replace($badword, '***', $text, $numero_sostituzioni);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>badwords</title>
  </head>
  <body>
    <h2>testo non censurato:</h2>
    <p><?php echo $text; ?></p>
    <h1>lungheezza testo: <?php echo $lunghezza; ?></h2>
    <h2>testo censurato:</h2>
    <p><?php echo $testo_censurato; ?></p>
    <h2>Numero sostituzioni : <?php echo $numero_sostituzioni; ?></h2>
  </body>
</html>
