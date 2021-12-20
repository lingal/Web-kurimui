<?php

include 'Student.php';
include 'Group.php';

$studentas1 = new Student();
$studentas2 = new Student();
$studentas3 = new Student();
$studentas4 = new Student();
$studentas5 = new Student();

$asmuo = new Person();
$grupe = new Group();


// $studentas->getGroupId();
// echo $studentas->$name;
// echo $person->$name;


$students = [
  $studentas1,
  $studentas2,
  $studentas3,
  $studentas4,
  $studentas5,
];


foreach ($students as $student) {
  echo $student->asmensKodas . '\n';
}
