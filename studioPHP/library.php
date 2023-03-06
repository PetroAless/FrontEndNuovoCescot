<?php
    /**FILE PHP LIBRARY-ISH OF ALL FUNCTION DONE BY ME
     * 
     * 
     * 
     * 
     */
    const colors = ["grey","green","red","blue","yellow","pink","orange","brown","black"];
    const colorsLength = 9;
    function stampaBelSito(){ //print of a bit of style with a micro array of colors, also BEL SITO TOBIAS
        for($i=0;$i<colorsLength;$i++){
            $x="<div style=color:".colors[$i].">bel sito tobias</div>";
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


    //print functions of big pieces of html page
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
                </ul>
            </nav>
        </header>
        <?php
    }
    
    //print a single div with specific characteristics
    function printDiv($contenuto, $class="", $id=""){
        echo "<div";
        if($class!=""){
            echo " class='".$class."'";
            //function to add style that changes the class or id
        }
        if($id!="")echo " id='".$id."'";
        echo ">".$contenuto;
        echo "</div>";
    }

    //function repeat (number e string) prints the string as many times as the number and endline after every print
    //tag section added for exercise 
    function repeat($number, $string,$checker=false){
        $tmp="";
        echo "<section>";
        for($i=0;$i<$number;$i++){
            $tmp = $checker ? $i+1 . " " : "";//checker and tmp are used to count on screen the number of times 
            //and to check functionality
            echo printDiv($tmp.$string . "<br>","class","id");
        }
        echo "</section>";
    }





    function crea_div($text,$nDiv,$class1,$class2=""){
        for($i=0;$i<$nDiv;$i++){
            if($i%2==0||$class2==""){
                printDiv($text,$class1);
            }else{
                printDiv($text,$class2);
            }
        }
    }
    function stampaDoppioArray($arrVal,$arrClass){
        if(count($arrVal)!=count($arrClass)){
            echo "array hanno lunghezza diversa";
            return;
        }
        $n=count($arrVal);
        for ($i=0; $i < $n; $i++) { 
            echo "<div class='".$arrClass[$i]."'>";
            echo $arrVal[$i];
            echo "</div><br>";
        }
    }
?>