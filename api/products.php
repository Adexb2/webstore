<?php

$products = require __DIR__."/../include/db/products.array.php";

// print out all data in JSON format
echo json_encode($products, JSON_PRETTY_PRINT);
