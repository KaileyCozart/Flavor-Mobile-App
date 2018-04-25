<!DOCTYPE html>
<html>
    <head>
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
                } else {  
                    // code for IE6, IE5
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
            <div class="content">
                <h1> Search Page </h1>
                <a id="submit" type="submit" href="index.php"><img id="addIcon" class="addPageAddIcon" src="img/add3.png" /></a>
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
                                </form>
                            </div>
                    </div>
                </div>
                <div id="searchResult"></div>
            </div>
        <!--script type="text/javascript" src="js/index.js"></script-->
    </body>
</html>
