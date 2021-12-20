<?php

const KM2MILES = 0.621371;
const MILES2KM = 1.60934;

function km2miles(float $ka): float {
  return $ka * KM2MILES;
}

function miles2km(float $ka): float {
  return $ka * MILES2KM;
}


const KG2SVARAI = 2.20462262;
const SVARAI2KG = 0.45359237;

function svarus2kg($kiekis) {
  return $kiekis / KG2SVARAI;
}

function kg2svarai($kiekis) {
  return $kiekis * SVARAI2KG;
}

function farenheitas2c($temp) {
  return ($temp - 32) / 1.8;
}

function celcijus2f($temp) {
  return ($temp * 1.8 )+ 32;
}