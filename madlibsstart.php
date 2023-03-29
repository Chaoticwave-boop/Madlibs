<!DOCTYPE html>

<html lang="en">
    <head>
        <link  rel="stylesheet" type="text/css" href="madlibls.css"/>
        <title>Document</title>
    </head>

    <body>
        <h1>Mad Libs</h1>
        
        <div id="topform">
            <a href="madlibsstart.php">er heerst paniek</a>
            <a href="onkundestart.php">onkunde</a>
        </div>

        <form action="madlibs.php" method="post" id="form">
            <div>
                <h2>er heerst paniek</h2>
            </div>
            <div>
                <p>welk dier zou je nooit als huisdier willen hebben</p>
                <input  name="fdier">
            </div>

            <div>
                <p>wie is de belangrijkste persoon in je leven</p>
                <input  name="fbelangrijkpersoon">
            </div>

            <div>
                <p>In welk land zou je graag willen wonen</p>
                <input  name="fland">
            </div>

            <div>
                <p>Wat doe je als je je verveeld</p>
                <input  name="fverveeld">
            </div>

            <div>
                <p>met welk speelgoed speelde ja als kind het meest?</p>
                <input  name="fspeelgoed">
            </div>

            <div>
                <p>bij welke docent spijbel je het liefst?</p>
                <input  name="docent">
            </div>

            <div>
                <p>als je 100.000 euro had, wat zou je dan kopen?</p>
                <input  name="fgeld">
            </div>

            <div>
                <p>wat is je favoriete bezigheid</p>
                <input  name="fbezigheid">
            </div>
            
            <div>
                <input type="submit"> 
            </div>

        </form>

    </body>
</html>