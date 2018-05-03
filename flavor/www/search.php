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
            function search2(str) {
                if (str.length==0) { 
                    document.getElementById("searchResult2").innerHTML="";
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
                    document.getElementById("searchResult2").innerHTML=this.responseText;
                    }
                }
                xmlhttp.open("GET","searchresult2.php?q="+str,true);
                xmlhttp.send();
            }
            function search3(str) {
                if (str.length==0) { 
                    document.getElementById("searchResult3").innerHTML="";
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
                    document.getElementById("searchResult3").innerHTML=this.responseText;
                    }
                }
                xmlhttp.open("GET","searchresult3.php?q="+str,true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
    <div class="myApp">
            <div class="content">
            <div id="entryItemZero" class="entry addEntry titleItem">
                <img class="newFlavor" src="img/SearchFont.png" />
                <a href="index.php"><button class="goBack">Go Back</button></a>
            </div>
                <div id="entryItemTwo" class="entry addEntry">
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
                <div id="entryItemThree" class="entry addEntry">
                    <div class="data">
                        <h5> Search By Ingredients </h5>
                            <div class="ingredientAddWrapper addWrapper">
                                <ul class="ulIngredients">
                                    <li>
                                    </li>
                                <ul>
                                <form action="<?php search.php ?>" method="GET">
                                    <input onkeyup="search2(this.value)" type="text" class="input ingredientInput" placeholder="Enter Ingredient Name" name="name_search"/>
                                </form>
                            </div>
                    </div>
                </div>
                <div id="searchResult2"></div>
                <div id="entryItemFour" class="entry addEntry">
                    <div class="data">
                        <h5> Search By Tags </h5>
                            <div class="ingredientAddWrapper addWrapper">
                                <ul class="ulIngredients">
                                    <li>
                                    </li>
                                <ul>
                                <form action="<?php search.php ?>" method="GET">
                                    <input onkeyup="search3(this.value)" type="text" class="input ingredientInput" placeholder="Enter Tag Name" name="name_search"/>
                                </form>
                            </div>
                    </div>
                </div>
                <div id="searchResult3"></div>
            </div>
        <!--script type="text/javascript" src="js/index.js"></script-->
    </body>
</html>
