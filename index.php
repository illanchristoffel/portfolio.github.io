<!DOCTYPE>
<html>
<meta charset="UTF-8">
<head>
    <title>Mon portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/87cb0d3033.js" crossorigin="anonymous"></script>
</head>
<body>
<header>

    <script src="javascript/app.js"></script>

    <div class="menu">
        <nav>
            <ul>
                <li class="nav-intro el-nav" data-nav="intro"><i class="fas fa-home"></i></li>
                <li class="nav-about-me el-nav" data-nav="aboutMe"><i class="fas fa-user-tie"></i></li>
                <li class="nav-projets el-nav" data-nav="projets"><i class="fas fa-briefcase"></i></li>
                <li class="nav-contact el-nav" data-nav="contact"><i class="fas fa-envelope"></i></li>
            </ul>
        </nav>
    </div>
</header>
<div class="intro menu-container" data-container="intro">
    <div class="container">
        <h1>Illan Christoffel</h1>
        <h2 class="desc-intro">Développeur Web</h2>
    </div>
</div>

<div class="aboutMe menu-container slide-left" data-container="aboutMe">
    <div class="portfolio-wrap">
        <div class="design-sous-titre">
            <h2>A propos</h2>
            <span class="span-geo"></span>
        </div>

        <div class="bloc fond-bloc vert-bloc-fond">
            <h3>Je me présente :</h3>
            <div class="txt">Je m'appelle Illan Christoffel et je suis étudiant en BTS SIO (Services informatiques
                aux
                organisations) au lycée Renée Descartes à Champs-Sur-Marne.
                <p>
                    Passionné d'informatique, je poursuis ce cursus afin d'exercer dans le futur, un métier en
                    rapport
                    avec ma passion.
                <p>
                    L'informatique possède de nombreux domaines. Mais je souhaiterais me spécialiser dans le
                    développement web afin de réaliser des tâches données, mais également des projets personnels.
            </div>
        </div>

        <div class="parcours-h2">
            Mon parcours
        </div>
        <div class="bloc-fond-circle clearfix">
            <div class="circle">
                <span class="etude">Terminale ES</span>
                <div class="fleche"><span class="far fa-arrow-alt-circle-right"></span></div>
            </div>


            <div class="circle">
                <span class="etude"> 1ère année BTS SIO</span>
                <div class="fleche"><span class="far fa-arrow-alt-circle-right"></span></div>
            </div>


            <div class="circle">
                <span class="etude">2ème année BTS SIO</span>
            </div>
        </div>
        <div class="bloc fond-bloc vert-bloc-fond">
            <h3>Pourquoi être passé d'une Terminale ES à un BTS "informatique" ?</h3>
            <div class="txt">Avant le lycée j'étais déjà passionné par l'informatique, mais je ne savais pas
                vraiment quelle orientation choisir.
                <p>
                    Ce n'est qu'après l'obtention de mon baccalauréat que j'ai décider de faire de ma passion, mon futur
                    métier.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="projets menu-container" data-container="projets">
    <div class="portfolio-wrap">
        <h2>Portfolio</h2>
        <div class="menu-horizontal-style">
            <ul>
                <li class="nav-lng projet-menu" data-projet="lng-progr">Langage de programmation</li>
                <li class="nav-exp projet-menu" data-projet="page-exp">Experiences</li>
                <li class="nav-veilles projet-menu" data-projet="veilles">Veille technologique</li>
            </ul>
        </div>
        <img class="background-projet" src="images/test.jpg" alt="HTML/CSS">
    </div>
</div>


<div class="lng-progr projet-container" data-sous-menu="lng-progr">
    <div class="portfolio-wrap">
        <div class="menu-horizontal-style">
            <ul>
                <li class="nav-lng change-color projet-menu" data-projet="lng-progr">Langage de programmation</li>
                <li class="nav-exp projet-menu" data-projet="page-exp">Experiences</li>
                <li class="nav-veilles projet-menu" data-projet="veilles">Veille technologique</li>
            </ul>
        </div>
        <div class="cpt">
            <ul class="container-progr projet-container">
                <li class="nav-lng projet-menu" data-projet="html"><img src="images/html.png" alt="HTML/CSS"
                                                                        id="img-html"></li>
                <li class="nav-lng projet-menu" data-projet="java"><img src="images/java1.png" alt="JAVA" id="img-java">
                </li>
                <li class="nav-lng projet-menu" data-projet="php"><img src="images/php.png" alt="PHP" id="img-php"></li>
                <li class="nav-lng projet-menu" data-projet="sql"><img src="images/sql.png" alt="SQL" id="img-sql"></li>
                <li class="nav-lng projet-menu" data-projet="javascript"><img src="images/js.jpg" alt="Javascript"
                                                                              id="img-javascript"></li>

            </ul>
        </div>
    </div>
</div>


<div class="html projet-container" data-sous-menu="html">
    <div class="portfolio-wrap">
        <div class="menu-horizontal-style">
            <ul>
                <li class="nav-lng change-color projet-menu" data-projet="lng-progr">Langage de programmation</li>
                <li class="nav-exp projet-menu" data-projet="page-exp">Experiences</li>
                <li class="nav-veilles projet-menu" data-projet="veilles">Veille technologique</li>
            </ul>
        </div>
        <div class="bloc fond-bloc vert-bloc-fond">
            <h3>Initiation au code HTML/CSS</h3>
            <div class="txt">Ce site a été coder en HTML/CSS, en PHP et en Javascript.
                <p>
                    A travers ce projet, j'ai appris les bases du langage HTML et CSS.
                    J'ai appris à créer des listes, des menus, à gérer des éléments dans des "class", importer des
                    images, créer des liens etc..
                <p>
                    Après avoir codé en HTML, j'ai utiliser deux fichiers CSS.
                <p>
                    <strong>-Un reset</strong>

                <p>
                    <strong>-Un second ou j'ai placé mes codes de style</strong>

                <p>
                    Voici une capture d'écran vous montrant une partie de mon code.
                <p>
                    <img src="images/desc-html.png">
                </p>
            </div>
        </div>

    </div>
</div>


<div class="java projet-container" data-sous-menu="java">
    <div class="portfolio-wrap">
        <div class="menu-horizontal-style">
            <ul>
                <li class="nav-lng change-color projet-menu" data-projet="lng-progr">Langage de programmation</li>
                <li class="nav-exp projet-menu" data-projet="page-exp">Experiences</li>
                <li class="nav-veilles projet-menu" data-projet="veilles">Veille technologique</li>
            </ul>
        </div>
        <div class="bloc fond-bloc vert-bloc-fond">
            <h3>Projet réalisé en Java durant ma seconde année de BTS</h3>
            <div class="txt">J'ai eu à coder une dizaine de projets en java afin de nous instruire les bases tout
                en les approfondissants au fur et à mesure de l'année.
                Nous avons utiliser deux logiciels, <strong>Netbeans</strong> et <strong>Eclipse</strong> afin de
                posséder des bases dans ces deux plateformes.
                <p>
                    Plusieurs projets m'ont vraiment passionné notamment les TP concernant les "Evenements Swing"
                </p>

                <div class="liens-tp">
                    <p>
                        <a href="images/Contexte-swing.pdf" target="_blank">Voici le contexte des 2 TP</a>
                    </p>
                    <p>
                        <a href="tp1.html" target="_blank">Executer le 1er TP</a>
                    </p>
                    <p>
                        <a href="tp2.html" target="_blank">Executer le 2nd TP</a>
                    </p>
                </div>

                <p>
                    Voici une capture d'écran vous montrant une partie du code du 1er TP.
                </p>
                <p>
                    <img src="images/1ertp.png">
                </p>
                <p>
                    <img src="images/1ertp-form.png">
                </p>
            </div>
        </div>
    </div>
</div>


<div class="php projet-container" data-sous-menu="php">
    <div class="portfolio-wrap">
        <div class="menu-horizontal-style">
            <ul>
                <li class="nav-lng change-color projet-menu" data-projet="lng-progr">Langage de programmation</li>
                <li class="nav-exp projet-menu" data-projet="page-exp">Experiences</li>
                <li class="nav-veilles projet-menu" data-projet="veilles">Veille technologique</li>
            </ul>
        </div>
        <div class="bloc fond-bloc vert-bloc-fond">
            <h3>Projet de groupe réalisé en PHP</h3>
            <div class="txt">A la fin de ma seconde année de BTS, j'ai comme objectif de présenter un projet avec
                comme
                contrainte :
                <p>
                    -Codé en PHP avec le framework <strong>CodeIgniter</strong>, qui prend comme forme le modèle MVC
                    (Modèle-vue-controleur)
                </p>
                <p>
                    - SBGD : <strong>Postgresql</strong>
                </p>
                <p>
                    Pour réaliser ce projet, nous nous sommes répartis en 2 groupes de 2 personnes afin de répartir
                    les
                    tâches présenter sous forme de PPE
                </p>
                <div class="liens-tp">
                    <p>
                        <a href="images/Contexte.pdf" target="_blank">Voici le contexte du projet</a>
                    </p>
                    <p>
                        <a href="images/PPE.pdf" target="_blank">La liste des PPE</a>
                    </p>
                    <div class="tester">
                        <p>
                            <a href="test-cvven.html" target="_blank">Tester notre projet</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="sql projet-container" data-sous-menu="sql">
    <div class="portfolio-wrap">
        <div class="menu-horizontal-style">
            <ul>
                <li class="nav-lng change-color projet-menu" data-projet="lng-progr">Langage de programmation</li>
                <li class="nav-exp projet-menu" data-projet="page-exp">Experiences</li>
                <li class="nav-veilles projet-menu" data-projet="veilles">Veille technologique</li>
            </ul>
        </div>
        <div class="bloc fond-bloc vert-bloc-fond">
            <h3>Initiation au sql</h3>
            <div class="txt">Dès ma première année nous avons été initié au langage SQL et ses fonctionnalités
                <p>
                    J'ai appris à créer une base de donnée avec PHPMYADMIN, y gérer une table et ses élements.
                </p>
                <p>
                    J'ai appris à manipuler deux SGBD (Système de gestion de bases de données) :
                <p>
                    <strong>-Mysql</strong>
                </p>
                <p>
                    <strong>-Postgresql</strong>
                </p>
                <p>
                    En plus d'apprendre à créer une base de donnée, j'ai appris à écrire des requêtes SQL via le
                    terminale de commande via PHPMYADMIN où dans mes codes PHP.
                </p>
                <p>
                    Le SQL m'a permis d'ajouter des fonctionnalités à mes projets afin de les concretiser.
                </p>
            </div>
        </div>
    </div>
</div>


<div class="javascript projet-container" data-sous-menu="javascript">
    <div class="portfolio-wrap">
        <div class="menu-horizontal-style">
            <ul>
                <li class="nav-lng change-color projet-menu" data-projet="lng-progr">Langage de programmation</li>
                <li class="nav-exp projet-menu" data-projet="page-exp">Experiences</li>
                <li class="nav-veilles projet-menu" data-projet="veilles">Veille technologique</li>
            </ul>
        </div>
        <div class="bloc fond-bloc vert-bloc-fond">
            <h3>Initiation au javascript</h3>
            <div class="txt">Durant mon second stage, j'ai appris les bases du javascript.
                <p>
                    J'ai appris à créer des variables, des fonctions mais aussi comment utiliser le javascript orienté
                    objet.
                </p>
                <p>
                    Dans ce langage, il y a moins de conventions à respecter et il est très utile. Dans ce portfolio,
                    j'ai
                    eu recours au javascript afin de créer quelques fonctions et animations.
                </p>
                <p>
                    En plus des conseils que l'on m'a apportés, j'ai fait de la veille afin de consolider mes bases.
                </p>
                <p>
                    Afin de tester mes connaissances, j'ai utilisé le sites internet <a
                        href="https://openclassrooms.com/"
                        target="_blank">OpenClassrooms.com</a>
                    et <a href="https://www.freecodecamp.org/" target="_blank">Freecodecamp.org</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="page-exp projet-container scroll" data-sous-menu="page-exp">
    <div class="portfolio-wrap">
        <div class="menu-horizontal-style">
            <ul>
                <li class="nav-lng projet-menu" data-projet="lng-progr">Langage de programmation</li>
                <li class="nav-exp projet-menu change-color" data-projet="page-exp">Experiences</li>
                <li class="nav-veilles projet-menu" data-projet="veilles">Veille technologique</li>
            </ul>
        </div>
        <div class="experience">
            <div class="bloc fond-bloc vert-bloc-fond">
                <h3>Stage première année</h3>
                <div class="txt">Afin de valider ma première année de BTS, j'ai effectué mon stage dans une
                    association nommée
                    <a class="suppr-underline" href="https://www.societe.com/societe/les-fourmis-vertes-425368115.html"
                       target="_blank">Les Fourmis Vertes</a>
                    <p>
                        Durant ce stage, ma mission était de créer un nouveau site pour l'association. J'ai donc décider
                        d'utiliser le framework Wordpress.
                        J'ai décidé d'utiliser Wordpress car je n'avais pas assez de maîtrise en HTML/CSS ou même PHP
                        afin de confectionner à 100% un site internet en 5 semaines.
                    </p>
                    <p>
                        Afin d'être le plus optimal possible, j'ai demandé à ma tutrice, les textes à intégrer et leurs
                        positionnement, les images/vidéos, les couleurs choisis etc...
                        Avec les ressources acquises au-près d'elle je pouvais désormais commencer à travailler tout en
                        lui partageant mon avancé afin d'être au point pour continuer d'avancé sereinement.
                    </p>
                    <p>
                        J'ai décider d'utiliser un plugin nommé <strong>Elementor</strong> afin de faciliter la création
                        du site.
                    </p>
                    <p>
                        Le plugin Elementor est payant et je travaillais pour une association à but non lucratif et il
                        m'était donc impossible de travailler avec toutes les ressources de ce plugin, notamment la mise
                        à disposition de template.
                    </p>
                    <p>
                        J'ai donc eu l'idée' d'ajouter un élement texte en y supprimant son contenu. J'ai ensuite
                        ajouter
                        un fond de couleur (ici blanc) afin de le placer ou je le voulais en jouant avec les padding
                        négatif afin d'agrandir comme je le souhaitais la zone de texte. Celle-ci était donc fixé et
                        j'ai
                        donc pu par la suite y ajouter un menu, du texte, des images, etc... afin de concevoir la
                        première page du site.
                    </p>
                    <p>
                        J'ai dupliquer ma première page afin de pouvoir renommé le double en une autre page et pouvant
                        ainsi modifier son contenu afin de créer une arborescense complète.
                    </p>
                    <p>
                        Ma tutrice voulait que le site sois adaptatif et donc s'adapté aux mobiles et tablettes.
                        Elementor possède un menu afin de gérer les marges et élements s'y trouvant dedans, afin de
                        créer un site 100% responsive et adaptatif.
                    </p>
                    <p>
                        Ma période de stage s'est terminée sans que je puisse achever le site internet. Ma tutrice à
                        donc décider de ne pas le garder, mais j'en garde une bonne experience car j'ai pu appronfondir
                        mes bases en HTML et gagner en autonomie.
                    </p>

                </div>
            </div>
        </div>
        <div class="bloc fond-bloc vert-bloc-fond">
            <h3>Stage seconde année</h3>
            <div class="txt">Afin de valider ma seconde année de BTS, j'ai effectué mon stage dans une
                entreprise, nommée New-Com Régie, qui gère différents sites internet lié à des magasines dans le domaine
                automobile. Voici le site de <a class="suppr-underline" href="https://www.automobile-magazine.fr/"
                                                target="_blank">L'automobile magazine</a>
                <p>
                    J'ai commencé mon stage par une formation au langage HTML/CSS avec la refonte total de mon portfolio (ce site-même) et au langage javascript.
                </p>
                <p>
                    J'ai b
                </p>
                <p>
                    J'ai décider d'utiliser un plugin nommé <strong>Elementor</strong> afin de faciliter la création
                    du site.
                </p>
                <p>
                    Le plugin Elementor est payant et je travaillais pour une association à but non lucratif et il
                    m'était donc impossible de travailler avec toutes les ressources de ce plugin, notamment la mise
                    à disposition de template.
                </p>
                <p>
                    J'ai donc eu l'idée' d'ajouter un élement texte en y supprimant son contenu. J'ai ensuite ajouter
                    un fond de couleur (ici blanc) afin de le placer ou je le voulais en jouant avec les padding
                    négatif afin d'agrandir comme je le souhaitais la zone de texte. Celle-ci était donc fixé et j'ai
                    donc pu par la suite y ajouter un menu, du texte, des images, etc... afin de concevoir la
                    première page du site.
                </p>
                <p>
                    J'ai dupliquer ma première page afin de pouvoir renommé le double en une autre page et pouvant
                    ainsi modifier son contenu afin de créer une arborescense complète.
                </p>
                <p>
                    Ma tutrice voulait que le site sois adaptatif et donc s'adapté aux mobiles et tablettes.
                    Elementor possède un menu afin de gérer les marges et élements s'y trouvant dedans, afin de
                    créer un site 100% responsive et adaptatif.
                </p>
                <p>
                    Ma période de stage s'est terminée sans que je puisse achever le site internet. Ma tutrice à
                    donc décider de ne pas le garder, mais j'en garde une bonne experience car j'ai pu appronfondir
                    mes bases en HTML et gagner en autonomie.
                </p>

            </div>
        </div>
    </div>
</div>


<div class="page-veilles projet-container scroll" data-sous-menu="veilles">
    <div class="portfolio-wrap">
        <div class="menu-horizontal-style">
            <ul>
                <li class="nav-lng projet-menu" data-projet="lng-progr">Langage de programmation</li>
                <li class="nav-exp projet-menu" data-projet="page-exp">Experiences</li>
                <li class="nav-veilles projet-menu change-color" data-projet="veilles">Veille technologique</li>
            </ul>
        </div>
        <div class="bloc fond-bloc vert-bloc-fond">
            <h3>Veille technologique</h3>
            <br>
            <div class="txt"><h3>Qu’est-ce que la veille technologique ?</h3>
                <p>
                    La veille technologique comprend plusieurs choses comme la collecte, le partage et la diffusion
                    d’informations, permettant d’anticiper ou de s’informer sur des changements en matière de Recherche,
                    Développement, Brevet, Lancement de nouveaux produits, matériaux, processus, concepts, innovation de
                    fabrication, etc…, afin d’évaluer l’impact sur l’environnement et l’organisation.
                <p>
                    La veille technologique impliquera de surveiller et d’analyser, notamment l’information
                    scientifique,
                    technique, mais aussi les tendances et analyses prospectives afin de détecter au mieux les cycles et
                    les
                    ruptures.
                <p>
                    <br>
                <h4>Le suivi de l’information passe par plusieurs procédés :</h4>
                <p>
                <h5>La méthode pull :</h5> (tirer l’information), permet de rechercher par soi-même (recherche sur
                internet,
                magazine,
                bibliothèque, séminaires…). Cette démarche prend beaucoup de temps, mais a l’avantage de répondre de
                manière
                précise à la demande.
                <p>
                <h5>La méthode push :</h5> (pousser l’information), permet à l’information de venir vers nous
                régulièrement
                et
                automatiquement. C’est un gain de temps. Mais attention à bien cibler sa demande, pour ne recevoir que
                des
                informations utiles !
                <p>
                <h5>Les alertes</h5> signalent la publication de nouvelles informations dans une revue, un portail, un
                blog
                ou un
                site web. On pose l’alerte dans un moteur de recherche, une base de données spécifique ou directement
                sur le
                site.
                Ex : Les alertes par mail, les alertes par flux RSS
                <p>
                <h5>Le micro-blogging :</h5> Il s’agit d’échanges de messages instantanés courts pour partager de
                l’information
                avec
                une communauté d’internautes.
                Ex : Twitter.
                <p>
                <h5>Les agrégateurs de flux</h5> permettent de centraliser sur une plateforme unique les flux ou fils
                RSS
                disponibles
                sur différentes portails, sites web ou blogs que vous aurez sélectionnés en amont. Ex : Netvibes.
                <p>
                    <br>
                <p>
                    <br>
                    J'ai effectué ma veille durant mes 2 ans de BTS en utilisant differents moyens de prendre de
                    l'information et d'améliorer mes compétences.

                <h6>1. Les alertes Google (Push)</h6>
                <h6> 2. Les flux RSS du navigateur Google Chrome sur mobile en fonction de mes choix (Push)</h6>
                <h6>3. Les recherches sur internet (Pull)</h6>

                <br>
                <p>
                <h3>Les compétences du référentiel utilisées sont :</h3>

                A5.2.2 Veille technologique.
                <p>
                    A5.2.3 Repérage des compléments de formation ou d’auto-formation utiles à l’acquisition de nouvelles
                    compétences.
                <p>
                    A5.2.4 Étude d‘une technologie, d’un composant, d’un outil ou d’une méthode.
                <p>
                    <div class="tester">
                        <br>
                <p>
                    <a href="https://docs.google.com/presentation/d/e/2PACX-1vRmirIcpYAA27y4xB0nDiXpds2cKLm0f8tKycPK1rroYtnGt3uYeBEzG_gX19qgFE1SDoe3YiXuW3lx/pub?start=false&loop=false&delayms=3000"
                       target="_blank">Voir ma veille</a></p>
            </div>
            </p>
        </div>
    </div>
</div>
</div>

<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;

// Load Composer's autoloader
if(isset($_POST['submit'])) {
require 'vendor/autoload.php';


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
        //Server settings         // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host = "smtp.gmail.com";                   // Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   // Enable SMTP authentication
        $mail->Username = 'nallilezher@gmail.com';                     // SMTP username
        $mail->Password = 'Hardrobiwest44';                               // SMTP password
        $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('nallilezher@gmail.com', 'Mailer');
        $mail->addAddress('illan.christoffelpro@gmail.com', 'Illan Christoffel');

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body = 'This is the HTML message body <b>in bold!</b>';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

       if(!$mail->send()){
           echo '<p class="msgCancel"><strong>"Veuillez réessayer !"</strong></p>';
       }
       else{
           echo '<p class="msgSend"><strong>"Message envoyé !"</strong></p>';
       }
}
?>

<div class="contact menu-container slide-left" data-container="contact">
    <div class="contact-form">
        <div class="design-sous-titre">
            <h2>Contactez-moi</h2>
            <span class="span-geo"></span>
        </div>

        <form action="" method="post">

            <input type="text" name="nom" class="nom" placeholder="Votre nom">

            <input type="email" name="email" class="email" placeholder="Votre email">

            <textarea name="message" class="message" placeholder="Votre message"></textarea>

            <input type="submit" name="submit" value="Envoyer" onclick="submit()">
        </form>
    </div>




</div>
</body>

</html>