<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant</title>
     
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<style>
    .footext{
        position: fixed;
        bottom:  5px;
        background-color: green;
        padding: 40px 500px;  
        text-align: center;
        color: white;

    }
</style>

<body>
    <!-- Main -->
    <div class="container mt-2">
        <h3 class="page-header text-center">Plantito / Plantita</h3>
        <hr>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_plant">Add New Plant</a>
                <br>
                <br>
                <?php 
                    session_start();
                    if(isset($_SESSION['message'])){
                        ?>
                        <div class="alert alert-info text-center" style="margin-top:10px;">
                            <?php echo $_SESSION['message']; ?>
                        </div>
                        <?php

                        unset($_SESSION['message']);
                    }
                ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <th>Id</th>
                            <th>Plant Name</th>
                            <th>Plant Type</th>
                            <th>Color</th>
                            <th>Price Range </th>
                            <th>Remarks</th>
                        </thead>
                        <tbody>
                        <?php
                            //include our connection
                            include_once('database.php');

                            $database = new Connection();
                            $db = $database->open();
                            try{	
                                $sql = 'SELECT * FROM plants ORDER BY plant_name ASC';
                                $no = 0;
                                foreach ($db->query($sql) as $row) {
                                    $no++;
                        ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row['plant_name']; ?></td>
                                        <td><?php echo $row['plant_type']; ?></td>
                                        <td><?php echo $row['color']; ?></td>
                                        <td><?php echo $row['price_range']; ?></td>
                                        <td><?php echo $row['remarks']; ?></td>

                                        <td align="right">
                                            <a class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#edit_plant<?php echo $row['id']; ?>">Edit</a>
                                            <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete_plant<?php echo $row['id']; ?>">Delete</a>
                                        </td>
                                        <?php include('view_delete_plant.php'); ?>
                                        <?php include('view_edit_plant.php'); ?>
                                    </tr>
                        <?php 
                                }
                            }
                            catch(PDOException $e){
                                echo "There is some problem in connection: " . $e->getMessage();
                            }

                            //close connection
                            $database->close();

                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include('view_add_plant.php'); ?>
    <!-- JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<footer>
    <div class="footext"> <h3>  Submitted By:  Aaron Christian D.L Melano <br> Fernando E. Aragon </h3></div>
</footer>
</html>