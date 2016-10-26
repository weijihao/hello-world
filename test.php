<?php
require_once "vendor/autoload.php";

$hello = new Weijihao\Demo\hello();
echo $hello->hello();

echo "\n";

$hiGirl = new Weijihao\Demo\hello('My Goddess');
echo $hiGirl->hello();

