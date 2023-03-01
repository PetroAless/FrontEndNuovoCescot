<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
        <style>
            div{
                margin-right:10px;
            }
        </style>
    </head>
    <body>
    <header>
        <nav>
            <ul>
                <div id="logoHeader">
                </div>
                <div id="navbarDx">
                    <li><a href="#">index</a></li>
                    <li><a href="funzioni.php">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                </div>
            </ul>
        </nav>
    </header>
        
        
        
       

        <?php
            // ------------------"MAIN"----------------
            include 'funzioni.php';
            //stampaBelSito();
            stampaNDiv(20);


        ?>
    </body>
</html>
