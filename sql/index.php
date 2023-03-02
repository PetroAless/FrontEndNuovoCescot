<?php 
    require "library.php";
    function statement($pdoTmp, $columnS, $contents){ //insert into passing a pdo instance and strings for variables
        $sql = "INSERT INTO ppl $columnS VALUES (:contents)"; //$column is the name of the column it's gonna fill and contents
        $statement = $pdoTmp->prepare($sql);                   //is what is gonna go in
        //                                                                  fix?
        $statement->execute([
            ':contents' => $contents
            
        ]);
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TRY OF SQL + PHP</h1>
    <?php 
        echo "<p>php works</p>";
        $connStr="mysql:host=$host;dbname=$db;charset=UTF8";
        try {
            //                                                                  NEED A FIX
            //                                                                  NEED A FIX
            //                                                                  NEED A FIX
            //                                                                  NEED A FIX
            //                                                                  NEED A FIX
            $pdo = new PDO($connStr,$username,$password);
            $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if($pdo)echo "Connection to the db: \"$db\" successful! <br>";
            statement($pdo,"(firstName, lastName)","'Alessio', 'Petrotta'");
            /*$statement = $pdo ->prepare("INSERT INTO ppl (firstName,lastName) VALUES ('Alessio','Petrotta');");
            $nome = "Alessio";
            $cognome = "Petrotta";
            $statement ->execute([]);*/
        } catch (PDOException $e) {
            echo "<br>AAAAA PDO EXCEPTION <br>";
            echo $e->getMessage();
        }
    ?>
</body>
</html>