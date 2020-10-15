<?php

class verification
{ 

    public $email;
    public $error = false;
    public function __construct($email){
        $this->email = $email;
    }
    public function email()
    {
    return $this->email;
    }
    public function check(){
        if(!preg_match("/^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,3})+$/",$this->email)){
            $this->error = true;
        }
    }
    public function exist($connexion){
        if(!$this->error){
            $sql = "SELECT * FROM utilis WHERE email = :email";
            $res = $connexion->prepare($sql);
            $res->execute([":email" => $this->email]);
            $count = $res->rowCount();
            if($count == 0){
                echo false;
            } else {
                echo true;
            }
        }
    }

}

if(isset($_POST["email"]))
{
    $bdd = new PDO('mysql:host=localhost;dbname=my_meetic;charset=utf8', 'root', '');
    $obj = new verification($_POST["email"]);
    $obj->check();
    $obj->exist($bdd);
}

?>