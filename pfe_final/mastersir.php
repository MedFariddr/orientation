<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master SIR</title>
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
        <h1 style="margin-left: 30%; color: #585858"><b>Master Systemes Informatiques et Réseaux</b></h1>
        <h2 style="margin-left: 3%; color: #118C4E">Objectifs de la formation </h2>
        <p style="margin-left: 4%">L’objectif de ce Master est de former des informaticiens de haut niveau, capables de : </p>
        <ul style="margin-left: 4%">
        	<li>Planifier, dimensionner, déployer et administrer des réseaux d’entreprise et les applications sous­jacentes.</li>
        	<li>Effectuer des travaux de recherche pointus et suivre l’évolution technologique dans un domaine en plein essor.</li>
	   </ul>
	   <h2 style="margin-left: 3%; color: #118C4E">Competences visés</h2>
	   <p style="margin-left: 4%">Ce parcours comporte des modules de systèmes et réseaux approfondis en vue d’une spécialisation en programmation et administration de systèmes et ingénierie des réseaux. La formation proposée de Master en « Systemes Informatiques Réseaux » est une formation à objectif de double compétence :</p>
	   <ul style="margin-left: 4%">
	   		<li>permettre aux étudiants d’intégrer le secteur professionnel socio­économique.</li>	
	   		<li>prodiguer aux étudiants les connaissances leur permettant de poursuivre des études Doctorales.</li>
	   </ul>
	   <p style="margin-left: 4%">C’est la raison pour laquelle : D’une part, la formation s’est concentrée sur des cours fondamentaux avec un souci d’équilibre entre les TD et les TP D’autre part, des modules à option (deux modules au choix parmi plusieurs) sont orientés sur les aspects de recherche pour initier les étudiants aux thèmes de recherche en cours.</p>
        <h2 style="margin-left: 3%; color: #118C4E">Programme d'etude</h2>
        <article style="margin-left: 5%">
            <h3 style="color: #C1E1A6"><b>1ère année</b></h3><a href="programmeMI.html" style="margin-left: 3%"><b>Programme modules</b></a>
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
                                                        WHERE nom_annee='1ere annee Systemes informatiques et Reseaux'    
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
                                                        WHERE nom_annee='1ere annee Systemes informatiques et Reseaux'    
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
            <h3 style="color: #C1E1A6"><b>2ème année</b> </h3><a href="ProgrammeL2INFO.html" style="margin-left: 3%"><b>Programme modules</b></a>
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
                                                        WHERE nom_annee='2eme annee Systemes informatiques et Reseaux'    
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
                <p style="margin-left: 2%">Le semestre S4 est réservé à un stage ou à un travail d’initiation à la recherche, sanctionnés par un mémoire et une soutenance<b> Le Projet est sur 30 crédits</b></p>
            </article>
        </article>

        </article>
        <h2 style="margin-left: 5%; color: #118C4E">Metiers de cette formation </h2>
        <article style="margin-left: 7%">
        <p>Lorsqu'on obtient un diplôme de Master IL on peut exercé ses métiers : </p>
        <ul>
                <li><a href="ingeninfoind.php">Ingénieur en Informatique Industrielle</a></li>
                <li><a href="archires.php">Architecte Réseau</a></li>
                <li><a href="secresetsyst.php">Sécurité des Systèmes et Réseaux</a></li>                
        </ul>
        </article>

    </article>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <br />

</body>


</html>                      

