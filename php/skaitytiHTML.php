<?php

require_once '/wamp64/www/Web_kursai/libs/sukurtiHTML.php';

function openFile(string $fileName, string $mode = 'r')
{
  return fopen($fileName, $mode);
}

function writeFile($file, $txt)
{
  fwrite($file, $txt);
}



$myFile = openFile('duomenys.html', 'w');
writeFile($myFile, $htmlPsl);
fclose($myFile);

// 2.

$myFile = openFile('duomenys.html', 'r+');
$fileLen = filesize('duomenys.html');
$nuskaitytaInfo = fread($myFile, $fileLen);
fclose($myFile);

$manoVardas = 'Linas';

$nuskaitytaInfo = preg_replace('/pasauli/', $manoVardas, $nuskaitytaInfo);

$naujiDuomenys = openFile('nauji_duomenys.html', 'w+');
writeFile($naujiDuomenys, $nuskaitytaInfo);
fclose($naujiDuomenys);

///////////////////////////////////////

echo '<br>';
echo '<br>';
echo '<br>';

// 3. 

// Sukuriau faila 'duomenys.json';
$jsonFailas = openFile('duomenys.json', 'w+');
fwrite($jsonFailas, '{"Peter":35,"Ben":37,"Joe":43}');
fclose($jsonFailas);

// nuskaiciau failo 'duomenys.json' info;

$jsonFailas = openFile('duomenys.json', 'r+');
$len = filesize('duomenys.json');
$jsonMasyvas = fread($jsonFailas, $len);
fclose($jsonFailas);

// perrasiau 'duomenys.json' vidine info

$jsonMasyvasDec = json_decode($jsonMasyvas, true);
$jsonMasyvas = array_merge($jsonMasyvasDec, ['Linas' => 35]);

$jsonFailasEnc = json_encode($jsonMasyvas);

$jsonFailas = openFile('duomenys.json', 'w+');
writeFile($jsonFailas, $jsonFailasEnc);
fclose($jsonFailas);


// 4.

// $jsonFailas2 = openFile('duomenys.json', 'r');
// $resursas = fread($jsonFailas2, filesize('duomenys.json'));
// $resursasDec = json_decode($resursas, true);
// fclose($jsonFailas2);

// var_dump($resursas);

// // $duomenuFailasPhp = openFile('duomenu_skaitymas.php', 'w+');
// // writeFile($duomenuFailasPhp, $resursasDec);
// // fclose($duomenuFailasPhp);
