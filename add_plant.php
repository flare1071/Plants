<?php
	session_start();
	include_once('database.php');

	if(isset($_POST['add'])){
		$database = new Connection();
		$db = $database->open();
		try{
			//make use of prepared statement to prevent sql injection
			$sql = $db->prepare("INSERT INTO plants (plant_name, plant_type, color, price_range, remarks) VALUES (:plant_name, :plant_type, :color, :price_range, :remarks)");

			//bind
			$sql->bindParam(':plant_name', $_POST['plantname']);
			$sql->bindParam(':plant_type', $_POST['planttype']);
            $sql->bindParam(':color', $_POST['plantcolor']);
			$sql->bindParam(':price_range', $_POST['pricerange']);
			$sql->bindParam(':remarks', $_POST['plantremarks']);

			//if-else statement in executing our prepared statement
			$_SESSION['message'] = ( $sql->execute()) ? 'Plant added successfully' : 'Something went wrong. Cannot add plant.';	
	    
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//close connection
		$database->close();
	}

	else{
		$_SESSION['message'] = 'Fill up add form first';
	}

	header('location: index.php');
	
?>