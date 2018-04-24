<?php
$connection = mysqli_connect('flavordb2.cohujudgkpgx.us-west-2.rds.amazonaws.com', 'kcozart21', 'my3e-mail', 'new_schema');

if($_REQUEST['name']){
	$name = $_REQUEST['name'];
	$ingredients = $_REQUEST['ingredients'];
	$instructions= $_REQUEST['instructions'];
	$tags = $_REQUEST['tags'];

    $q = "INSERT INTO recipes VALUES ('','$name', '$ingredients', '$instructions', '$tags')";
    $query = mysqli_query($connection,$q);
    echo "Data Inserted";
}

mysqli_close($connection);
?>