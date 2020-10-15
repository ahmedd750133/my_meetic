
<?php

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $mdp = hash("sha512",$_POST ["mdp"]);
  
    
    if($email&&$mdp)
    {   
        $query = " SELECT * FROM utilis WHERE email='$email'&& mdp='$mdp'";
        $connect =mysqli_connect("localhost","root","", "my_meetic");
       // mysql_select_db('my_meetic');
    
        $table = mysqli_query($connect, $query);
        $rows = mysqli_num_rows($table);
        $result = mysqli_fetch_array($table, MYSQLI_ASSOC);
        if($rows == 1)
        {  

            session_start();
          
      $_SESSION['email']=$result['email'];
      $_SESSION['nom']=$result['nom'];
      $_SESSION['prenom']=$result['prenom'];
      $_SESSION['mdp']=$result['mdp'];
      $_SESSION['loisir']=$result['loisir'];
      $_SESSION['genre']=$result['genre'];
      $_SESSION['date']=$result['date'];
          
            header('Location:home.html');

        }else echo "Pseudo ou password incorect!";
    }else echo "veulliez saisir tous les champs";


    
}
?>

<html>
  <head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script type="text/javascript" src="my_script.js"></script>
  <head>
  <body>
<form method="POST" action ="loginn.php">
<div class="form-example1">
<img src="loggin.jpg" alt="Avatar" class="avatar">
<div class="imgcontainer">
    
  </div>

  <div class="container">
    <label for="email"><b>Email</b></label>
    <input class="inputt" type="text" placeholder="Enter email" name="email" >

    <label for="mdp"><b>Password</b></label>
    <input class="inputt"type="password" placeholder="Enter Password" name="mdp" >
        
    <button type="submit" name="submit">Login</button>
    <br>
    <a id="btn" href="index.html"> s'inscrire</a>
  </div>
</div>
  
</form>

</body>

</html