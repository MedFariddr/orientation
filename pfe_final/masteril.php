<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master IL</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
</head>



<body style="background-color: #F4F6F6">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.html">OrientInfo </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="index.html">Acceuil </a></li>
                    <li role="presentation"><a href="admission.php">Admission </a></li>
                    <li role="presentation"><a href="test_php.php">Test Orient</a></li>
                    <li class="active" role="presentation"><a href="formation.php">Formations </a></li>
                    <li role="presentation"><a href="orgaetude.php">Organisation des etudes</a></li>
                    <li role="presentation"><a href="domainapp.php">Domaine D'application De L'informatique </a></li>
                    <li role="presentation"><a href="statistique.html">Statistiques </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    

    <article style="margin-left: 2%">
        <h1 style="margin-left: 30%; color: #585858"><b>Master Ingenierie Logiciel</b></h1>
        <h2 style="margin-left: 3%; color: #118C4E">Objectifs de la formation </h2>
        <p style="margin-left: 4%"> Les objectifs de cette formation visent un double aspect, c'est-??-dire permettre aux ??tudiants en fin de cycle master :</p>
        <ul style="margin-left: 4%">
        	<li>d???avoir des comp??tences en ing??nierie des logiciels leur permettant d???int??grer le monde l???entreprise pour les aspects de conception, de d??veloppement et d???assurance qualit?? des syst??mes d??velopp??s d???une mani??re g??n??rale (syst??mes d???information, syst??mes de bases de donn??es, syst??mes logiciels sp??cifiques,...)</li>
        	<li>permettre aux ??tudiants d???acqu??rir des connaissances approfondies (?? travers certains enseignements acad??miques) leur permettant un acc??s ?? des ??tudes de post-graduation.</li>
	   </ul>
	   <p style="margin-left: 4%">Les retomb??es de cette formation concernent aussi bien le contexte r??gional que le contexte national au vu : </p>
	   <ul style="margin-left: 4%">
	   		<li>des besoins immenses en mati??re de comp??tences dans le domaine du d??veloppement de logiciels (?? tous les niveaux) pour le secteur ??conomique, d???une part,</li>	
	   		<li>des besoins de potentiels humains d???encadrement ?? travers des formations de Doctorat.</li>
	   </ul>
        <h2 style="margin-left: 3%; color: #118C4E">Programme d'etude</h2>
        <article style="margin-left: 5%">
            <h3 style="color: #C1E1A6"><b>1??re ann??e</b></h3><a href="programmeMI.html" style="margin-left: 3%"><b>Programme modules</b></a>
            <article style="margin-left: 3%">
                <h4 style="color: #FF9009">Semestre 1</h4>
                <div class="table-responsive">
                    <table border="1" style="margin-left: 2%" width="45%" height="35%" >
                        <thead>
                            <tr bgcolor="#d2cda8" height="30">
                                <th>nom_unite</th>
                                <th>nom_module</th>
                                <th>credit</th>
                                <th>coefficient</th>
                            </tr>
                        </thead>
                        <tbody>

                         <?php
                         
                            ob_start();
                            $bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','');
                            $reponse = $bdd ->query("select nom_unite, nom_module, credit, coefficient 
                                                        from unite, module 
                                                        where unite.id_unite=module.id_unite
                                                        and module.id_semestre=(
                                                        SELECT id_semestre
                                                        from semestre
                                                        where semestre.id_annee=(
                                                        SELECT id_annee
                                                        FROM annee
                                                        WHERE nom_annee='1ere annee Ingenerie logiciel'    
                                                        )
                                                        and nom_semestre='semestre 1'    
                                                        )");

                            while ($donnees = $reponse->fetch()) {
                            echo "<tr>

                            <td>".$donnees['nom_unite']."</td>
                            <td>".$donnees['nom_module']."</td>
                            <td>".$donnees['credit']."</td>
                            <td>".$donnees['coefficient']."</td>

                            </tr>";
        
                            }

                         ?>

                        </tbody>
                    </table>
                </div>
            </article>
            <article style="margin-left: 3%">
                <h4 style="color: #FF9009">Semestre 2</h4>
                <div class="table-responsive">
                    <table border="1" style="margin-left: 2%" width="45%" height="35%" >
                        <thead>
                            <tr bgcolor="#d2cda8" height="30">
                                <th>nom_unite</th>
                                <th>nom_module</th>
                                <th>credit</th>
                                <th>coefficient</th>
                            </tr>
                        </thead>
                        <tbody>

                         <?php
                         
                            ob_start();
                            $bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','');
                            $reponse = $bdd ->query("select nom_unite, nom_module, credit, coefficient 
                                                        from unite, module 
                                                        where unite.id_unite=module.id_unite
                                                        and module.id_semestre=(
                                                        SELECT id_semestre
                                                        from semestre
                                                        where semestre.id_annee=(
                                                        SELECT id_annee
                                                        FROM annee
                                                        WHERE nom_annee='1ere annee Ingenerie logiciel'    
                                                        )
                                                        and nom_semestre='semestre 2'    
                                                        )");

                            while ($donnees = $reponse->fetch()) {
                            echo "<tr>

                            <td>".$donnees['nom_unite']."</td>
                            <td>".$donnees['nom_module']."</td>
                            <td>".$donnees['credit']."</td>
                            <td>".$donnees['coefficient']."</td>

                            </tr>";
        
                            }

                         ?>

                        </tbody>
                    </table>
                </div>
            </article>
        </article>
        <article style="margin-left: 5%">
            <h3 style="color: #C1E1A6"><b>2??me ann??e</b> </h3><a href="ProgrammeL2INFO.html" style="margin-left: 3%"><b>Programme modules</b></a>
            <article style="margin-left: 3%">
                <h4 style="color: #FF9009">Semestre 3</h4>
                <div class="table-responsive">
                    <table border="1" style="margin-left: 2%" width="45%" height="35%" >
                        <thead>
                            <tr bgcolor="#d2cda8" height="30">
                                <th>nom_unite</th>
                                <th>nom_module</th>
                                <th>credit</th>
                                <th>coefficient</th>
                            </tr>
                        </thead>
                        <tbody>

                         <?php
                         
                            ob_start();
                            $bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','');
                            $reponse = $bdd ->query("select nom_unite, nom_module, credit, coefficient 
                                                        from unite, module 
                                                        where unite.id_unite=module.id_unite
                                                        and module.id_semestre=(
                                                        SELECT id_semestre
                                                        from semestre
                                                        where semestre.id_annee=(
                                                        SELECT id_annee
                                                        FROM annee
                                                        WHERE nom_annee='2eme annee Ingenerie logiciel'    
                                                        )
                                                        and nom_semestre='semestre 1'    
                                                        )");

                            while ($donnees = $reponse->fetch()) {
                            echo "<tr>

                            <td>".$donnees['nom_unite']."</td>
                            <td>".$donnees['nom_module']."</td>
                            <td>".$donnees['credit']."</td>
                            <td>".$donnees['coefficient']."</td>

                            </tr>";
        
                            }

                         ?>

                        </tbody>
                    </table>
                </div>
            </article>
            <article style="margin-left: 3%">
                <h4 style="color: #FF9009">Semestre 4</h4>
                <p style="margin-left: 2%">Le semestre S4 est r??serv?? ?? un stage ou ?? un travail d???initiation ?? la recherche, sanctionn??s par un m??moire et une soutenance<b> Le Projet est sur 30 cr??dits</b></p>
            </article>
        </article>

        </article>
        <h2 style="margin-left: 5%; color: #118C4E">Metiers de cette formation </h2>
        <article style="margin-left: 7%">
        <p>Lorsqu'on obtient un dipl??me de Master IL on peut exerc?? ses m??tiers : </p>
        <ul>
        	    <li><a href="AnalysteProgrammeur.php">Analyste-Programmeur</a></li>
                <li><a href="chefprojet.php">Chef Projet Informatique</a></li>
                <li><a href="adminbd.php">Administrateur Bases de Donn??es</a></li>
        </ul>
        </article>

    </article>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <br />

</body>


</html>                      

