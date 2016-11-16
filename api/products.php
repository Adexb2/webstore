<?php

// get database connection
$db = require __DIR__."/../odbc.pdo.php";

$sql = "
	SELECT p.id, p.name, p.description, p.image, p.price,
		p.vendor, v.name AS 'vendor_name', v.description AS 'vendor_description'
	FROM [ISYS4283].[dbo].[products] p
	JOIN [ISYS4283].[dbo].[vendors] v
	  ON p.vendor = v.id
";

// if URL query string
// has a product ID filter
// and validate user input is an integer
if(isset($_GET['id']) && is_int(filter_var($_GET['id'], FILTER_VALIDATE_INT))){

	// append SQL with parameterized placeholder
	$sql .= " WHERE p.id = :id_parameter";

	// prepare the statement
	$statement = $db->prepare($sql);

	// execute the statement
	// with user submitted data
	$statement->execute([
		"id_parameter" => $_GET['id'],
	]);
}
// else just query the SELECT statement
// without a WHERE clause
else {
	$statement = $db->query($sql);
}

// fetch all rows with associative (non-numeric) indexes
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

// print out all data in JSON format
echo json_encode($result, JSON_PRETTY_PRINT);
