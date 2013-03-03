<?php


$loader = include "vendor/autoload.php";
$loader->add('danlex\bst', __DIR__.'/vendor/danlex/bst/');
$loader->register();
use danlex\bst;
$node = new Node();

echo("\n");
$avl = new AvlTree();
$a = array(3,6,5,1,2,4);
$avl->createFromArray($a);
echo("\n");
print_r($avl->toArray());
echo("\n");
echo($avl->printTree());
echo("\n");
