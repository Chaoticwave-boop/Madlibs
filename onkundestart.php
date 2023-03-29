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

        <form action="onkunde.php" method="post" id="form">
            <div>
                <h2>onkunde</h2>
            </div>
            <div>
                <p>wat zou je graag willen kunnen?</p>
                <input  name="fkunnen">
            </div>

            <div>
                <p>met welk persoon kun je goed opschieten?</p>
                <input name="fpersoon">
            </div>

            <div>
                <p>wat is je favoriete getal?</p>
                <input  name="fgetal">
            </div>

            <div>
                <p>wat heb je altijd bij je als je op vakantie gaat?</p>
                <input  name="fvakantie">
            </div>

            <div>
                <p>wat is je beste persoonlijke eigenschap?</p>
                <input  name="feigenschapgoed">
            </div>

            <div>
                <p>wat is je slechtste persoonlijke eigenschap?</p>
                <input  name="feigenschapslecht">
            </div>

            <div>
                <p>wat is het ergste wat je kan overkomen</p>
                <input  name="foverkomen">
            </div>

           <div>
                <input type="submit"> 
           </div>

        </form>

    </body>
</html>