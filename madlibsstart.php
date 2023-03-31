<?php
    $error = [];

    if ($_SERVER['REQUEST_METHOD'] == "POST"){

        $dier =  $_POST["fdier"];
        $belangrijkpersoon =  $_POST["fbelangrijkpersoon"];
        $land =  $_POST["fland"];
        $verveeld =  $_POST["fverveeld"];
        $speelgoed =  $_POST["fspeelgoed"];
        $docent =  $_POST["docent"];
        $geld =  $_POST["fgeld"];
        $bezigheid =  $_POST["fbezigheid"];

        foreach($_POST as $key => $value){
            if (!$value) {
                $error[$key] = "$key is niet ingevuld";
            }
        };
    } else {
    };
?>

<!DOCTYPE html>
<html>
    <head>
        <link  rel="stylesheet" type="text/css" href="madlibls.css"/>
    </head>

    <body>
        <?php  if ($_SERVER['REQUEST_METHOD'] == "GET" || !empty($error)) { ?>
            <link  rel="stylesheet" type="text/css" href="madlibls.css"/>
            <title>Document</title>
        
            <h1>Mad Libs</h1>
                
            <div id="topform">
                <a href="madlibsstart.php">er heerst paniek</a>
                <a href="onkundestart.php">onkunde</a>
            </div>
    
            <form action="madlibsstart.php" method="post" id="form">
                <div>
                    <h2>er heerst paniek</h2>
                </div>
                <div>
                    <p>welk dier zou je nooit als huisdier willen hebben</p>
                    <input  name="fdier">
                    <?php 
                        if (array_key_exists('fdier', $error)) { ?>
                            <p id="error">je hebt dit veld niet ingevuld </p>
                        <?php }; 
                    ?>
                </div>
    
                <div>
                    <p>wie is de belangrijkste persoon in je leven</p>
                    <input  name="fbelangrijkpersoon">
                    <?php 
                        if (array_key_exists('fbelangrijkpersoon', $error)) { ?>
                            <p id="error">je hebt dit veld niet ingevuld </p>
                        <?php }; 
                    ?>
                </div>

                <div>
                    <p>wat was je favoriete speelgoed als kind?</p>
                    <input  name="fspeelgoed">
                    <?php 
                        if (array_key_exists('fspeelgoed', $error)) { ?>
                            <p id="error">je hebt dit veld niet ingevuld </p>
                        <?php }; 
                    ?>
                </div>
    
                <div>
                    <p>In welk land zou je graag willen wonen</p>
                    <input  name="fland">
                    <?php 
                        if (array_key_exists('fland', $error)) { ?>
                            <p id="error">je hebt dit veld niet ingevuld </p>
                        <?php }; 
                    ?>
                </div>
    
                <div>
                    <p>Wat doe je als je je verveeld</p>
                    <input  name="fverveeld">
                    <?php 
                        if (array_key_exists('fverveeld', $error)) { ?>
                            <p id="error">je hebt dit veld niet ingevuld </p>
                        <?php }; 
                    ?>
                </div>
    
                <div>
                    <p>bij welke docent spijbel je het liefst?</p>
                    <input  name="docent">
                    <?php 
                        if (array_key_exists('docent', $error)) { ?>
                            <p id="error">je hebt dit veld niet ingevuld </p>
                        <?php }; 
                    ?>
                </div>
    
                <div>
                    <p>als je 100.000 euro had, wat zou je dan kopen?</p>
                    <input  name="fgeld">
                    <?php 
                        if (array_key_exists('fgeld', $error)) { ?>
                            <p id="error">je hebt dit veld niet ingevuld </p>
                        <?php }; 
                    ?>
                </div>
    
                <div>
                    <p>wat is je favoriete bezigheid</p>
                    <input  name="fbezigheid">
                    <?php 
                        if (array_key_exists('fbezigheid', $error)) { ?>
                            <p id="error">je hebt dit veld niet ingevuld </p>
                        <?php }; 
                    ?>
                </div>
    
                <div>
                    <input type="submit"> 
                </div>
    
            </form>
        <?php
        }  else { ?>
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
                er heerst paniek in het koningkrijk $land koning $docent is ten einde raad en als 
                koning $docent ten einde raad is, dan roept hij zijn ten-einde-raadsheer $belangrijkpersoon
                <br>
                ' $belangrijkpersoon het is een ramp ! het is een schande ! '
                <br>
                ' sire, majesteit, uwe leidruchtingheid , was is er aan de hand? '
                <br>
                ' mijn $dier is verdwenen! zo maar, zonder waarschuuwing. en ik had net $speelgoed voor hem gekocht '
                <br>
                ' majesteit uw $dier komt vast vanzelf wel weer terug?'
                <br>
                ' ja, das leuk en aardig, maar hoe moet ik in de tussentijds $bezigheid leren 
                <br>'
                ' maar sire, daar kun uw de $geld voor gebruiken '
                <br>
                ' $belangrijkpersoon uw hebt helemaal gelijk, wat zou ik doen als ik jouw niet had '
                <br>
                ' $verveeld, Sire '

                   
                </h3>";
            ?>
            </div>
        <?php } ?> 
    </body>
</html>