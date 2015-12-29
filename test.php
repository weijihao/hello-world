<?php
require_once "vendor/autoload.php";

$hello = new weijihao\Demo\hello();
echo $hello->hello();

echo "\n";

$hiGirl = new weijihao\Demo\hello('My Goddess');
echo $hiGirl->hello();

