<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_meetic";


class Personnage
{
  private $_id;
  private $_nom;
  private $_prenom;
  private $_date;
  private $_genre;
  private $_ville;
  private $_email;
  private $_mdp;
  private $_loisir;
  
  // Liste des getters
  
  public function id()
  {
    return $this->_id;
  }
  
  public function nom()
  {
    return $this->_nom;
  }
  
  public function prenom()
  {
    return $this->_prenom;
  }
  
  public function date()
  {
    return $this->_date;
  }
  
  public function genre()
  {
    return $this->_genre;
  }
  
  public function ville()
  {
    return $this->_ville;
  }
  public function email()
  {
    return $this->_email;
  }
  
  public function mdp()
  {
    return $this->_mdp;
  }
  
  public function loisir()
  {
    return $this->_loisir;
  }
}
try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    if(isset($_POST['validation'])){
        $nom = $_POST["nom"];
        $prenom =$_POST["prenom"];
        $date =$_POST ["date"];
        $genre = $_POST ["genre"];
        $ville = $_POST ["ville"];
        $email = $_POST ["email"];
        $mdp = $_POST ["mdp"];
        $mdp = hash("sha512",$_POST ["mdp"]);
        $loisir = $_POST ["loisir"];

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO utilis (nom,prenom,date,genre,ville,email,mdp,loisir)
        VALUES ('$nom','$prenom','$date','$genre','$ville','$email','$mdp','$loisir')";

        $conn->exec($sql);
       
        echo json_encode("Profile created successfuly");
   
    }
    
    }

catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


?>

