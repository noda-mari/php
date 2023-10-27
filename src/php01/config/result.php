<?php

$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
$choices = htmlspecialchars($_POST["choices"], ENT_QUOTES);
$number = htmlspecialchars($_POST["number"],ENT_QUOTES);

print "私の名前は、" . $name . "です。";
print "希望商品は、" . $choices . "です。";
print "商品数は" . $number . "です。";
