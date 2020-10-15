<?php
 session_start();

 ?>
 <!DOCTYPE html>

<head>
    <meta charset="utf-8">
     
<link rel="stylesheet" type="text/css" href="style.css">

<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/fontawesome.css" integrity="sha384-vd1e11sR28tEK9YANUtpIOdjGW14pS87bUBuOIoBILVWLFnS+MCX9T6MMf0VdPGq" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>My_meetic</title>
   <script type="text/javascript" src="script.js"></script>
</head>
<body >
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


   <body>
   <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
            <img src="login-user-icon.png" alt="" class="img-rounded img-responsive" />
                <div class="row">
                  
                    <div class="col-sm-6 col-md-8">
                        
                    
                            <i class="glyphicon glyphicon-envelope">Email :<?php echo $_SESSION['email']?></i>
                            <br/>
                            <i class="glyphicon glyphicon-envelope">Nom :<?php echo $_SESSION['nom']?></i>
                            <br>
                            <i class="glyphicon glyphicon-envelope">Prenom :<?php echo $_SESSION['prenom']?></i>
                            <br>
                            <i class="glyphicon glyphicon-envelope">Genre :<?php echo $_SESSION['genre']?></i>
                            <br>
                            <i class="glyphicon glyphicon-envelope">Loisir :<?php echo $_SESSION['loisir']?></i>
                            <br>
                          
                            <br><br>
                     
                          
                                <button class="red"><a href ="deconexion.php">DECONNEXION</a></button>
                                <button ><a href ="editprofil.php">Editer mon profil</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

 </html




 <?php

    
// }  
  ?>



