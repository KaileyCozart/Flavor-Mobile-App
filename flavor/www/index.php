<!DOCTYPE html>
<!--
    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>
    <head>
        <!-- Meta Data -->
        <!--meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *; img-src 'self' data: content:;"-->
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <!-- Title -->
        <title>Flavor Mobile</title>
    </head>
    <body>
        <div class="myApp">
            <div class="hero">
                <h1> Landing Page </h1>
            </div>
            <div class="content">
                <div class="iconOuterWrapper">
                    <div class="iconInnerWrapper">
                        <a href="add.php"><img id="icon" src="img/add.png" /></a>
                        <a href="search.php"><img id="icon" class="addPaddingRight" src="img/search.png" /></a>
                    </div>
                </div>
                    <?php
                        $connection = mysqli_connect('flavordb2.cohujudgkpgx.us-west-2.rds.amazonaws.com', 'kcozart21', 'my3e-mail', 'new_schema');
                        
                        if(!$connection) {
                            die("Connection failed: " .mysqli_connect_error());
                        }

                        $query = mysqli_query($connection,"SELECT * FROM recipes");
                        while ($row = mysqli_fetch_array($query)) {
echo <<<SEC1
                            <div id="entryItemOne" class="entry">
SEC1;
                            echo "<h3>" . $row["recipe_name"] . "</h3>";
                            
echo <<<SEC2
                        <div class="buttonDivWrapper">
                            <div class="buttonDiv">
                                <a href="add.html"><button> Edit </button></a>
                                <button id="deleteButton"> Delete </button>
                            </div>
                        </div>
                        <div class="data">
                            <h5> Ingredients </h5>
                                <div class="ingredientAddWrapper addWrapper">
                                    <ul class="ulIngredients">
                                        <li>
SEC2;
                                    echo "<h6>" . $row["recipe_ingredients"] . "</h6>";
echo <<<SEC3
                                        </li>
                                    <ul>
                                </div>
                        </div>
                        <div class="data">
                            <h5> Instructions </h5>
                            <div class="ingredientAddWrapper addWrapper">
                                <ul class="ulInstruction">
                                    <li>
SEC3;
                                    echo "<h6>" . $row["recipe_instruct"] . "</h6>";
echo <<<SEC4
                                    </li>
                                <ul>
                            </div>
                        </div>
                        <div class="data">
                            <h5> Tags </h5>
                            <div class="ingredientAddWrapper addWrapper">
                                <ul class="ulTags">
                                    <li>
SEC4;
                                        echo "<h6>" . $row["recipe_tags"] . "</h6>";
echo <<<SEC5
                                    </li>
                                <ul>
                            </div>
                        </div>
                    </div>
SEC5;
                        }
                        
                        mysqli_close($connection);
                    ?>
            </div>
        </div>
        <!--script type="text/javascript" src="cordova.js"></script-->
        <script type="text/javascript" src="js/index.js"></script>
    </body>
</html>
