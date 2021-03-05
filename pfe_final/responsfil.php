

  <?php  
 //login_success.php  
  ob_start();

 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      echo '<h2 align="center" style="color:red;font-family: "Times New Roman", cursive;font-size:400%;> Bienvenue : '.$_SESSION["username"].'</h2>';  
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

		

		echo '<h3 align="center">La liste des modules </h3><br /> <br />';

		echo '<div class=""align="center" id="table2" ><table id="table" border="1" class="responstable"   align="center">';

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

		echo "</table></div> <br />";

		?>
<html>
<head>
	<title>Respons fil</title>
  <link rel="stylesheet" href="css/style (1).css">

	<style >
 #table2{
     width:1350px;
    height:300px;
      overflow-y: scroll;

 }
		table tr{
			cursor: pointer;transition: all .25s ease-in-out;
		}
		table tr:hover{background-color: #ddd;}
		.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;
}
.button:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.button2 {background-color: #008CBA;
 border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;
	} /* Blue */
  .button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.button3 {background-color: #f44336;
	 border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;} /* Red */
    .button3:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
   .button4 {background-color: #e7e7e7;
   border: none;
    color: black;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;}
    .button4:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
    .button5 {background-color: #555555;
   border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;}
    .button5:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
/* buttons de tri */
.button6 {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 3px 7px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
}
.button6:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.button7 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}
.button7:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.button8 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}
.button8:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.button9 {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
}
.button9:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.button10 {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
}
.button10:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.button11 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}
.button11:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
      a:hover {
    color: white;
    background-color: transparent;
}
a:link {
    color: green;
}
a:visited {
    color: white;
}
	</style>
</head>
<body>
		<form method="POST" action="">
			<table align="center">
				<tr>	
					<td align="right">id module :</td>
					<td><input type="text" name="idmod" id="idmod" readonly></td>
				</tr>
				<tr>	
					<td align="right">Nom module :</td>
					<td><input type="text" name="nommod" id="nommod"></td>
				</tr>
				<tr>	
					<td align="right">credit :</td>
					<td><input type="text" name="crmod" id="crmod"></td>
				</tr>
				<tr>	
					<td align="right">coefficient :</td>
					<td><input type="text" name="cfmod" id="cfmod"></td>
				</tr>
			</table>		
			<table align="center">
			<tr>	
			<td><button name="addbutn" id="addbutn" class="button">Ajouter</button></td>
			<td><button name="modbutn" id="modbutn" class="button2">Modifier</button></td>
			<td><button name="suppr" id="suppr" class="button3">Supprimer</button></td>
			</tr>
			 <table align="center" >
        <tr>  
          <td align="" style="color:black">Rechercher :</td>
          <td><input type="text" name="rechmod" id="rechmod" placeholder="Recherche par id,nom .."></td>
        <td>  <select  name="pst" id="pst">
<option value="poste" selected disabled >Recherche Par</option>
  <option value="rechid">Id</option>
  <option value="rechnom">Nom</option>
<option value="rechcrd">Credit</option>
<option value="rechcf">Coefficient</option></td>
  <td><button name="rechbutn" id="rechbutn" class="button4">Rechercher</button></td>

    <td><button name="actbutn" id="actbutn" class="button5">Cacher Resultat</button></td>
      </table>
			</table>
		</form>

  <button style="    background-color: #f1171b; /* Green */
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
		<table align="center">
   <td> <button name="tri"id="tri" class="button6 button7"onclick="sortTable()"> A --> Z</button></td>
<td><button name="tri1"id="tri1" class="button6 button8"onclick="sortTable1()"> Z --> A</button></td>

<td><button name="tri2"id="tri2" class="button6 button9"onclick="sortTable2()">Tri par Credit Ascendant</button></td>
<td><button name="tri3"id="tri3"class="button6 button10" onclick="sortTable3()">Tri par Credi Descendant</button></td>

<td><button align="center" name="tri4"id="tri4" class="button6 button11" onclick="sortTable4()">Tri par Coefficient Ascendant</button></td>
<td><button align="center"name="tri4"id="tri4" class="button6 button11"onclick="sortTable5()" >Tri par Coefficient Descendant</button></td>

  </table>  
				<?php
        ob_start();

				if (isset($_POST['addbutn'])){
				$nommod = htmlspecialchars($_POST['nommod']);
				$crmod = htmlspecialchars($_POST['crmod']);
				$cfmod = htmlspecialchars($_POST['cfmod']);


				$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre','root','');
				//$requser = $bdd->prepare("insert into module (nom_module,credit ,coefficient ,id_unite,id_semestre) values ('$nommod','$crmod','$cfmod',NULL,NULL)");

				$requser = $bdd->prepare("insert into module (nom_module,credit ,coefficient ,id_unite,id_semestre) values (?,?,?,?,?)");

				if(!empty($nommod) and !empty($crmod) and !empty($cfmod) ) {

				$requser->execute(array($nommod,$crmod,$cfmod,NULL,NULL));

				
					header('location: responsfil.php');
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

				
					header('location: responsfil.php');
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

				
					header('location: responsfil.php');
				    //$userexist = $requser->rowCount();
				 
				//$bdd->closeCursor();
				}
			}
				else{

					//echo 55555;
				}

				

				?>

				
<?php 
ob_start();

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

    echo '<h3 align="center"style="color:black">Resultat : </h3><br /> <br />';

    echo '<div class=""align="center" ><table id="table4" border="1" class="responstable"    >';

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
    $reponse = $bdd ->prepare("SELECT * FROM module where nom_module like ?");
    $rech = htmlspecialchars($_POST['rechmod']);

    if (!empty($rech)) {
          //echo 2;
        $reponse->execute(array("%".$rech."%"));
            //$userexist = $requser->rowCount();
         
         //echo 3;   //if ($userexist ==1) echo "goood";
        //$bdd->closeCursor();

    echo '<h3 style="color:black" align="center">Resultat :</h3><br /> <br />';

    echo '<div class="" align="center" ><table  id="table4"   class="responstable" border="1">';

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

    echo '<h3 style="color:black">Resultat :</h3><br /> <br />';

    echo '<div class=""align="center" ><table  id="table4"   border="1" class="responstable"  border="1">';

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

    echo '<h3 style="color:black" align="center">Resultat :</h3><br /> <br />';

    echo '<div class="" align="center" ><table id="table4"  class="responstable" border="1">';

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



  <script >
function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById('table');
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[1];
      y = rows[i + 1].getElementsByTagName("TD")[1];
      // Check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        // If so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}


</script>
  <script >
function sortTable1() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById('table');
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[1];
      y = rows[i + 1].getElementsByTagName("TD")[1];
      // Check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
        // If so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}


</script>


 <script >
function sortTable2() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById('table');
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[2];
      y = rows[i + 1].getElementsByTagName("TD")[2];
      // Check if the two rows should switch place:
      if (Number(x.innerHTML) > Number(y.innerHTML.toLowerCase())) {
        // If so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>

 <script >
function sortTable3() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById('table');
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[2];
      y = rows[i + 1].getElementsByTagName("TD")[2];
      // Check if the two rows should switch place:
      if (Number(x.innerHTML) < Number(y.innerHTML)) {
        // If so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}


</script>



<script >
function sortTable4() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById('table');
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[3];
      y = rows[i + 1].getElementsByTagName("TD")[3];
      // Check if the two rows should switch place:
      if (Number(x.innerHTML) > Number(y.innerHTML.toLowerCase())) {
        // If so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>

 <script >
function sortTable5() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById('table');
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[3];
      y = rows[i + 1].getElementsByTagName("TD")[3];
      // Check if the two rows should switch place:
      if (Number(x.innerHTML) < Number(y.innerHTML)) {
        // If so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}


</script>

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
		
		<script >
			
			var table = document.getElementById('table4'),rIndex;

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
			