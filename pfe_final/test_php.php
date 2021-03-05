<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test orient</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
</head>

<body style="background-image:url('orienttest.jpg');background-size: 100% 100%">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.html">OrientInfo </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="index.html">Acceuil </a></li>
                    <li role="presentation"><a href="admission.php">Admission </a></li>
                    <li class="active" role="presentation"><a href="Test_php.php">Test Orient</a></li>
                    <li role="presentation"><a href="formation.php">Formations </a></li>
                    <li role="presentation"><a href="orgaetude.html">Organisation des etudes</a></li>
                    <li role="presentation"><a href="domainapp.php">Domaine D'application De L'informatique </a></li>
                    <li role="presentation"><a href="statistique.html">Statistiques </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="text-center text-info" >Test : êtes-vous à l'aise avec l'informatique ? </h1>
    <form method = "post" action = "">
    <h3 class="text-warning" style="margin-left: 0.2%">1. Vous intéressez-vous aux nouvelles technologies en général ? </h3>
    <div class="radio" style="margin-left: 2%">
        <label style="background-color: #e0edff">
            <input type="radio" name="q1"  value="c11" id="c11">Pas vraiment, tout cela évolue trop vite et cela vous prendrait trop de temps de vous intéresser à tous ces nouveaux outils.</label>
    </div>
    <div class="radio" style="margin-left: 2%">
        <label style="background-color: #e0edff">
            <input type="radio" name="q1"  value="c12" id="c12">Vous suivez les dernières tendances d'assez loin, cela vous intéresse mais pas aupoint de vous procurer les nouveaux gadgets à la mode.</label>
    </div>
    <div class="radio" style="margin-left: 2%">
        <label style="background-color: #e0edff">
            <input type="radio" name="q1"  value="c13" id="c13">Vous suivez le marché des nouvelles technologies avec la plus grande attention.</label>
    </div>
    <h3 class="text-warning" style="margin-left: 0.2%">2. Maîtrisez-vous les outils de base (traitement de texte, tableur...) ? </h3>
    <div class="radio" style="margin-left: 2%">
        <label style="background-color: #e0edff">
            <input type="radio" name="q2"   value="c21" id="c21">Vous ne pouvez pas dire que vous maîtrisez vraiment ces outils, vous savez en utiliser les fonctions de base mais rien de plus. De toute façon c'est largement suffisant pour vos besoins.</label>
    </div>
    <div class="radio" style="margin-left: 2%">
        <label style="background-color: #e0edff">
            <input type="radio" name="q2"  value="c22" id="c22">Vous avez une maîtrise correcte des outils classiques mais dès que vous avez besoin de fonctionnalités un peu plus pointues, cela devient laborieux.</label>
    </div>
    <div class="radio" style="margin-left: 2%">
        <label style="background-color: #e0edff">
            <input type="radio" name="q2"  value="c23" id="c23">Vous estimez très bien utiliser les différentes fonctionnalités des logiciels les plus connus.</label>
    </div>
    <h3 class="text-warning" style="margin-left: 0.2%">3. Vous utilisez principalement les outils informatiques pour : </h3>
    <div class="radio" style="margin-left: 2%">
        <label style="background-color: #e0edff">
            <input type="radio" name="q3"  value="c31" id="c31">Les fonctions les plus basiques qui soient, c'est-à-dire le traitement de texte, la navigation internet et la gestion de vos mails.</label>
    </div>
    <div class="radio" style="margin-left: 2%">
        <label style="background-color: #e0edff">
            <input type="radio" name="q3"  value="c32" id="c32">Vous utilisez aussi bien l'informatique pour des tâches très simples (traitement de texte, tableur, navigation internet...) que pour des tâches plus complexes.</label>
    </div>
    <div class="radio" style="margin-left: 2%">
        <label style="background-color: #e0edff">
            <input type="radio" name="q3"  value="c33" id="c33">Tout ce que vous pouvez faire par informatique, vous le faites, et vous essayez d'ensavoir toujours plus.</label>
    </div>
    <h3 class="text-warning" style="margin-left: 0.2%">4. Vous avez un problème informatique, que faites-vous pour le résoudre ? </h3>
    <div class="radio" style="margin-left: 2%">
        <label style="background-color: #e0edff">
            <input type="radio" name="q4"  value="c41" id="c41">Vous ne voyez pas comment résoudre ce problème seul, la seule solution possible est d'appeler un réparateur informatique.</label>
    </div>
    <div class="radio" style="margin-left: 2%">
        <label style="background-color: #e0edff">
            <input type="radio" name="q4"  value="c42" id="c42">Vous essayez de réfléchir et de trouver une solution, voire même de demander à votre entourage.</label>
    </div>
    <div class="radio" style="margin-left: 2%">
        <label style="background-color: #e0edff">
            <input type="radio" name="q4"  value="c43" id="c43">Pas question de se laisser impressionner, vous mettez àprofit vos connaissances pour résoudre votre problème.</label>
    </div>
    <h3 class="text-warning" style="margin-left: 0.2%">5. Lorsque vous achetez du matériel informatique, qu'est ce qui décide votre achat ?</h3>
    <div class="radio" style="margin-left: 2%">
        <label style="background-color: #e0edff">
            <input type="radio" name="q5"  value="c51" id="c51">L'esthétique : le matériel informatique est souvent assez peu attirant, quitte à acheter du matériel onéreux, autant qu'il soit esthétiquement réussi.</label>
    </div>
    <div class="radio" style="margin-left: 2%">
        <label style="background-color: #e0edff">
            <input type="radio" name="q5"  value="c52" id="c52">Le prix : ce genre de matériel est souvent très cher, vous vous faites donc conseiller pour trouver le bon compromis entre qualité et prix.</label>
    </div>
    <div class="radio" style="margin-left: 2%">
        <label style="background-color: #e0edff">
            <input type="radio" name="q5"  value="c53" id="c53">Les performances : vous prenez soin de votre matériel alors quand il faut investir vous ne lésinez pas ! Vous recherchez des outils performants même si ceux-ci ont un coût important.</label>
    </div>
    <h3 class="text-warning" style="margin-left: 0.2%">6. Retrouvez-vous facilement vos documents sur votre ordinateur ?</h3>
    <div class="radio" style="margin-left: 2%">
        <label style="background-color: #e0edff">
            <input type="radio" name="q6" value="c61" id="c61">Pas vraiment : vous enregistrez vos documents un peu n'importe où sur votre ordinateur et avez parfois du mal à les retrouver quand vous avez besoin.</label>
    </div>
    <div class="radio" style="margin-left: 2%">
        <label style="background-color: #e0edff">
            <input type="radio" name="q6" value="c62" id="c62">La plupart du temps : vous essayez d'être méthodique lorsque vous rangez vos documents mais un petit tri de temps en temps ne serait pas du luxe.</label>
    </div>
    <div class="radio" style="margin-left: 2%">
        <label style="background-color: #e0edff">
            <input type="radio" name="q6" value="c63" id="c63">Tout le temps : l'organisation de vos dossiers est quasiment militaire, cela vous permet de gagner beaucoup de temps et beaucoup d'énervement en moins.</label>
    </div>
    <h3 class="text-warning" style="margin-left: 0.2%">7. Que faites-vous pour entretenir votre ordinateur ?</h3>
    <div class="radio" style="margin-left: 2%">
        <label style="background-color: #e0edff">
            <input type="radio" name="q7" value="c71" id="c71">Rien de particulier, vous essayez juste de faire attention aux mails que vous recevez pour ne pas ouvrir de virus.</label>
    </div>
    <div class="radio" style="margin-left: 2%">
        <label style="background-color: #e0edff">
            <input type="radio" name="q7" value="c72" id="c72">Vous faites régulièrement une analyse complète de votre système par un bon antivirus.</label>
    </div>
    <div class="radio" style="margin-left: 2%">
        <label style="background-color: #e0edff">
            <input type="radio" name="q7" value="c73" id="c73">Non seulement vous entretenez votre système grâce aux différents antivirus et logiciels disponibles, mais vous intervenez aussi physiquement pour dépoussiérer et nettoyer vos composants.</label>
    </div>            
    <button class="btn btn-default" type="submit" name="btanal" id="btanal" style="margin-left: 5%;margin-bottom:2%" onclick="analresult();">Analyser vos résultats</button>
    </form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <script >
            
            function analresult() {    

                    var cpt=0;

                    if (document.getElementById('c11').checked) cpt++;
                    if (document.getElementById('c21').checked) cpt++;
                    if (document.getElementById('c31').checked) cpt++;
                    if (document.getElementById('c41').checked) cpt++;
                    if (document.getElementById('c51').checked) cpt++;
                    if (document.getElementById('c61').checked) cpt++;
                    if (document.getElementById('c71').checked) cpt++;

                    if (document.getElementById('c12').checked) cpt=cpt+2;
                    if (document.getElementById('c22').checked) cpt=cpt+2;
                    if (document.getElementById('c32').checked) cpt=cpt+2;
                    if (document.getElementById('c42').checked) cpt=cpt+2;
                    if (document.getElementById('c52').checked) cpt=cpt+2;
                    if (document.getElementById('c62').checked) cpt=cpt+2;
                    if (document.getElementById('c72').checked) cpt=cpt+2;

                    if (document.getElementById('c13').checked) cpt=cpt+3;
                    if (document.getElementById('c23').checked) cpt=cpt+3;
                    if (document.getElementById('c33').checked) cpt=cpt+3;
                    if (document.getElementById('c43').checked) cpt=cpt+3;
                    if (document.getElementById('c53').checked) cpt=cpt+3;
                    if (document.getElementById('c63').checked) cpt=cpt+3;
                    if (document.getElementById('c73').checked) cpt=cpt+3;

                    if (cpt > 6) {  

                        if (cpt > 11) {

                            if (cpt > 16) {
                     
                                alert("L'informatique vous passionne, vous êtes curieux et aimez en savoir toujours plus sur cet outil qui permet de faire tant de choses. Votre patience et votre envie d'en savoir toujours plus vous amène parfois à passer de longues heures pour résoudre certains problèmes."); 
                     
                            }
                     
                            else alert("Les nouvelles technologies et l'informatique vous intéressent mais vous ne passez pas non plus vos jours et vos nuits devant vos écrans. Pour vous c'est avant tout un outil dont il ne faut pas abuser.");   
                        }

                        else alert("L'informatique ce n'est pas vraiment votre truc. Vous vous en servez quand vous y êtes contraint et forcé ni plus ni moins. Vous ne portez pas un grand intérêt aux nouvelles technologies, pour vous ce sont surtout des gadgets.");  
                    
                    }
     
                    else alert("Veuillez répondre à tous les questions");     
            }

    </script>    


</body>

</html>
