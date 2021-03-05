
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
ob_start();

		$bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','');
		$reponse = $bdd ->query("SELECT * FROM module");

		

		echo '
		<h2 style="margin-left: 1%">administration des unités : </h2>

		<table id="tab1" cellspacing="15">
				<tr>
				<td>
				<b>La liste des modules </b>
				</td>
				<td>
				<b>La liste des semestres </b>
				</td>
				</tr>';

		echo '<tr>
				<td>
			<div class="" id="table2" ><table id="table1" border="1"  class="responstable">';

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

				  </tr>
				  
				  ";
		
		}

		echo "</table> </div></td><br />";

echo '		<td>
				<div class="" id="table2" ><table id="table4" border="1" class="responstable">';

		echo '<tr>
				<th>id_semestre</th>

				<th>nom_semestre</th>

				<th>id_annee</th>

			  </tr>';

		$reponse = $bdd ->query("SELECT id_semestre, nom_semestre, nom_annee from semestre, annee where semestre.id_annee=annee.id_annee");	  

		while ($donnees = $reponse->fetch()) {
			echo "<tr>
					<td>".$donnees['id_semestre']."</td>
					<td>".$donnees['nom_semestre']."</td>
					<td>".$donnees['nom_annee']."</td>


				  </tr>
				  
				  ";
		
		}

		echo "</table> </div> </td>";		

		?>
<html>
<head>
	<title>Respons Spec</title>

	<style >
		.hovertab tr:hover{background-color: #ddd;}
		 #table2{
     width:600px;
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

	<style >
		.hovertab2 tr:hover{background-color: #ddd;}
	</style>

	<style >
		.hovertab3 tr:hover{background-color: #ddd;}
	</style>

  <link rel="stylesheet" href="css/style (1).css">

</head>
<body>
		<form method="POST" action="">
			<table cellpadding ="5">
				<tr>	
					<td align="right">id module :</td>
					<td><input type="text" name="idmod" id="idmod" readonly></td>
					
					<td align="right">id semestre :</td>
					<td>			
					<input type="text" name="idsms" id="idsms" readonly>							
  					</td>

				</tr>
				<tr>	
					<td align="right">Nom unité :</td>
					<td> 
					<select name="unt" id="unt">
						<option value="1">Fondamentale</option>
  						<option value="2">Methodologique</option>
  						<option value="3">Decouverte</option>
  						<option value="4">Transversal</option>  						
					</select>
					</td>
				</tr>
			</table>		
			<table>
			<tr>	
			<td><button name="addbutn" id="addbutn" class="button" >Ajouter a l'unité</button></td>
			<td><button name="suppr" id="suppr"class="button3" >Supprimer de l'unité</button></td>
			</tr>
			</table>
			<br />

		</form>
		
	<table align="center">
		<td><b>Trier Les Modules par : </b></td>
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

				$idmod = htmlspecialchars($_POST['idmod']);
				$idunt = htmlspecialchars($_POST['unt']);
				$idsms = htmlspecialchars($_POST['idsms']);
				$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre','root','');
				//$requser = $bdd->prepare("insert into module (nom_module,credit ,coefficient ,id_unite,id_semestre) values ('$nommod','$crmod','$cfmod',NULL,NULL)");

				$requser = $bdd->prepare("update module set id_unite = ? , id_semestre = ? where id_module = ?");



				if(!empty($idmod) and !empty($idunt) and !empty($idsms) ) {
					
					$requser->execute(array($idunt,$idsms,$idmod));

				
					header('location: responsspec_2.php');
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

				$requser = $bdd->prepare("update module set id_unite = ? , id_semestre = ? where id_module = ?");



				if(!empty($idmod) ) {
					
					$requser->execute(array(NULL,NULL,$idmod));

				
					header('location: responsspec_2.php');
				    //$userexist = $requser->rowCount();
				 
				//$bdd->closeCursor();
				}
			}
				else{

					//echo 55555;
				}

				

				?>
		


<h2 style="margin-left: 1%">administration des spécialités : </h2>

<b>La liste des spécialités</b>
<br /> <br />
		
	<table class="responstable" id="table3" border="1" >
<tr>
				<th>id_spec</th>

				<th>nom_spec</th>

				<th>id_fil</th>

			  </tr>

		<?php	  
		ob_start();
		$bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','');
		$reponse = $bdd ->query("SELECT * from specialite");

		while ($donnees = $reponse->fetch()) {
			echo '		
				<div class="" >';
				
			echo "<tr>

					<td>".$donnees['id_spec']."</td>
					<td>".$donnees['nom_spec']."</td>
					<td>".$donnees['id_fil']."</td>

				  </tr>";
		echo " </div>";
		}
		
		?>

	</table> 

			<form method="POST" action="">
			<table cellpadding ="5">
				<tr>	
					<td align="right">id spécialité :</td>
					<td><input type="text" name="idsp" id="idsp" readonly></td>			
					<td align="right">Nom spécialité :</td>
					<td><input type="text" name="nomsp" id="nomsp" ></td>
	
					<td align="right">Nom Cycle :</td>
					<td> 
					<select name="idcyc" id="idcyc">
						<option value="1">Licence</option>
  						<option value="2">Master</option>
  						<option value="3">Doctorat</option>
					</select>
					</td>
				</tr>
			</table>		
			<table>
			<tr>	
			<td><button name="addbutn2" id="addbutn2" class="button">Ajouter spécialité</button></td>
			<td><button name="modbutn2" id="modbutn2" class="button2">Modifier spécialité</button></td>
			<td><button name="suppr2" id="suppr2" class="button3">Supprimer spécialité</button></td>
			</td>
			</tr>
			</table>
			<br />
		</form>

	<br />
				<?php
				ob_start();
				if (isset($_POST['addbutn2'])){

				$idsp = htmlspecialchars($_POST['idsp']);
				$nomsp = htmlspecialchars($_POST['nomsp']);
				$idcyc = htmlspecialchars($_POST['idcyc']);

				$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre','root','');
				//$requser = $bdd->prepare("insert into module (nom_module,credit ,coefficient ,id_unite,id_semestre) values ('$nommod','$crmod','$cfmod',NULL,NULL)");

				$requser = $bdd->prepare("INSERT INTO specialite (nom_spec, id_fil) VALUES (?,?)");
				$requser2 = $bdd->prepare("INSERT INTO annee (nom_annee, id_spec,id_cycle) VALUES (?,?,?)");
				$requser3 = $bdd->prepare("INSERT INTO semestre (nom_semestre, id_annee) VALUES (?,?)");


				if(!empty($nomsp) and !empty($idcyc)) {
					
					$requser->execute(array($nomsp,1));
					//$bdd->query("insert into specialite (nom_spec,id_fill) values ('$nomsp',1)");

					$idsp = $bdd->lastInsertId();


					//$requser2 = $bdd->prepare("INSERT INTO annee (nom_annee, id_spec,id_cycle) VALUES (?,?,?)");
					if($idcyc==1) {

						$requser2->execute(array('1ere annee '.$nomsp,$idsp ,1));

								$idann = $bdd->lastInsertId();
								$requser3->execute(array('semestre 1',$idann));
								$requser3->execute(array('semestre 2',$idann));

						$requser2->execute(array('2eme annee '.$nomsp,$idsp,1));

								$idann = $bdd->lastInsertId();
								$requser3->execute(array('semestre 1',$idann));
								$requser3->execute(array('semestre 2',$idann));

						$requser2->execute(array('3eme annee '.$nomsp,$idsp,1));

								$idann = $bdd->lastInsertId();
								$requser3->execute(array('semestre 1',$idann));
								$requser3->execute(array('semestre 2',$idann));

					}

					if($idcyc==2) {

						$requser2->execute(array('1ere annee '.$nomsp,$idsp ,1));

								$idann = $bdd->lastInsertId();
								$requser3->execute(array('semestre 1',$idann));
								$requser3->execute(array('semestre 2',$idann));

						$requser2->execute(array('2eme annee '.$nomsp,$idsp,1));

								$idann = $bdd->lastInsertId();
								$requser3->execute(array('semestre 1',$idann));
								$requser3->execute(array('semestre 2',$idann));
					
					}


					header('location: responsspec_2.php');
				    //$userexist = $requser->rowCount();
				 
				//$bdd->closeCursor();
				}
			}
				else{

					//echo 55555;
				}


				if (isset($_POST['modbutn2'])){

				$idsp = htmlspecialchars($_POST['idsp']);
				$nomsp = htmlspecialchars($_POST['nomsp']);

				$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre','root','');
				//$requser = $bdd->prepare("insert into module (nom_module,credit ,coefficient ,id_unite,id_semestre) values ('$nommod','$crmod','$cfmod',NULL,NULL)");

				$requser = $bdd->prepare("update specialite set nom_spec = ? where id_spec = ?");



				if(!empty($idsp) and !empty($nomsp)) {
					
					$requser->execute(array($nomsp,$idsp));

				
					header('location: responsspec_2.php');
				    //$userexist = $requser->rowCount();
				 
				//$bdd->closeCursor();
				}
			}
				else{

					//echo 55555;
				}


				if (isset($_POST['suppr2'])){

				$idsp = htmlspecialchars($_POST['idsp']);

				$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre','root','');
				//$requser = $bdd->prepare("insert into module (nom_module,credit ,coefficient ,id_unite,id_semestre) values ('$nommod','$crmod','$cfmod',NULL,NULL)");

				$requser = $bdd->prepare("delete from specialite where id_spec = ?");


				if(!empty($idsp) ) {
					
					$requser->execute(array($idsp));

				
					header('location: responsspec_2.php');
				    //$userexist = $requser->rowCount();
				 
				//$bdd->closeCursor();
				}
			}
				else{

					//echo 55555;
				}

				

				?>
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
		<script >
			
			var table = document.getElementById('table1'),rIndex;

			for (var i = 0; i < table.rows.length; i++) {
				table.rows[i].onclick = function() {
					rIndex = this.rowIndex;
					//console.log(rIndex);
					
					document.getElementById("idmod").value = this.cells[0].innerHTML;


				}; 
			}

		</script>

		<script >
			
			var table = document.getElementById('table4'),rIndex;

			for (var i = 0; i < table.rows.length; i++) {
				table.rows[i].onclick = function() {
					rIndex = this.rowIndex;
					//console.log(rIndex);
					
					document.getElementById("idsms").value = this.cells[0].innerHTML;

				}; 
			}

		</script>

		<script >
			
			var table = document.getElementById('table3'),rIndex;

			for (var i = 0; i < table.rows.length; i++) {
				table.rows[i].onclick = function() {
					rIndex = this.rowIndex;
					//console.log(rIndex);
					
					document.getElementById("idsp").value = this.cells[0].innerHTML;
					document.getElementById("nomsp").value = this.cells[1].innerHTML;


				}; 
			}

		</script>				
 <script >
function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById('table1');
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
  table = document.getElementById('table1');
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
  table = document.getElementById('table1');
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
  table = document.getElementById('table1');
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
  table = document.getElementById('table1');
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
  table = document.getElementById('table1');
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

	
</body>
</html>
		