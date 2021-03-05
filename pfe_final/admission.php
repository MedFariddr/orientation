<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
</head>

<body style="background-color: #f0ffff">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.html">OrientInfo </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="index.html">Acceuil </a></li>
                    <li class="active" role="presentation"><a href="admission.php">Admission </a></li>
                    <li role="presentation"><a href="test_php.php">Test Orient</a></li>
                    <li role="presentation"><a href="formation.php">Formations </a></li>
                    <li role="presentation"><a href="orgaetude.php">Organisation des etudes</a></li>
                    <li role="presentation"><a href="domainapp.php">Domaine D'application De L'informatique </a></li>
                    <li role="presentation"><a href="statistique.html">Statistiques </a></li>
                </ul>
            </div>
        </div>
    </nav>
        <h2 style="margin-left: 2%;color:#00bcd4">Conditions d'acceptation </h2>
    <article>
        <h3 style="margin-left: 1%;color: #03a486"><strong>Qualités requises pour étudier les maths-informatique à la fac :</strong> </h3>
        <ul>
            <li> Être réactif.</li>
            <li>Être régulier dans son travail. </li>
            <li>Avoir une bonne capacité d'abstraction. </li>
        </ul>
    </article>
    <article>
        <h3 style="margin-left: 1%;color: #03a486"><strong>Ce qu’on apprend en licence de mathématiques-informatique :</strong> </h3>
        <p style="margin-left: 2%">La filière maths-info est l’une des plus exigeantes, d’autant que l’enseignement varie considérablement du lycée à l’université. “<strong>Beaucoup de concepts sont nouveaux, comme les développements limités ou la convergence des suites...</strong>            </p>
        <p style="margin-left: 2%">Les matières informatiques, complètement nouvelles,n’échappent pas à cette règle. “<strong>Beaucoup de bacheliers croient que l’informatique, c’est très concret,</strong> c’est faire de la bricole, réaliser des sites Web. On les alerte dès le début
            : pour nous,c’est <strong>d’abord apprendre des théorèmes, des modèles</strong> … Mais la compréhension globale est plus importante que l’apprentissage par cœur. </p>
    </article>
    <article>
        <h3 style="margin-left: 1%;color: #03a486"><strong>Moyennes minimales orientation de Bac 2008 à 2017 :</strong></h3>
        <p style="margin-left: 2%">Ces moyennes sont prisent àpartir de site de l’orientation des étudiants <a href="https://www.orientation-esi.dz">www.orientation-esi.dz</a></p>
        <div class="table-responsive">
            <table class="table" style="margin-left: 2%">
                <thead>
                    <tr>
                        <th>Année </th>
                        <th>Moy général Math</th>
                        <th>Moy géneral Scienc/Math Tech</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2017 </td>
                        <td>11.47 </td>
                        <td>12.62 </td>
                    </tr>
                    <tr>
                        <td>2016 </td>
                        <td>10.86 </td>
                        <td>11.88 </td>
                    </tr>
                    <tr>
                        <td>2015 </td>
                        <td>10.00 </td>
                        <td>10.03 </td>
                    </tr>
                    <tr>
                        <td>2014 </td>
                        <td>10.38 </td>
                        <td>11.40 </td>
                    </tr>
                    <tr>
                        <td>2013 </td>
                        <td>10.00 </td>
                        <td>10.42 </td>
                    </tr>
                    <tr>
                        <td>2012 </td>
                        <td>10.00 </td>
                        <td>10.04 </td>
                    </tr>
                    <tr>
                        <td>2011 </td>
                        <td>10.00 </td>
                        <td>10.09 </td>
                    </tr>
                    <tr>
                        <td>2010 </td>
                        <td>10.09 </td>
                        <td>10.98 </td>
                    </tr>
                    <tr>
                        <td>2009 </td>
                        <td>10.00 </td>
                        <td>10.77 </td>
                    </tr>
                    <tr>
                        <td>2008 </td>
                        <td>10.00 </td>
                        <td>11.48 </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>
    <article>
        <h3 style="margin-left: 1%;color: #03a486"><strong>Test acceptation :</strong></h3>
        <p style="margin-left: 2%">Pour voir si vous pouvez inscrits sur ce domaine vous devez remplissez les informations suivantes : </p>
        <form method="post" action="">
        <table style="margin-left: 2%"> 
        <tr>   
            <td>Note Math :</td> 
            <td><input type="text" name="nmat" id="nmat"></td>
        </tr>
        <tr>    
            <td>Note Physique :</td> 
            <td><input type="text" name="nph" id="nphy"></td>           
        </tr>  
        <tr>
          <td>Moy Bac :</td> 
          <td><input type="text" name="mbac" id="mbac"></td>
        </tr>
        </table>
           
        <button class="btn btn-default" type="submit" name="btanal" id="btanal" style="margin-top:2%; margin-left: 5%; margin-bottom: 2%" onclick="Analres();">Analyser vos résultats</button>

        </form>

    </article>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <script >
        function Analres(){
            var moy,nph,nmt;
            
            nmt = Number(document.getElementById('nmat').value);
            nph = Number(document.getElementById('nphy').value);
            moy = Number(document.getElementById('mbac').value);

            nmtess = (nmt + nph)/2;

            if (moy >= 11) {
            
                if (nmtess >= 12 )
                    alert("Vous pouvez faire ce domaine ");
            
                else 
                    alert("Vous devez avoir une moyenne >= 12 de math et physique, essayer de travailler mieux en matières essentielles");
            }
            
            else alert("Vous devez travaillez mieux pour avoir ce que tu veux (au moins une moyenne général >= 11)");    
 
        }
    </script>

</body>

</html>