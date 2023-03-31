<?php
    $error = [];

    if ($_SERVER['REQUEST_METHOD'] == "POST"){

        $kunnen =  $_POST["fkunnen"];
        $persoon =  $_POST["fpersoon"];
        $getal =  $_POST["fgetal"];
        $vakantie =  $_POST["fvakantie"];
        $eigenschapgoed =  $_POST["feigenschapgoed"];
        $eigenschapslecht =  $_POST["feigenschapslecht"];
        $overkomen =  $_POST["foverkomen"];

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
    
            <form action="onkundestart.php" method="post" id="form">
                <div>
                    <h2>onkunde</h2>
                </div>
                <div>
                    <p>wat zou je graag willen kunnen?</p>
                    <input  name="fkunnen" value="<?php echo isset($_POST['fkunnen']) ? $_POST['fkunnen'] : '' ?>">
                    <?php 
                        if (array_key_exists('fkunnen', $error)) { ?>
                            <p id="error">je hebt dit veld niet ingevuld </p>
                        <?php }; 
                    ?>
                </div>
    
                <div>
                    <p>met welk persoon kun je goed opschieten?</p>
                    <input name="fpersoon" value="<?php echo isset($_POST['fpersoon']) ? $_POST['fpersoon'] : '' ?>">
                    <?php 
                        if (array_key_exists('fpersoon', $error)) { ?>
                            <p id="error">je hebt dit veld niet ingevuld </p>
                        <?php }; 
                    ?>
                </div>
    
                <div>
                    <p>wat is je favoriete getal?</p>
                    <input  name="fgetal" value="<?php echo isset($_POST['fgetal']) ? $_POST['fgetal'] : '' ?>">
                    <?php 
                        if (array_key_exists('fgetal', $error)) { ?>
                            <p id="error">je hebt dit veld niet ingevuld </p>
                        <?php }; 
                    ?>
                </div>
    
                <div>
                    <p>wat heb je altijd bij je als je op vakantie gaat?</p>
                    <input  name="fvakantie" value="<?php echo isset($_POST['fvakantie']) ? $_POST['fvakantie'] : '' ?>">
                    <?php 
                        if (array_key_exists('fvakantie', $error)) { ?>
                            <p id="error">je hebt dit veld niet ingevuld </p>
                        <?php }; 
                    ?>
                </div>
    
                <div>
                    <p>wat is je beste persoonlijke eigenschap?</p>
                    <input  name="feigenschapgoed" value="<?php echo isset($_POST['feigenschapgoed']) ? $_POST['feigenschapgoed'] : '' ?>">
                    <?php 
                        if (array_key_exists('feigenschapgoed', $error)) { ?>
                            <p id="error">je hebt dit veld niet ingevuld </p>
                        <?php }; 
                    ?>
                </div>
    
                <div>
                    <p>wat is je slechtste persoonlijke eigenschap?</p>
                    <input  name="feigenschapslecht" value="<?php echo isset($_POST['feigenschapslecht']) ? $_POST['feigenschapslecht'] : '' ?>">
                    <?php 
                        if (array_key_exists('feigenschapslecht', $error)) { ?>
                            <p id="error">je hebt dit veld niet ingevuld </p>
                        <?php }; 
                    ?>
                </div>
    
                <div>
                    <p>wat is het ergste wat je kan overkomen</p>
                    <input  name="foverkomen" value="<?php echo isset($_POST['foverkomen']) ? $_POST['foverkomen'] : '' ?>">
                    <?php 
                        if (array_key_exists('foverkomen', $error)) { ?>
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
                        er zijn veel mensen die niet kunnen $kunnen neem nou  $persoon zelfs met de hulp van een $vakantie
                        of zelfs $getal kan $persoon niet $kunnen . dat heeft niks te maken met gebrek aan $eigenschapgoed ,
                        maar met een te veel aan $eigenschapslecht. te veel $eigenschapslecht leidt tot $overkomen en dat is niet goed
                        als je wilt $kunnen. helaas voor $persoon
                    </h3>";
                ?>
            </div>
        <?php } ?> 
    </body>
</html>