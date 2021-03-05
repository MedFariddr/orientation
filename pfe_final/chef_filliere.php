
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Responasble Filliere</title>
  
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">

   <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <style >
  input[type="text"]::-webkit-input-placeholder {
color: black !important;
}
 
input[type="text"]:-moz-placeholder { /* Firefox 18- */
color: black !important;  
}
 
input[type="text"]::-moz-placeholder {  /* Firefox 19+ */
color: black !important;  
}
 

    a:hover {
    color: white;
    background-color: transparent;
}
    table tr{
      cursor: pointer;transition: all .25s ease-in-out;

    }
    table tr:hover{
  
      background-color: #8d8d8d;}
 #table2{
     width:1350px;
    height:400px;
      overflow-y: scroll;

 }
 .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
  </style>
</head>

<body style="background-image:url('background_log.jpg');background-size: 100% 100%  background-repeat: no-repeat
">
 
         <?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      echo '<h1 align="center" style="color:red;font-family: "Times New Roman", cursive;font-size:400%;> Bienvenue : '.$_SESSION["username"].'</h1>';  
      //echo '<br /><br /><a href="log_out_fill.php">Logout</a>';
      //if (isset($_POST["dec"])){
       // header('Location:log_out_fill.php');
      //}  
 }  
 else  
 {  
      header('Location:index1.php');  
 }

 ?>  

  <?php  

    $bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','');
    $reponse = $bdd ->query("SELECT * FROM module");

    

    echo '<h2 style="font-size:220%;color:WHITE " align="center">La liste des modules </h2><br /> <br />';

    echo ' <div id ="table2"class="" > <table class="table" style="margin-left: 2%;color:white" id="table" >';

    echo '<tr>
        <th>id_module</th>

        <th>nom</th>

        <th>credit</th>

        <th>coefficient</th>
        </tr>
        ';

    while ($donnees = $reponse->fetch()) {
      echo "<tr>
          <td>".$donnees['id_module']."</td>
          <td>".$donnees['nom_module']."</td>
          <td>".$donnees['credit']."</td>
          <td>".$donnees['coefficient']."</td>

          </tr>";
    
    }

    echo "  </table>
        </div>  <br />";

    ?>   
<form method="POST" action="">
      <table align="center">
        <tr>  
          <td align="right" style="color:white">Rechercher :</td>
          <td><input type="text" name="rechmod" id="rechmod" placeholder="Recherche par id,nom .."></td>
        <td>  <select  name="pst" id="pst">
<option value="poste" selected disabled >Recherche Par</option>
  <option value="rechid">Id</option>
  <option value="rechnom">Nom</option>
<option value="rechcrd">Credit</option>
<option value="rechcf">Coefficient</option></td>
  <td><button name="rechbutn" id="rechbutn"class="button button5" >Rechercher</button></td>

    <td><button name="actbutn" id="actbutn"class="button button4" >Cacher Resultat</button></td>
      </table>
    </form>

<?php 
if (isset($_POST['rechbutn'])) 
{
  switch ($_POST['pst']) {
    case 'rechid':
    $bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','');
    $reponse = $bdd ->prepare("SELECT * FROM module where id_module = ?");
    $rech = htmlspecialchars($_POST['rechmod']);

    if (!empty($rech)) {
          //echo 2;
        $reponse->execute(array($rech));
            //$userexist = $requser->rowCount();
         
         //echo 3;   //if ($userexist ==1) echo "goood";
        //$bdd->closeCursor();

    echo '<h2 style="color:white">Resultat : </h2><br /> <br />';

    echo '<div class="" ><table id="table"   class="table" style="margin-left: 2%;color:white" >';

    echo '<tr>
        <th>id_module</th>

        <th>nom</th>

        <th>credit</th>

        <th>coefficient</th>
        </tr>';

    while ($donnees = $reponse->fetch()) {
      echo "<tr>
          <td>".$donnees['id_module']."</td>
          <td>".$donnees['nom_module']."</td>
          <td>".$donnees['credit']."</td>
          <td>".$donnees['coefficient']."</td>

          </tr>";
    
    }
}
    echo " </table> </div> <br />";

      # code...
      break;
    
    case 'rechnom':
    $bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','');
    $reponse = $bdd ->prepare("SELECT * FROM module where nom_module = ?");
    $rech = htmlspecialchars($_POST['rechmod']);

    if (!empty($rech)) {
          //echo 2;
        $reponse->execute(array($rech));
            //$userexist = $requser->rowCount();
         
         //echo 3;   //if ($userexist ==1) echo "goood";
        //$bdd->closeCursor();

    echo '<h2 style="color:white">Resultat :</h2><br /> <br />';

    echo '<div class="" ><table id="table"  class="table" style="margin-left: 2%;color:white">';

    echo '<tr>
        <th>id_module</th>

        <th>nom</th>

        <th>credit</th>

        <th>coefficient</th>
        </tr>';

    while ($donnees = $reponse->fetch()) {
      echo "<tr>
          <td>".$donnees['id_module']."</td>
          <td>".$donnees['nom_module']."</td>
          <td>".$donnees['credit']."</td>
          <td>".$donnees['coefficient']."</td>

          </tr>";
    
    }
}
    echo "</table> </div> <br />";
    break;
      # code...
      case 'rechcf':
        # code...
      $bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','');
    $reponse = $bdd ->prepare("SELECT * FROM module where coefficient = ?");
    $rech = htmlspecialchars($_POST['rechmod']);

    if (!empty($rech)) {
         // echo 2;
        $reponse->execute(array($rech));
            //$userexist = $requser->rowCount();
         
         //echo 3;   //if ($userexist ==1) echo "goood";
        //$bdd->closeCursor();

    echo '<h2 style="color:white">Resultat :</h2><br /> <br />';

    echo '<div class="" ><table id="table"  class="table" style="margin-left: 2%;color:white">';

    echo '<tr>
        <th>id_module</th>

        <th>nom</th>

        <th>credit</th>

        <th>coefficient</th>
        </tr>';

    while ($donnees = $reponse->fetch()) {
      echo "<tr>
          <td>".$donnees['id_module']."</td>
          <td>".$donnees['nom_module']."</td>
          <td>".$donnees['credit']."</td>
          <td>".$donnees['coefficient']."</td>

          </tr>";
    
    }
}

    echo "</table> </div> <br />";
        break;
      # code...
    case 'rechcrd':
  $bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','');
    $reponse = $bdd ->prepare("SELECT * FROM module where credit = ?");
    $rech = htmlspecialchars($_POST['rechmod']);

    if (!empty($rech)) {
         // echo 2;
        $reponse->execute(array($rech));
            //$userexist = $requser->rowCount();
         
         //echo 3;   //if ($userexist ==1) echo "goood";
        //$bdd->closeCursor();

    echo '<h2 style="color:white">Resultat :</h2><br /> <br />';

    echo '<div class="" ><table id="table"  class="table" style="margin-left: 2%;color:white">';

    echo '<tr>
        <th>id_module</th>

        <th>nom</th>

        <th>credit</th>

        <th>coefficient</th>
        </tr>';

    while ($donnees = $reponse->fetch()) {
      echo "<tr>
          <td>".$donnees['id_module']."</td>
          <td>".$donnees['nom_module']."</td>
          <td>".$donnees['credit']."</td>
          <td>".$donnees['coefficient']."</td>

          </tr>";
    
    }

    echo "</table>  </div> <br />";   
      break;
  }
  default:
  echo "error"; break;
  } 
}
?>


    <div class="wrapper">
    <form class="form-signin" method="POST" action="">       

      <input type="text" class="form-control" name="idmod" id="idmod" placeholder="ID Module" readonly />
           <input type="text" class="form-control" name="nommod" id="nommod" placeholder="Nom Module" required="" autofocus="" />

     <input type="text" class="form-control" name="crmod" id="crmod"placeholder="Crédit" required=""/>
     <input type="text" class="form-control" name="cfmod" id="cfmod"placeholder="Coéfficient" required=""/>
    
      <label class="checkbox">
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="addbutn"id="addbutn">Ajouter</button>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="modbutn"id="modbutn">Editer</button> 
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="suppr"id="suppr">Supprimer</button> 
 
     
    </form>
         <button style="    background-color: red; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-right: 25%;
" type="submit" name="dec"id="dec"><a href="log_out_fill.php">Sortir</a></button> 

  </div>
  
        <?php

        if (isset($_POST['addbutn'])){
        $nommod = htmlspecialchars($_POST['nommod']);
        $crmod = htmlspecialchars($_POST['crmod']);
        $cfmod = htmlspecialchars($_POST['cfmod']);


        $bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre','root','');
        //$requser = $bdd->prepare("insert into module (nom_module,credit ,coefficient ,id_unite,id_semestre) values ('$nommod','$crmod','$cfmod',NULL,NULL)");

        $requser = $bdd->prepare("insert into module (nom_module,credit ,coefficient ,id_unite,id_semestre) values (?,?,?,?,?)");

        if(!empty($nommod) and !empty($crmod) and !empty($cfmod) ) {

        $requser->execute(array($nommod,$crmod,$cfmod,NULL,NULL));

        
          header('location: chef_filliere.php');
            //$userexist = $requser->rowCount();
         
        //$bdd->closeCursor();
        }
      }
        else{

          //echo 55555;
        }


        if (isset($_POST['modbutn'])){

        $idmod = htmlspecialchars($_POST['idmod']);
        $nommod = htmlspecialchars($_POST['nommod']);
        $crmod = htmlspecialchars($_POST['crmod']);
        $cfmod = htmlspecialchars($_POST['cfmod']);

        $bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre','root','');
        //$requser = $bdd->prepare("insert into module (nom_module,credit ,coefficient ,id_unite,id_semestre) values ('$nommod','$crmod','$cfmod',NULL,NULL)");

        $requser = $bdd->prepare("update module set nom_module = ? , credit = ? , coefficient = ? where id_module = ?");



        if(!empty($nommod) and !empty($crmod) and !empty($cfmod) ) {
          
          $requser->execute(array($nommod,$crmod,$cfmod,$idmod));

        
          header('location: chef_filliere.php');
            //$userexist = $requser->rowCount();
         
        //$bdd->closeCursor();
        }
      }
        else{

          //echo 55555;
        }



        if (isset($_POST['suppr'])){
        $idmod = htmlspecialchars($_POST['idmod']);

        $bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre','root','');
        //$requser = $bdd->prepare("insert into module (nom_module,credit ,coefficient ,id_unite,id_semestre) values ('$nommod','$crmod','$cfmod',NULL,NULL)");

        $requser = $bdd->prepare("delete from module where id_module = ?");

        if(!empty($idmod) ) {

        $requser->execute(array($idmod));

        echo 1;        
          header('location: chef_filliere.php');
            //$userexist = $requser->rowCount();
         echo 2;
        //$bdd->closeCursor();
        }
      }
        else{

          //echo 55555;
        }

        

        ?>
  <script >
      
      var table = document.getElementById('table'),rIndex;

      for (var i = 0; i < table.rows.length; i++) {
        table.rows[i].onclick = function() {
          rIndex = this.rowIndex;
          //console.log(rIndex);
          
          document.getElementById("idmod").value = this.cells[0].innerHTML;
          document.getElementById("nommod").value = this.cells[1].innerHTML;
          document.getElementById("crmod").value = this.cells[2].innerHTML;
          document.getElementById("cfmod").value = this.cells[3].innerHTML;

        }; 
      }

    </script>

</body>

</html>
