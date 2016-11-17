<?php

return (function(){
	// get database connection
	$db = require __DIR__."/../../pdo.php";

	$sql = "
		-- if it gets any more complex than this, then should use a view
		SELECT p.id, p.name, p.description, p.image, FORMAT(p.price, 'C', 'en-us') AS 'price',
			p.vendor, v.name AS 'vendor_name', v.description AS 'vendor_description'
		FROM [ISYS4283].[dbo].[products] p
		JOIN [ISYS4283].[dbo].[vendors] v
		ON p.vendor = v.id

		-- add this always true condition so that we can simply append with AND
		WHERE 1 = 1
	";

	// if URL query string
	// has a product ID filter
	// and validate user input is an integer
	if(isset($_GET['id']) && is_int(filter_var($_GET['id'], FILTER_VALIDATE_INT))){

		// append SQL with parameterized placeholder
		$sql .= " AND p.id = :id_parameter";

		// stash value separately for prepared statement
		$parameters['id_parameter'] = $_GET['id'];
	}

	// check URL for vendor filter
	if(isset($_GET['vendor'])){

		// append SQL with parameterized placeholder
		$sql .= " AND p.vendor = :vendor_parameter";

		// stash value separately for prepared statement
		$parameters['vendor_parameter'] = $_GET['vendor'];
	}

	$sql .= " ORDER BY p.image DESC";

	// if no filters, just query the SELECT statement
	// without a WHERE clause
	if(empty($parameters)){
		$statement = $db->query($sql);
	}
	// else, bind the user input in a parameterized query
	else {
		// prepare the statement
		$statement = $db->prepare($sql);

		// execute the statement
		// with user submitted data
		$statement->execute($parameters);
	}

	// fetch all rows with associative (non-numeric) indexes
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);

	return $result;
})();
