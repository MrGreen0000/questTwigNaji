<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$products = ['guitare', 'bass', 'bonjo'];
echo $twig->render('products.html.twig', ['products' => $products]);

$produits= ['cithare', 'lyre', 'harpe'];
echo $twig->render('products.html.twig', ['products' => $produits]);
