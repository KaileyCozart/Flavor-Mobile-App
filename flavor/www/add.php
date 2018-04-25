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
        <script>
                    var app = {
                // Application Constructor
                initialize: function () {
                    document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
                },

                // deviceready Event Handler
                //
                // Bind any cordova events here. Common events are:
                // 'pause', 'resume', etc.
                onDeviceReady: function () {
                    this.receivedEvent('deviceready');
                },

                // Update DOM on a Received Event
                receivedEvent: function (id) {
                    var parentElement = document.getElementById(id);
                    var listeningElement = parentElement.querySelector('.listening');
                    var receivedElement = parentElement.querySelector('.received');

                    listeningElement.setAttribute('style', 'display:none;');
                    receivedElement.setAttribute('style', 'display:block;');

                    console.log('Received Event: ' + id);
                }
            };

            app.initialize();


            $(document).ready(function(e) {
                $('#submit').click(function(){
                    var name = $('#name').val();
                    var ingredients = $('#ingredients').val();
                    var instructions = $('#instructions').val();
                    var tags = $('#tags').val();
                    
                    $.ajax({
                        type:'POST',
                        data:{name: name,ingredients: ingredients,instructions: instructions,tags: tags},
                        url:"addentry.php", //php page URL where we post this data to save in databse
                        success: function(data) {
                            handleData(data);
                            // html(data);
                            window.location.href = "index.php";
                        }
                    })
                });
            });
        </script>
    </head>
    <body>
        <div class="myApp">
            <div class="content">
            <h1> Add Page </h1>
                <div id="entryItemOne" class="entry addEntry">
                    <div class="data">
                        <h5> Recipe Name </h5>
                            <div class="ingredientAddWrapper addWrapper">
                                <ul class="ulName">
                                    <li>
                                        
                                    </li>
                                <ul>
                                <input id="name" type="text" class="input nameInput" placeholder="Enter Recipe Name" />
                                <!--input type="submit" class="addButton" id="addNameButton" value="Add" /-->
                                <!--input type="submit" class="addButton" id="editNameButton" value="Edit" /-->
                            </div>
                    </div>
                    <div class="data">
                        <h5> Ingredients </h5>
                            <div class="ingredientAddWrapper addWrapper">
                                <ul class="ulIngredients">
                                    <li>
                                        
                                    </li>
                                <ul>
                                <textarea id="ingredients" type="text" class="input ingredientInput" placeholder="Enter Ingredients"></textarea>
                                <!--input type="submit" class="addButton" id="addIngredientButton" value="Add" /-->
                            </div>
                    </div>
                    <div class="data">
                        <h5> Instructions </h5>
                        <div class="ingredientAddWrapper addWrapper">
                            <ul class="ulInstruction">
                                <li>
                                    
                                </li>
                            <ul>
                            <textarea id="instructions" type="text" class="input instructionInput" placeholder="Enter Instructions"></textarea>
                            <!--input type="submit" class="addButton" id="addInstructionButton" value="Add" /-->
                        </div>
                    </div>
                    <div class="data">
                        <h5> Tags </h5>
                        <div class="ingredientAddWrapper addWrapper">
                            <ul class="ulTags">
                                <li>
                                    
                                </li>
                            <ul>
                            <textarea id="tags" type="text" class="input tagInput" placeholder="Enter Tags"></textarea>
                            <!--input type="submit" class="addButton" id="addTagButton" value="Add" /-->
                        </div>
                    </div>
                    <!-- onclick="send to sql" -->
                    <a id="submit" type="submit" href="index.php"><img id="addIcon" class="addPageAddIcon" src="img/add3.png" /></a>
                </div>
            </div>
        </div>
        <!--script type="text/javascript" src="js/index.js"></script-->
    </body>
</html>
