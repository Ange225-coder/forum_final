<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Forum de freelance</title>
        <link rel="stylesheet" href="public/css/indexPageStyle.css" type="text/css">
    </head>

    <body>
        <header>

            <div class="headerPar--block">

                <p>Voulez vous faire partir de la communauté des développeurs ivoiriens ? Profiter de ce forum pour vous frayer votre chemin</p>

            </div>


            <div class="header-flexbox">

                <h2>
                    <a href="index.php">
                        <img src="public/pics/logo.jpg" alt="forum-logo">
                    </a>
                </h2>

                <div class="header-flexbox__link">
                    <a href="front/view/users/userLogin/login.php">SE CONNECTER</a>
                    <a href="front/view/users/userRegistration/registration.php">S'INSCRIRE</a>
                </div>
            </div>

        </header>


        <section class="section-information">

            <div class="section-information__title">
                <h1>Votre avenir commence ici</h1>

                <p>
                    Poster des aperçus de vos projets pour obtenir de l'aide ou déposer votre cv pour trouver un Job de développeur.
                </p>
            </div>

            <div>
                <img src="public/pics/job.jpg" alt="forum-job">
            </div>

        </section>


        <section class="section-dev">
            <div class="section-dev--imgCercle">
                <p>
                    <img src="public/pics/code-help.jpg" alt="img" >
                </p>

                <div>
                    <h2>Créer vos préoccupations</h2>

                    <p>Vous pouvez créer vos préoccupations relatives à l'informatique</p>
                </div>
            </div>

            <div class="section-dev--imgCercle">
                <p>
                    <img src="public/pics/code-3.jpg" alt="img-code">
                </p>

                <div>
                    <h2>Obtenez de l'aide</h2>

                    <p>
                        Vous pouvez obtenir de l'aide concernant une préoccupation spécifique
                    </p>
                </div>
            </div>

            <div class="section-dev--imgCercle">
                <p>
                    <img src="public/pics/dev.jpg" alt="img" >
                </p>

                <div>
                    <h2>Trouver un job</h2>

                    <p>
                        Enregistrez-vous, déposer votre CV et trouver un job
                    </p>
                </div>
            </div>

        </section>


        <section class="astuces-dev">

            <div class="astuces-dev--marge">
                <h1>
                    Des astuces de Développements innovants</h1>

                <p>
                    Devenez le type de développeur que vous voulez être avec DEV-FORUM. Poser vos problèmes de développements afin de trouver de l'aide.<br >
                    Vous pourrai également avoir la chance d'être suivi par un administrateur du site pour la résolution de vos préoccupations.<br >
                    Enregistrez vos données, déposer votre CV et trouver un Job partout en Côte d'Ivoire.
                </p>
            </div>

            <div class="astuces-dev--videoDimension">
                <video src="public/video/astuces1.mp4" controls></video>
            </div>
        </section>


        <section class="dev-help">
            <div class="dev-help__img--round">
                <img src="public/pics/help-2.jpg" alt="img">
            </div>

            <div class="dev-help--marge">
                <h2>Nous sommes là pour vous aider</h2>

                <p>
                    Vous avez une question ? Notre équipe est là pour vous répondre du lundi au vendredi de 9 h 00 à 19 h 00, GMT
                </p>

                <p class="dev-help--link">
                    <a href="#">
                        <img src="public/pics/mail.png" alt="img"> <span>NOUS ÉCRIRE</span>
                    </a>
                </p>
            </div>
        </section>


        <hr >

        <footer>
            <div>
                <p class="footer-title">DEV-FORUM</p>

                <p>
                    <a href="#">Qui sommes nous</a>
                </p>

                <p>
                    <a href="#">Financements</a>
                </p>

                <p>
                    <a href="#">Experience de formation</a>
                </p>

                <p>
                    <a href="#">Forum</a>
                </p>

                <p>
                    <a href="#">Blog</a>
                </p>

                <p>
                    <a href="#">Presse</a>
                </p>
            </div>


            <div>
                <p class="footer-title">OPPORTUNITÉS</p>

                <p>
                    <a href="#">Nous rejoindre</a>
                </p>

                <p>
                    <a href="#">Devenir mentor</a>
                </p>

                <p>
                    <a href="#">Devenir coach</a>
                </p>

                <div class="footer-link">
                    <p class="footer-title marge--top">AIDE</p>

                    <div class="footer-link--flex">
                        <p class="footer-link--marge">
                            <a href="#" >
                                <img src="public/pics/mail.png" alt="img" class="footer-link--middle">
                            </a>
                        </p>

                        <p><a href="#" class="footer-link--linkModify">FAQ</a></p>
                    </div>
                </div>

            </div>


            <div>
                <p class="footer-title">POUR LES ENTREPRISES</p>

                <p>
                    <a href="#">Formation, reconversion et alternance</a>
                </p>

                <p class="footer-title marge--top">EN PLUS</p>

                <p>
                    <a href="#">Boutique</a>
                </p>

                <p>
                    <a href="#">Mentions légales</a>
                </p>

                <p>
                    <a href="#">Conditions générales d'utilisation</a>
                </p>

                <p>
                    <a href="#">Politique de protection des données personnelles</a>
                </p>

                <p>
                    <a href="#">Cookies</a>
                </p>

                <p>
                    <a href="front/view/admin/adminHome/admin.php">Administration</a>
                </p>
            </div>
        </footer>
    </body>
</html>
