<?php

require 'include/header.php';

$products = require 'include/db/products.array.php';

foreach($products as $product){
	extract($product);
	require 'include/views/product.php';
}

require 'include/footer.php';
