<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            div{
                margin-right:10px;
            }
        </style>
    </head>

    <body>
        <?php
            //commento!!
            //aggiungendo tag e stile si può lavorare sul css :)
            
            
            function length ($a){
                $j=0;
                while(isset($a[$j])){
                    $j++;
                }
                return $j;
            }
            function stampaBelSito(){
                $y=["black","green","red","blue","yellow","pink","orange","brown","grey"];
                $arrayLenght=length($y);
                for($i=0;$i<$arrayLenght;$i++){
                    $x="<div style=color:".$y[$i].">bel sito tobias</div>";
                    echo $x;
                }
            }
            //stampaBelSito();
            /*  per fare un cambiamento allo stile
            echo "<style>
                body{
                    background-color:green;
                }
                </style>"
            */
                echo "<div style=\"display:flex\">";
            for($i=0;$i<20;$i++){
                echo "<div>".$i."</div>";
            }
                echo "</div>";
        ?>
    </body>
</html>
