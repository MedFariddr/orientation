
<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre','root','');
      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
 session_start();  

if (isset($_POST['cnx'])) {
   // Juste pour tracer l'erreur ... echo "5";
  $mailconnect = htmlspecialchars($_POST['username']);
   //echo "6";
  $mdpconnect = htmlspecialchars($_POST['password']);
   //echo "7";
    $postconnect = htmlspecialchars($_POST['pst']);
     //echo "8";
    $userexist=0;
  if(!empty($mailconnect) and !empty($mdpconnect) and !empty($postconnect)) {
    //echo "1";
    $requser = $bdd->prepare("SELECT * FROM membre1 WHERE nom_util = ? and motdepasse = ? and poste= ?" );
     //echo "2";
    $requser->execute(array($mailconnect,$mdpconnect,$postconnect));
     //echo "3";
    $userexist = $requser->rowCount();
     //echo "4";

    if ($userexist==1) {
      //mahoch yedkhol hnaa !!!! psk $userexist=0 !!!
      #header('Location : orgaetude.php');
               #echo "<label class=checkbox> succée </label>";
        $_SESSION["username"] = $_POST["username"];  
        if ($postconnect=="chef_fill")
       header('Location:responsfil.php');
       else         header('Location:responsspec_2.php');

    }
    else {
                     $message = '<label style="font-size :170%">Combinaison Mot de passe/nom_util/poste incorrect !</label>';
                     //echo $postconnect;  
    }
  }
 else {
         echo "<label class=checkbox> tous les champs doivent etre rempli</label>";

 }
}

?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>OrientInfo</title>
  
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">

   <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">

     <style >
  input[type="text"]::-webkit-input-placeholder {
color: #979797 !important;
}
 
  input[type="password"]::-webkit-input-placeholder {
color: #979797!important;
}
 

 

   
  </style>
</head>

<body style="background-image:url('background_log.jpg');background-size: 100% 100%  background-repeat: no-repeat
">
 <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index1.php">OrientInfo </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li  role="presentation"><a href="index.html">Acceuil </a></li>
                    
                    
                </ul>
            </div>
        </div>
    </nav>
  

     <h1   style="color:white;font-family: 'Times New Roman', cursive;font-size:400%;margin-right: 25%"> Pour Une Meilleur </h1>
       <h1   style="color:white;font-family: 'Times New Roman', cursive;font-size:400%; margin-right: 25%">Orientation Des Etudiants</h1>

    <div class="wrapper">
    <form class="form-signin" method="POST" action="">       
      <h2 class="form-signin-heading" align="center" style="color:black;font-family: 'Comic Sans MS', cursive;font-size:200%;background-color: white"> <img src="admin.png" alt="login" height="60" width="60" style="margin-left: 2%">Authentification</h2>
      <input type="text" class="form-control" name="username" id="username" placeholder="Nom d'utilisateur" required="" autofocus="" />
      <select class="form-control" name="pst" id="pst">
<option value="poste" selected disabled >Poste</option>
  <option value="chef_spec">Responsable Specialite</option>
  <option value="chef_fill">Responasble Filliere</option>
  
</select>
      <input type="password" class="form-control" name="password" id="password"placeholder="Mot De Passe" required=""/>
        <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger" align="center">'.$message.'</label>';  
                }  
                ?>          
      <label class="checkbox">
        Vous n'etes pas un administrateur ?Allez Voir L'acceuil  au haut ! 
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="cnx"id="cnx">Connexion</button> 
     
    </form>
   
  </div>
  
  

</body>

</html>
