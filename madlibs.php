<?php
    $dier =  $_POST["fdier"];
    $belangrijkpersoon =  $_POST["fbelangrijkpersoon"];
    $land =  $_POST["fland"];
    $verveeld =  $_POST["fverveeld"];
    $speelgoed =  $_POST["fspeelgoed"];
    $docent =  $_POST["docent"];
    $geld =  $_POST["fgeld"];
    $bezigheid =  $_POST["fbezigheid"];
?>

<!DOCTYPE html>
<html>
    <head>
        <link  rel="stylesheet" type="text/css" href="madlibls.css"/>
    </head>

    <body>
        <h1>Mad Libs</h1>
        
        <div id="topform">
            <a href="madlibsstart.php">er heerst paniek</a>
            <a href="onkundestart.php">onkunde</a>
        </div>

       
        <div id="formanswer">
            <h2>Er heerst paniek</h2>
            <br> 
            <?php 
                echo "<h3>

                   
                </h3>";
            ?>
        </div>
    </body>

</html>