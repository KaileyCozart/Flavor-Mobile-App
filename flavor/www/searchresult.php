<?php
    /* $GET_['q']; */
    $connection = mysqli_connect('flavordb2.cohujudgkpgx.us-west-2.rds.amazonaws.com', 'kcozart21', 'my3e-mail', 'new_schema');
    
                if(!$connection) {
                    die("Connection failed: " .mysqli_connect_error());
                }
    
                $q = $_GET["q"];
                $sql = "hello";
    
                if (strpos($sql, $q) !== false) {
                    echo "<h3>" . $sql . "</h3>";
                }
?>