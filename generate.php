<?php
require_once "bootstrap.php";

for ($i = 0; $i <= 10000; $i++) {
    $test = new Test(uniqid(), ['color' => rand(0, 100), 'value' => rand(0, 100)]);
    $entityManager->persist($test);
}
$entityManager->flush();
