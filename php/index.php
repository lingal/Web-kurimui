<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>


    <style>
        .flex {
            display: flex;
            gap: 20px;
        }
    </style>


</head>

<body>

  <div>
    <h1>PHP praktinės užduotys</h1>
  </div>


  <h3>1]</h3>


  <?php
  echo '<p><b>a)</b></p>';

  $ceu = [
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw",
  ];




  function notSorted(array $arr) {
    foreach ($arr as $key => $value) {
      echo $key . ' ' . $value . '<br>';
    }
  }

  notSorted($ceu);


  ?>




  <?php

  echo "<p><b>b)</b></p>";

  $ceu = [
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw",
  ];


  function sorted (array $arr) {
    ksort($arr);
    foreach ($arr as $key => $value) {
      echo $key . ' ' . 'sostine yra' . ' ' . $value . '<br>';
    }
  }

  sorted($ceu);


  ?>


  <p><b>c)</b></p>


  <?php

  $ceu = [
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw",
  ];



  function printX (array $arr, int $x) {
    $countries = array_keys($arr);
    $capitals = array_values($arr);
    for ($i = 0; $i < sizeof($arr); $i += $x) {
      echo $countries[$i] . ' => ' . $capitals[$i] . '<br>';
    }
  }

  printX($ceu, 3)


  ?>


  <p><b>d)</b></p>

  <?php

  $ceu = [
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw",
  ];




  function charA(array $arr, string $char) {
    foreach ($arr as $salis => $sostine){
        if(str_starts_with($salis, $char) || str_starts_with($sostine, $char)) {
            echo $salis . ' => ' . $sostine . '<br>';
        }
    }
  }
  charA($ceu, 'A');

  ?>



  <p><b>e)</b></p>

  <?php


  function splitArr(array $arr) {
      $arrLength = round(sizeof($arr) /2, 0,PHP_ROUND_HALF_DOWN);
      $arrHalf = array_splice($arr, $arrLength);
      $count = 0;
    echo '<div class="flex">';
      echo '<div style="color:red;">';
      foreach($arr as $key => $value) {
          if($count < $arrLength) {
            echo $key . ' => ' . $value . '<br>';
          }
        $count++;
      }
    echo '</div>';

    echo '<div style="color:green;">';
      foreach ($arrHalf as $key => $value) {
          echo $key . ' => ' . $value . '<br>';
      }
    echo '</div>';
    echo '</div>';
  }

  splitArr($ceu);


  ?>



  <div>
    <h3>2]</h3>
  </div>

  <?php
  $temp = [
    78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
    73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
  ];

  $avg = array_sum($temp) / count($temp);
  echo 'Temperaturos vidurkis: ' . '<span style="color:red; font-size: 24px;" >' . $avg . '</span>' . '<br>';


  sort($temp);
  $lowestFive = '';

  for ($x = 0; $x < 10; $x++) {
    if ($temp[$x] !== $temp[$x + 1]) {
      $lowestFive .= $temp[$x] . ',';
    }
  }

  echo 'Penkios žemiausios temperatūros : ' . $lowestFive . '<br>';


  // $newTemp = array_slice($temp, -5);

  // $highestFive = '';
  // for($x = 0; $x < 5; $x++) {
  //   $highestFive .= $newTemp[$x] . ',';
  // }

  // echo 'Penkios auksciausios temperatūros : ' . $highestFive . '<br>';

  ?>

  <h3>3]</h3>

  <?php

  $arr = ["abcd", "abc", "de", "hjjj", "g", "wer"];

  $minLen = min(array_map('strlen', $arr));
  $maxLen = max(array_map('strlen', $arr));

  // echo $minLen;
  // echo $maxLen;

  $trumpiausiEl = '';
  $ilgiausiEl = '';



  for ($x = 0; $x < sizeof($arr); $x++) {
    if (strlen($arr[$x]) === $minLen) {
      $trumpiausiEl .= "'" . $arr[$x] . "'" . '<br>';
    } elseif (strlen($arr[$x]) === $maxLen) {
      $ilgiausiEl .= "'" . $arr[$x] . "'" . ', ';
    }
  }

  echo 'Trumpiausi masyvo elementai: ' . $trumpiausiEl;
  echo 'Ilgiausi masyvo elementai: ' . $ilgiausiEl;

  ?>


  <h3>4]</h3>

  <?php

  $vardai = ["Jonas", "Petras", "Kazys", "Zigmas", "Ona", "Janina", "Kristina"];

  $pavardes = ["Joninis", "Petrinis", "Kazinis", "Zigminis", "Onienė",  "Jonė", "Kristė"];

  $C = [1, 1, 2, 2, 1, 2, 2, 3, 1, 3, 2, 1, 1, 4, 2, 4, 1, 5, 2, 7, 1, 6, 2, 5, 1, 7, 2, 6];

  $D = [];

  for ($x = 0; $x < sizeof($C); $x++) {
    array_push($D, $vardai[array_search($C[$x], $C) % 2 === 0]);
    array_push($D, $pavardes[array_search($C[$x], $C) % 2 !== 0]);
  }

  print_r($D);

  ?>

  <br>
  <br>
  <hr>


  <?php




  include 'convert.php';

  function konvertuoti(int|float $ka, string $kaip)
  {
    switch ($kaip) {
      case 'mylios';
        $ats = km2miles($ka) . ' ' . 'mylios';;
        break;
      case 'kilometrai':
        $ats = miles2km($ka) . ' ' . 'kilometrai';;
        break;
      case 'kg':
        $ats = svarus2kg($ka) . ' ' . 'kg';
        break;
      case 'svarai':
        $ats = kg2svarai($ka) . ' ' . 'svarai';
        break;
      case 'celcijus':
        $ats = farenheitas2c($ka) . 'C';
        break;
      case 'farenheitas':
        $ats = celcijus2f($ka) . 'F';
        break;
      default:
        $ats = 'Veiksmas negalimas';
    }
    echo $ats;
  };

  konvertuoti(100, 'kg');


  // function konvertuoti(int|float $kiekis, string $kaip)
  // {
  //   switch ($kaip) {
  //   }
  //   echo $ats;
  // }

  // konvertuoti(100, 'kg');


  // function konvertuoti(int|float $temp, string $ka) {
  //   switch($ka) {
  //    
  //   }
  //   echo $ats;
  // }

  // konvertuoti(100, 'celcijus');



  ?>



</body>

</html>