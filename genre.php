<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/fontawesome.css" integrity="sha384-vd1e11sR28tEK9YANUtpIOdjGW14pS87bUBuOIoBILVWLFnS+MCX9T6MMf0VdPGq" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e17c4d5997.js" crossorigin="anonymous"></script>
    <title>My_MEETEC</title>
   
</head>
<body>
<header class="bodyy">
<nav class="navbar navbar-expand-lg navbar-light blue">

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        
            <a class="nav-link" href="profil.php">PROFIL</a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="genre.php">GENRE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">#</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">#</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">#</a>
        </li>
    </ul>
</div>

</nav>
    </header>
   


            <h1> GENRE</h1>

    <form action="" method="POST" class="form-example">
    <input  type ='hidden' name ='page'>
   
 
    <i class="fas fa-mars"></i><button class="btn1" type="submit"  name= "homme"> HOMME</button>
  
    <i class="fas fa-venus"></i><button class="btn1" type= "submit" name= "femme">FEMME</button>
     <i class="fas fa-mask"></i><button class="btn1"type="submit" name= "autre">AUTRE</button>
</form>


</form>

</body>
</html>


<?php

$pdo = new PDO('mysql:host=localhost;dbname=my_meetic;charset=utf8','root','');

if(isset($_POST["homme"])){
   
    $sth = $pdo->prepare("SELECT nom ,prenom ,genre from utilis where genre = 'homme'");

    $sth->setFetchMode(PDO::FETCH_OBJ);
    $sth->execute();

    while($row = $sth->fetch())
    {  ?>
        <br><br>
        <table>
            <tr>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>GENRE</th>
    </tr>
    <tr>
                    <td><?php echo $row-> nom;?></td>
                    <td><?php echo $row-> prenom;?></td>
                    <td><?php echo $row-> genre;?></td>
    </tr>
    </table>
<?php
}
}

if(isset($_POST["femme"])){
    // $str = $_POST["search"];
    $sth = $pdo->prepare("SELECT nom ,prenom ,genre from utilis where genre = 'femme'");

    $sth->setFetchMode(PDO::FETCH_OBJ);
    $sth->execute();

    while($row = $sth->fetch())
    {  ?>
        <br><br>
        <table>
            <tr>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>GENRE</th>
    </tr>
    <tr>
                    <td><?php echo $row-> nom;?></td>
                    <td><?php echo $row-> prenom;?></td>
                    <td><?php echo $row-> genre;?></td>
    </tr>
    </table>
<?php

    }
}

if(isset($_POST["autre"])){
    // $str = $_POST["search"];
    $sth = $pdo->prepare("SELECT nom ,prenom ,genre from utilis where genre = 'autre'");

    $sth->setFetchMode(PDO::FETCH_OBJ);
    $sth->execute();

    while($row = $sth->fetch())
    {  ?>
        <br><br>
        <table>
            <tr>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>GENRE</th>
    </tr>
    <tr>
                    <td><?php echo $row-> nom;?></td>
                    <td><?php echo $row-> prenom;?></td>
                    <td><?php echo $row-> genre;?></td>
    </tr>
    </table>
<?php

    }
}


?>