<?php
try {
    $user ="root";
    $pass ="";
    $dbh = new PDO('mysql:host=localhost;dbname=my_meetic', $user, $pass);
    if(isset($_POST["getuser"])){
        $requete = 'SELECT * from utilis ';
        $select = $dbh->prepare($requete);
        $select->execute();
        $row = $select->fetchAll(PDO::FETCH_OBJ);
        echo json_encode($row);
    }
    
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}


?>
