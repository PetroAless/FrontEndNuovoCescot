<?php
    //commento!!
    //aggiungendo tag e stile si può lavorare sul css :P
    function stampaBelSito(){
        $y=["black","green","red","blue","yellow","pink","orange","brown","grey"];
        $arrayLenght=count($y);
        for($i=0;$i<$arrayLenght;$i++){
            $x="<div style=color:".$y[$i].">bel sito tobias</div>";
            echo $x;
        }
    }
    function stampaNDiv($n){
        echo "<style>
            #nDiv{
                display:flex;
                position:absolute;
                top:200px;
                left:400px;
                transition:transform 20000ms cubic-bezier(0,1.3,0,.81);
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
        echo "<div>".$i."</div>";
    }
        echo "</div>";
    }
?>