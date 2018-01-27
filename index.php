<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Skaičiai žodžiais</title>
  </head>
  <body>


    <form class="inputForm" action="index.php" method="get">
      <p>Įveskite skaičių:<p>
      <input type="text" name="number" value="0">
      <button type="submit" name="button">Submit</button>
    </form>


  </body>
</html>



<?php


error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');

// include 'indexview.php';

include 'numbersToWords.php';

if (isset($_GET['number'])) {
  $n = $_GET['number'];

  if (preg_match('/^\d+/', $n)) {
    $z = numberToWords($n);
    $z = ucfirst($z);
    $n_suformatuotas = number_format($n, 2, ",", ".");
  } else {
    $z = "tai ne skaičius";
  };

  echo $n_suformatuotas." = <br>";
  echo $z;
  echo "<br>";
  // echo substr($z, 0, 1);
  // echo "<br>";
  // echo ord(substr($z, 0, 1));
};


 ?>
