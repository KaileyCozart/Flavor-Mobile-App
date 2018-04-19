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
<!--html>
    <head-->
        <!-- Meta Data -->
        <!--meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *; img-src 'self' data: content:;"-->
        <!--meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width"-->
        <!-- Stylesheets -->
        <!--link rel="stylesheet" type="text/css" href="css/index.css"-->
        <!-- Scripts -->
        <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script-->
        <!-- Title -->
        <!--title>Flavor Mobile</title>
        <script>
        function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else { 
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","search.php?q="+str,true);
                xmlhttp.send();
            }
        }
        </script>
    </head>
    <body>
        <div class="myApp">
            <div class="hero">
                <h1> Search Page </h1>
            </div>
            <div class="content">
                <div id="entryItemOne" class="entry addEntry">
                    <div class="data">
                        <h5> Search By Recipe Name </h5>
                            <div class="ingredientAddWrapper addWrapper">
                                <ul class="ulIngredients">
                                    <li>
                                        
                                    </li>
                                <ul>
                                <form action="<?php search.php ?>" method="GET">
                                    <input onkeyup="showUser(this.value)" type="text" class="input ingredientInput" placeholder="Enter Recipe Name" name="name_search"/>
                                    <a href='search.php?search=true'><input type="submit" class="addButton" id="" value="Go" /></a>
                                </form>
                                <div id="txtHint"><b>Person info will be listed here...</b></div>
                            </div>
                    </div-->
                    <?php /*
                        $q = intval($_GET['q']);
                        
                        $con = mysqli_connect('flavordb2.cohujudgkpgx.us-west-2.rds.amazonaws.com', 'kcozart21', 'my3e-mail', 'new_schema');
                        if (!$con) {
                            die('Could not connect: ' . mysqli_error($con));
                        }
                        
                        mysqli_select_db($con,"ajax_demo");
                        $sql="SELECT * FROM user WHERE id = '".$q."'";
                        $result = mysqli_query($con,$sql);
                        
                        echo "<table>
                        <tr>
                        <th>recipe_id</th>
                        <th>recipe_name</th>
                        <th>recipe_instruct</th>
                        <th>recipe_ingredients</th>
                        </tr>";
                        while($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['recipe_id'] . "</td>";
                            echo "<td>" . $row['recipe_name'] . "</td>";
                            echo "<td>" . $row['recipe_instruct'] . "</td>";
                            echo "<td>" . $row['recipe_ingredients'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        mysqli_close($con); */
                    ?>
                    <!--div class="data">
                        <h5> Search By Ingredient </h5>
                        <div class="ingredientAddWrapper addWrapper">
                            <ul class="ulSearchIngredient">
                                <li>
                                    
                                </li>
                            <ul>
                            <input type="text" class="input ingredientSearchInput" placeholder="Enter Ingredient" />
                            <input type="submit" class="addButton" id="addIngredientButtonSearch" value="Add" />
                            <input type="submit" class="addButton" id="addInstructionButton" value="Go" />
                        </div>
                    </div>
                    <div class="data">
                        <h5> Search By Tag </h5>
                        <div class="ingredientAddWrapper addWrapper">
                            <ul class="ulTagSearch">
                                <li>
                                    
                                </li>
                            <ul>
                            <input type="text" class="input tagSearchInput" placeholder="Enter Tag" />
                            <input type="submit" class="addButton" id="addTagButtonSearch" value="Add" />
                            <input type="submit" class="addButton" id="addInstructionButton" value="Go" />
                        </div>
                    </div-->
                <!--/div>
            </div>
        </div>
        <script type="text/javascript" src="js/index.js"></script>
    </body>
</html-->

<html>
    <head>
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <title>Flavor Mobile</title>
        <script>
            function search(str) {
                if (str.length==0) { 
                    document.getElementById("searchResult").innerHTML="";
                    return;
                } 
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function() {
                    if (this.readyState==4 && this.status==200) {
                    document.getElementById("searchResult").innerHTML=this.responseText;
                    }
                }
                xmlhttp.open("GET","searchresult.php?q="+str,true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
    <div class="myApp">
            <div class="hero">
                <h1> Search Page </h1>
                <div id="searchResult"></div>
            </div>
            <div class="content">
                <div id="entryItemOne" class="entry addEntry">
                    <div class="data">
                        <h5> Search By Recipe Name </h5>
                            <div class="ingredientAddWrapper addWrapper">
                                <ul class="ulIngredients">
                                    <li>
                                        
                                    </li>
                                <ul>
                                <form action="<?php search.php ?>" method="GET">
                                    <input onkeyup="search(this.value)" type="text" class="input ingredientInput" placeholder="Enter Recipe Name" name="name_search"/>
                                    <a href='search.php?search=true'><input type="submit" class="addButton" id="" value="Go" /></a>
                                </form>
                            </div>
                    </div>
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
                            <h6> Food </h6>
                        </li>
                    <ul>
                </div>
            </div>
        </div>
SEC4;
            }
            
            mysqli_close($connection);
        ?>
        <script type="text/javascript" src="js/index.js"></script>
    </body>
</html>
