<?php

// get database connection
$db = require __DIR__."/../pdo.php";

$sql = "
	EXEC [ISYS4283].[dbo].[purchase_item]
		@product  = :product,
		@quantity = :quantity,
		@vendor   = :vendor
";

if(isset($_GET['product']) && is_int(filter_var($_GET['product'], FILTER_VALIDATE_INT))){
	$parameters['product'] = $_GET['product'];
}

if(isset($_GET['quantity']) && is_int(filter_var($_GET['quantity'], FILTER_VALIDATE_INT))){
	$parameters['quantity'] = $_GET['quantity'];
}

if(isset($_GET['vendor'])){
	$parameters['vendor'] = $_GET['vendor'];
}

$statement = $db->prepare($sql);

$statement->execute($parameters);

extract($parameters);
echo "Success! $vendor created purchase order for $quantity product id $product";
