<?php
    //commento!!
    //aggiungendo tag e stile si può lavorare sul css :P
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
    function stampaNDiv($n){
            echo "<div style=\"display:flex\">";
    for($i=0;$i<$n;$i++){
        echo "<div>".$i."</div>";
    }
        echo "</div>";
    }
?>