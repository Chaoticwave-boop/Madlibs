<?php
    $kunnen =  $_POST["fkunnen"];
    $persoon =  $_POST["fpersoon"];
    $getal =  $_POST["fgetal"];
    $vakantie =  $_POST["fvakantie"];
    $eigenschapgoed =  $_POST["feigenschapgoed"];
    $eigenschapslecht =  $_POST["feigenschapslecht"];
    $overkomen =  $_POST["foverkomen"];
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
            <h2>Onkunde</h2>
            <br> 
            <?php 
                echo "<h3>
                    er zijn veel mensen die niet kunnen $kunnen neem nou  $persoon zelfs met de hulp van een $vakantie
                    of zelfs $getal kan $persoon niet $kunnen . dat heeft niks te maken met gebrek aan $eigenschapgoed ,
                    maar met een te veel aan $eigenschapslecht. te veel $eigenschapslecht leidt tot $overkomen en dat is niet goed
                    als je wilt $kunnen. helaas voor $persoon
                </h3>";
            ?>
        </div>
    </body>

</html>