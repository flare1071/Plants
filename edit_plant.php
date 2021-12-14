<?php
	session_start();
	include_once('database.php');

	if(isset($_POST['edit'])){
		$database = new Connection();
		$db = $database->open();
		try{
			//make use of prepared statement to prevent sql injection
            $sql = $db->prepare("UPDATE plants SET plant_name = :plant_name, color = :color, price_range = :price_range WHERE id = :plantsid");  
			//bind                 
            $sql->bindParam(':plant_name', $_POST['plantname']);   
			$sql->bindParam(':plant_type', $_POST['planttype']);    
            $sql->bindParam(':color', $_POST['plantcolor']);    
            $sql->bindParam(':price_range', $_POST['pricerange']);
			$sql->bindParam(':remarks', $_POST['plantremarks']);
            $sql->bindParam('plantsid', $_GET['id'], PDO::PARAM_INT);   
			$_SESSION['message'] = ( $sql->execute()) ? 'Plant updated successfully' : 'Something went wrong. Cannot add plant.';	
	    
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