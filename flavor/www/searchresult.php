<?php
    /* $GET_['q']; */
    $connection = mysqli_connect('flavordb2.cohujudgkpgx.us-west-2.rds.amazonaws.com', 'kcozart21', 'my3e-mail', 'new_schema');
    
                if(!$connection) {
                    die("Connection failed: " .mysqli_connect_error());
                }
    
                $q = $_GET["q"];

                $query = mysqli_query($connection,"SELECT * FROM recipes");
                while ($row = mysqli_fetch_array($query)) {
                    if (strstr($row["recipe_name"], $q) !== false) {
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
                }
                    mysqli_close($connection);
?>