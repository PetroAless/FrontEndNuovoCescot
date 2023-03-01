<?php
    /**FILE PHP LIBRARY-ISH OF ALL FUNCTION DONE BY ME
     * 
     * 
     * 
     * 
     */
    //u can add tags and style to work on virtually everything  


    
    function stampaBelSito(){ //print of a bit of style with a micro array of colors, also BEL SITO TOBIAS
        $y=["black","green","red","blue","yellow","pink","orange","brown","grey"];
        $arrayLenght=count($y);
        for($i=0;$i<$arrayLenght;$i++){
            $x="<div style=color:".$y[$i].">bel sito tobias</div>";
            echo $x;
        }
    }
    function stampaNDiv($n){//bit more complex css to understand the possibilities, virutally unlimited
        echo "<style>
            #nDiv{
                display:flex;
                position:absolute;
                top:200px;
                left:400px;
                transition:transform 20ms ease;
                width:auto;
                height:200px;
                background-color:green;
            }
            #nDiv:hover{
                transform:rotate(3600deg);
            }
            </style>";
        echo "<div id=\"nDiv\">";
        for($i=0;$i<$n;$i++){
            echo "<div>".$i."-"."</div>";
        }
        echo "</div>";
    }


    
    function printHead(){
        ?>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <title>Document</title>
        </head>
        <?php
    }
    function printHeader(){
        ?>
        <header><!-- basic header with links to other future pages-->
            <nav>
                <ul>
                    <li><a href="#">index</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                </ul>
            </nav>
        </header>
        <?php
    }




?>