<!DOCTYPE html>
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
                <h1> Add Page </h1>
            </div>
            <div class="content">
                <div id="entryItemOne" class="entry addEntry">
                    <div class="data">
                            <div class="ingredientAddWrapper addWrapper">
                                <ul class="ulName">
                                    <li>
                                        
                                    </li>
                                <ul>
                                <input type="text" class="input nameInput" placeholder="Enter Recipe Name" />
                                <input type="submit" class="addButton" id="addNameButton" value="Add" />
                                <input type="submit" class="addButton" id="editNameButton" value="Edit" />
                            </div>
                    </div>
                    <div class="data">
                        <h5> Ingredients </h5>
                            <div class="ingredientAddWrapper addWrapper">
                                <ul class="ulIngredients">
                                    <li>
                                        
                                    </li>
                                <ul>
                                <input type="text" class="input ingredientInput" placeholder="Enter Ingredient" />
                                <input type="submit" class="addButton" id="addIngredientButton" value="Add" />
                            </div>
                    </div>
                    <div class="data">
                        <h5> Instructions </h5>
                        <div class="ingredientAddWrapper addWrapper">
                            <ul class="ulInstruction">
                                <li>
                                    
                                </li>
                            <ul>
                            <input type="text" class="input instructionInput" placeholder="Enter Instruction" />
                            <input type="submit" class="addButton" id="addInstructionButton" value="Add" />
                        </div>
                    </div>
                    <div class="data">
                        <h5> Tags </h5>
                        <div class="ingredientAddWrapper addWrapper">
                            <ul class="ulTags">
                                <li>
                                    
                                </li>
                            <ul>
                            <input type="text" class="input tagInput" placeholder="Enter Tag" />
                            <input type="submit" class="addButton" id="addTagButton" value="Add" />
                        </div>
                    </div>
                    <a href="index.html"><img id="addIcon" class="addPageAddIcon" src="img/add.png" /></a>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/index.js"></script>
    </body>
</html>
