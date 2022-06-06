<?php

require 'class/person.php';
require 'class/student.php';
require 'class/teacher.php';

$objP = new Person();
echo "<pre>";
var_dump($objP);
echo "</pre>";

$objS = new Student();
echo "<pre>";
var_dump($objS);
echo "</pre>";

$objT = new Teacher();
echo "<pre>";
var_dump($objT);
echo "</pre>";

$objS->setNom("Paul");

echo $objS->getNom();




?>