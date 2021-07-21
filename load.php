<?php
require_once "bootstrap.php";

$test = $entityManager->find(Test::class, 1);

var_dump($test);
