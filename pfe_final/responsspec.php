<?php  

		$bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','');
		$reponse = $bdd ->query("SELECT * FROM module");

		

		echo '<b>La liste des modules </b><br /> <br />';

		echo '<table id="table" border="1">';

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

		echo "</table> <br />";

		?>
<html>
<head>
	<title>Respons spec</title>
	<style >
		table tr{
			cursor: pointer;transition: all .25s ease-in-out;
		}
		table tr:hover{background-color: #ddd;}
	</style>

</head>
<body>
		<form method="POST" action="">
			<table>
				<tr>	
					<td align="right">id module :</td>
					<td><input type="text" name="idmod" id="idmod" readonly></td>
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
				<tr>	
					<td align="right">Nom semestre :</td>
					<td>			
					<select name="sms" id="sms">		
						<option value="1">Semestre 1</option>
  						<option value="2">Semestre 2</option>
  						<option value="3">Semestre 3</option>
  						<option value="4">Semestre 4</option> 
  						<option value="5">Semestre 5</option>
  						<option value="6">Semestre 6</option>   
  					</select>							
  					</td>
				</tr>
			</table>		
			<table>
			<tr>	
			<td><button name="addbutn" id="addbutn" >Ajouter</button></td>
			<td><button name="suppr" id="suppr" >Supprimer</button></td>
			</tr>
			</table>
		</form>


		
				<?php

				if (isset($_POST['addbutn'])){

				$idmod = htmlspecialchars($_POST['idmod']);
				$idunt = htmlspecialchars($_POST['unt']);
				$idsms = htmlspecialchars($_POST['sms']);

				$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre','root','');
				//$requser = $bdd->prepare("insert into module (nom_module,credit ,coefficient ,id_unite,id_semestre) values ('$nommod','$crmod','$cfmod',NULL,NULL)");

				$requser = $bdd->prepare("update module set id_unite = ? , id_semestre = ? where id_module = ?");



				if(!empty($idmod) and !empty($idunt) and !empty($idsms) ) {
					
					$requser->execute(array($idunt,$idsms,$idmod));

				
					header('location: responsspec.php');
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

				
					header('location: responsspec.php');
				    //$userexist = $requser->rowCount();
				 
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

<b>La liste résultante</b>
<br /> <br />
		
	<table id="table" border="1">

	<tr>

				<th>nom_unite</th>
				<th>nom_semestre</th>
				<th>nom_module</th>
				<th>credit</th>
				<th>coefficient</th>

	</tr>
		<?php	  

		$bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','');
		$reponse = $bdd ->query("SELECT nom_unite, nom_semestre , nom_module, credit, coefficient FROM module ,unite, semestre 
			WHERE module.id_unite=unite.id_unite and module.id_semestre=semestre.id_semestre");

		while ($donnees = $reponse->fetch()) {
			echo "<tr>
					<td>".$donnees['nom_unite']."</td>
					<td>".$donnees['nom_semestre']."</td>
					<td>".$donnees['nom_module']."</td>
					<td>".$donnees['credit']."</td>
					<td>".$donnees['coefficient']."</td>

				  </tr>";
		
		}
		
		?>

	</table> <br />

	


</body>
</html>
		