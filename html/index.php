

<!DOCTYPE html>
<html land="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-COmpatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h1>Hello world!!!</h1>
	<p>This page shows all data from "users" table. Phpmyadmin located on 8080 port.</p>
	<?php 
		$db = new PDO('mysql:host=mysql;dbname=test_db', 'root', 'root');
		$stmt = $db->prepare("SELECT * FROM users");
		$stmt->execute();
		$data = $stmt->fetchAll();
		foreach($data as $row){
			echo '<br>';
			echo json_encode($row);
		}
	?>
</body>
</html>
