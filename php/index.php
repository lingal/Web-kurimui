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




  function notSorted(array $arr)
  {
    foreach ($arr as $key => $value) {
      echo $key . ' ' . $value . '<br>';
    }
  }

  notSorted($ceu);



  echo "<p><b>b)</b></p>";



  function sorted(array $arr)
  {
    ksort($arr);
    foreach ($arr as $key => $value) {
      echo $key . ' ' . 'sostine yra' . ' ' . $value . '<br>';
    }
  }

  sorted($ceu);



  echo "<p><b>c)</b></p>";




  function printX(array $arr, int $x)
  {
    $countries = array_keys($arr);
    $capitals = array_values($arr);
    for ($i = 0; $i < sizeof($arr); $i += $x) {
      echo $countries[$i] . ' => ' . $capitals[$i] . '<br>';
    }
  }

  printX($ceu, 3);



  echo "<p><b>d)</b></p>";



  function charA(array $arr, string $char)
  {
    foreach ($arr as $salis => $sostine) {
      if (str_starts_with($salis, $char) || str_starts_with($sostine, $char)) {
        echo $salis . ' => ' . $sostine . '<br>';
      }
    }
  }
  charA($ceu, 'A');


  echo "<p><b>e)</b></p>";


  function splitArr(array $arr)
  {
    $arrLength = round(sizeof($arr) / 2, 0, PHP_ROUND_HALF_DOWN);
    $arrHalf = array_splice($arr, $arrLength);
    $count = 0;
    echo '<div class="flex">';
    echo '<div style="color:red;">';
    foreach ($arr as $key => $value) {
      if ($count < $arrLength) {
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



  echo '<h3>2]</h3>';


  $temp = [
    78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
    73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
  ];



  function avgTemp(array $arr)
  {
    $avg = array_sum($arr) / count($arr);
    echo 'Temperaturos vidurkis: ' . '<span style="color:red; font-size: 24px;" >' . $avg . '</span>' . '<br>';
  }

  avgTemp($temp);


  function lowestFive(array $arr)
  {
    sort($arr);
    $lowestFive = '';
    for ($x = 0; $x < 5; $x++) {
      $lowestFive .= $arr[$x] . ',';
    }
    echo 'Penkios žemiausios temperatūros : ' . $lowestFive . '<br>';
  }
  lowestFive($temp);


  function highestFive(array $arr)
  {
    sort($arr);
    $reversedArr = array_reverse($arr);
    $highestTemp = '';
    for ($x = 0; $x < 5; $x++) {
      $highestTemp = $reversedArr[$x] . ', ' . $highestTemp;
    }
    echo 'Penkios auksciausios temperatūros :' .  $highestTemp;
  }
  highestFive($temp);


  //   $newTemp = array_slice($temp, -5);

  //   $highestFive = '';
  //   for($x = 0; $x < 5; $x++) {
  //     $highestFive .=  $newTemp[$x] . ',';
  //   }
  //
  //   echo 'Penkios auksciausios temperatūros : ' . $highestFive . '<br>';


  echo '<h4>' . 2.1 . '</h4>';

  function graphics(array $temp)
  {
    echo '<div style="display: flex; gap: 10px; align-items: flex-end">';
    foreach ($temp as $key) {
      echo '<span' . ' ' . 'style="' . 'height:' . $key . 'px' . ';' . 'background-color:' . 'green' . '" >' . $key . "</span>";
    }
    echo '</div>';
  }
  graphics($temp);


  echo '<h4>' . 2.2 . '</h4>';


  function removeDuplicatesLowest(array $arr)
  {

    $newArr = array_unique($arr);
    sort($newArr);
    $counter = 0;
    foreach ($newArr as $_ => $value) {
      if ($counter < 5) {
        echo $value . ', ';
      }
      $counter++;
    }
  }

  removeDuplicatesLowest($temp);

  echo '<br>';
  echo '<br>';
  echo '<hr>';

  function removeDuplicatesHighest(array $arr)
  {

    $newArr = array_unique($arr);
    sort($newArr);
    $reversedArr = array_reverse($newArr);
    $counter = 0;
    $topHighest = '';
    foreach ($reversedArr as $_ => $value) {
      if ($counter < 5) {
        $topHighest = $value . ', ' . $topHighest;
      }
      $counter++;
    }
    echo $topHighest;
  }

  removeDuplicatesHighest($temp);

  echo '<h3>3]</h3>';


  $randomArr = ["abcd", "abc", "de", "hjjj", "g", "wer"];

  function trumpiausiasIlgiausias(array $arr)
  {
    $minLen =  min(array_map('strlen', $arr));
    $maxLen =  max(array_map('strlen', $arr));

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
  }



  trumpiausiasIlgiausias($randomArr);




  echo '<h3>4]</h3>';



  $vardai = ["Jonas", "Petras", "Kazys", "Zigmas", "Ona", "Janina", "Kristina"];

  $pavardes = ["Joninis", "Petrinis", "Kazinis", "Zigminis", "Onienė",  "Jonė", "Kristė"];

  $c = [1, 1, 2, 2, 1, 2, 2, 3, 1, 3, 2, 1, 1, 4, 2, 4, 1, 5, 2, 7, 1, 6, 2, 5, 1, 7, 2, 6];


  function namesFn(array $vardai, array $pavardes, array $c)
  {
    $d = [];
    for ($x = 0; $x < count($c); $x += 2) {
      array_push($d, $vardai[$c[$x] - 1] . ' ' . $pavardes[$c[$x + 1] - 1]);
    }

    var_dump($d);
  }

  namesfn($vardai, $pavardes, $c);

  echo '<br>';
  echo '<br>';
  echo '<hr>';



  include '/wamp64/www/Web_kursai/libs/convert.php';

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



  echo '<br>';
  echo '<br>';
  echo '<br>';



  include '/wamp64/www/Web_kursai/libs/Car.php';
  

  $automobilis = new Car();

  $automobilis->spalva = 'Raudona';
  $automobilis->greitis = 50;

  echo $automobilis->gautiSpalva();
  echo '<br>';
  $automobilis->vaziuoti();
  echo '<hr>';
  $automobilis->dureles = 4;
  $automobilis->dureliuSkaicius();
  echo '<br>';
  echo '<br>';
  echo '<hr>';
  $automobilis->kuroBakas = 65;


  
  ?>



</body>

</html>