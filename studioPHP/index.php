<?php
    /**MAIN PHP WITH HEADER
     * 
     *  IT CONTAINS A THE BASIC HEADER WITH A REFERENCE TO ALL OTHERS PHP (OR FUTURE OTHERS)
     *  CONTAINS ALSO FUNCTION CALLS TO TRY EM.
     * 
     */
    include("library.php");//functions done by me
?>
<html lang="en">
    <?php printHead(); //print the head to make code more synthetic 
    ?>
    <body>
        <?php printHeader();//print the basic header with style and what not 
        ?>
        <main>
        <?php

            
            // ------------------"MAIN"----------------
            //stampaBelSito();//print with a bit of style
            //stampaNDiv(20);//print with n of div and a little bit of more complex css to understand
            //printDiv("ciao!","class","id");
            //repeat(12,"ciao", true);
            crea_div("Ciao mondo!",200,"crea_divClass");

        ?>
        </main>
    </body>
</html>
