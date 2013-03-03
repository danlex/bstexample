<?php

$loader = include "vendor/autoload.php";

$avl = new danlex\bst\AvlTree();
$a = array(3,6,5,1,2,4);
$avl->createFromArray($a);
echo("\n");
print_r($avl->toArray());
echo("\n");
echo($avl->printTree());
echo("\n");
