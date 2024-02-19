
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DZEG6TEPSR"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.7.0/remixicon.css" crossorigin="">
  <!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<!-- formulaire essaye -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


<link rel="stylesheet" href="Public/styles.css">
    <link rel="stylesheet" href="parametres-cookies.html">
    <title></title>
</head>
<body>
<!-- HEADER SECTION START -->

    <header class="header" id="header">
        <nav class="navbar navbar-expand-lg">
            <a href="#home" class="nav__logo" style="text-decoration: none;">
                <span class="nav__logo-circle">T</span>
                <span class="nav__logo-name">Staff Tech</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div class="about__buttons" style="text-decoration: none;">
                <a href="index.php?page=client_opportun" class="button" style="height: 5px;" >
                    <i class="ri-user-add-line"></i>Entreprise
                </a>
                <a href="index.php?page=freelancer-opportunities" class="button" style="height: 5px;">
                    <i class="ri-user-line"></i>Freelance
                </a>
            </div>
            

            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav__item">
                        <a href="#home" class="nav__link">Acceuil</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">A propos de nous</a>
                    </li>
                    <li class="nav__item">
                        <a href="../view/connexion_client.html" class="nav__link">Entreprise</a>
                    </li>
                    <li class="nav__item">
                        <a href="index.php?page=freelancer-opportunities" class="nav__link">Freelances</a>
                    </li>
                </ul>
                <div class="nav__buttons">
                    <i class="ri-moon-line change-theme" id="theme-button"></i>
                </div>
            </div>
        </nav>
      
    </header>
    
    <main class="main">
        <section class="home section " id="home">
            <!-- bg-light text-center text-lg-start normalement ca va a cote de home section -->
            <div class="home__container container grid">
                <h1 class="home__name ">
                    <!-- bg-light text-center text-lg-start normalement cava a cote home name -->
                    Les entreprises & freelances <p id="color">sont destinés à collaborer.</p> 
                </h1>
                <div class="home__perfil">
                    <div class="home__image">
                        <img src="img/ordinateur.jpg" alt="" class="home__img">
                        <div class="home__shadow"></div>

                        <img src="" alt="" class="home__arrow">
                        <img src="" alt="" class="home__arrow">

                        <div class="geometric-box"></div>
                    </div>
                </div>

                
                <div class="home__info">
                    <p class="home__description">
                       <b>Découvrez le talent idéal</b>  pour faire décoller vos projets... 
                        que vous soyez une  <b>entreprise </b> 
                       à la recherche de freelancers, ou un <b>freelance</b> 
                       en quête de missions dans le domaine de la technologie.</p>
                    </p>
                    <a href="#about" class="home__scroll">
                        <div class="home__scroll-box">
                            <i class="ri-arrow-down-fill"></i>
                        </div>
                        <span class="home__scroll-text">Scroll Down</span>
                    </a>
                </div>
            </div>

            <div class="slider">
                    <span style="--i:1;"><img src="img/imd.png"></span>
                    <span style="--i:2;"><img src="img/ordinateur.jpg"></span>
                    <span style="--i:3;"><img src="img/pexels-rachel-claire-5531004.jpg"></span>
                    <span style="--i:4;"><img src="img/project-1.jpg"></span>
                    <span style="--i:5;"><img src="img/graphisme.png"></span>
                    <span style="--i:6;"><img src="img/screen.jpg"></span>
                    <span style="--i:7;"><img src="img/about .png"></span>
                    <span style="--i:8;"><img src="img/ferrer.jpg"></span>
                </div>
                <br>
                <br>
                <br>
                <div class="home__description">
                    <p><i class="ri-git-repository-private-line"> Paiments sécurisés </i>  
                        <i class="ri-check-line"></i> Mission assurées
                        <i class="ri-shield-check-line"> Documents légaux vérifiés</i></p>
                </div>
                
        </section>
        <!-- ================== ABOUT =================== -->
        <!-- bg-light text-center text-lg-start :::: jai retire ca pour changer dark:light -->
        <section class="about section " id="about">
            <div class="about__container ">
                <div class="about__content">
                    <h2 class="section__title-1">                      
                        <span> A propos de nous.</span>
                    </h2>
                  
                </div>
                <div class="about__info">
                    <p class="about__description">
                        Obtenez des propositions de missions correspondant parfaitement à vos compétences et échangez directement avec plus de <br>
                         70 000 clients de divers secteurs. <strong>Staff Tech</strong> simplifie vos démarches administratives grâce à ses outils en ligne, assure un <br>
                          paiement rapide après chaque mission, et vous offre une tranquillité d'esprit avec une garantie automatique sur toutes vos missions. <br>
                          En bonus, notre équipe dédiée aux freelances est là pour vous soutenir dans votre développement professionnel avec <br>
                        des ressources exclusives, des partenariats, des événements, et des programmes d'apprentissage entre pairs. <br>
                        <!-- <b>Découvrez notre site pour freelances,</b> que vous soyez une  <b>entreprise </b> 
                            à la recherche de freelancers, ou un <b>freelance</b> 
                            en quête de missions dans le domaine de la technologie.</p> -->
                    </p>
                    
                    <!-- <ul class="about__list">
                        <li class="about__item">
                            <b>My Kills are:</b> HTML, CSS, JavaScript,
                            Angular <i class="ri-angularjs-fill"></i>, Git & GitHub <i class="ri-github-fill"></i>, Bootstrap, Figma.
                    </ul> -->

                    </div>
                </div>
            </div>
        </section>
        <!-- ================= SERVICES =================== -->
        <section class="services section">
            <h2 class="section__title-2">
                <span>Les missions que nous offrons.</span>
            </h2>

            <div class="services__container container grid">
                <article class="services__card">
                    <div class="services__border"></div>

                        <div class="services__content">
                            <div class="services__icon">
                                <div class="services__box"></div>
                                <i class="ri-layout-4-line"></i>
                            </div>
                            <h2 class="services__title">DATA, IT & TECH</h2>
                            <p class="services__description">
                                Cloud Engineer
                            </p>
                            <p class="services__description">
                                Data analystes
                            </p>
                            <p class="services__description">
                                Développeurs
                                Back-end
                            </p>
                            <p class="services__description">
                               Développeurs 
                               Front-end
                            </p>
                            <p class="services__description">
                               Développeurs
                               mobile
                            </p>
                            <p class="services__description">
                                Data 
                                scientists
                             </p>
                             <p class="services__description">
                                Experts
                                cybersécurité
                             </p>
                            <p class="services__description">
                               Copywriters
                            </p>
                        </div>
                </article>
                
                <article class="services__card">
                    <div class="services__border"></div>
                        <div class="services__content">
                            <div class="services__icon">
                                <div class="services__box"></div>
                                <i class="ri-code-box-line"></i>
                            </div>
                            <h2 class="services__title">MARKETING & COMMUNICATION</h2>
                            <p class="services__description">
                                Community
                                managers
                            </p>
                            <p class="services__description">
                                Consultants SEO
                            </p>
                            <p class="services__description">
                                Consultants CRM
                            </p>
                            <p class="services__description">
                                Consultants Communication
                            </p>
                            <p class="services__description">
                                Consultants Marketing
                            </p>
                            <p class="services__description">
                                Rédacteurs
                                web
                            </p>
                            <p class="services__description">
                                Webmasters
                            </p>
                        </div>
                </article>
        
                <article class="services__card">
                    <div class="services__border"></div>

                        <div class="services__content">
                            <div class="services__icon">
                                <div class="services__box"></div>
                                <i class="ri-smartphone-line"></i>
                            </div>

                            <h2 class="services__title">DESIGNERS, SON & IMAGE</h2>

                            <p class="services__description">
                               Directeurs
                               artistiques
                            </p>
                            <p class="services__description">
                                Graphistes
                             </p>
                             <p class="services__description">
                              Photographes
                             </p>
                             <p class="services__description">
                                UX 
                                Designers
                             </p>
                             <p class="services__description">
                                Vidéastes
                             </p>
                             <p class="services__description">
                                Webdesigners
                             </p>
                        </div>
                </article>

            </div>
        </section>
        
        <!-- ================= PROJECTS =================== -->

        </section>
      <!-- EXPERIENCE DANS LE DOMAINE DU DEVELLOPEMENT WEB -->
<section class="experience section">
    <h2 class="section__title-2">
        <span>Staff Tech</span>
    </h2>
    <div class="experience__container container grid">

        <!-- Carte d'expérience pour le Blog en Symfony -->
        <article class="experience__card">
            <div class="experience__border"></div>
            <div class="experience__content">
                <div class="experience__icon">
                    <div class="experience__box"></div>
                    <i class="ri-braces-line"></i>
                </div>
                <h2 class="experience__title">Pour les entreprises</h2>
                <p class="experience__description">
                    Développement d'un blog complet avec Symfony, intégrant gestion des articles, des commentaires et authentification des utilisateurs. Application des principes MVC pour une structure de code efficace et maintenable.
                </p>
            </div>
        </article>

        <!-- Carte . pour la Maquette de Site de Voiture -->
        <article class="experience__card">
            <div class="experience__border"></div>
            <div class="experience__content">
                <div class="experience__icon">
                    <div class="experience__box"></div>
                    <i class="ri-layout-line"></i>
                </div>
                <h2 class="experience__title">Maquette de Site de Voiture</h2>
                <p class="experience__description">
                    Conception et développement d'une maquette de site web pour une entreprise de voitures, utilisant HTML5, CSS3 et JavaScript pour un design responsive et interactif.
                </p>
            </div>
        </article>

        <!-- Carte d'expérience pour Compétences Techniques -->
        <article class="experience__card">
            <div class="experience__border"></div>
            <div class="experience__content">
                <div class="experience__icon">
                    <div class="experience__box"></div>
                    <i class="ri-tools-line"></i>
                </div>
                <h2 class="experience__title">Compétences Techniques</h2>
                <p class="experience__description">
                    Maîtrise de HTML5, CSS3, JavaScript, PHP/MySql et Symfony. Expérience en développement de sites web et applications, avec un accent sur la performance, la sécurité et l'expérience utilisateur.
                </p>
            </div>
        </article>

    </div>
</section>

        <!-- ============== CONTACT ================= -->
        <section class="contact section" id="contact">
            <div class="contact__container grid">
                <div class="contact__data">
                    <h2 class="section__title-2">
                        <span>Contact</span>
                    </h2>
        
                    <p class="contact__description-1">
                        Sur notre site de freelance, nous accordons une attention 
                        particulière à chaque e-mail que nous recevons.
                         N'hésitez pas à nous adresser vos messages ou requêtes.
                         Nous nous engageons à vous répondre dans les plus brefs délais.
                    </p>
                    <!-- <p class="contact__description-2">
                        Je prend votre nom et adresse e-mail,
                        mais soyez assuré que vous ne recevrez en retour que ma réponse.
                    </p> -->
                    
        
                    <div class="geometric-box"></div>
                </div>
        
                <div class="contact__mail">
                    <h2 class="contact__title">
                        Envoyez-nous un message
                    </h2>
                    <form action="path/to/submit-form" class="contact__form" id="contact-form">
                        <div class="contact__group">
                            <div class="contact__box">
                                <input type="text" name="user_name" class="contact__input" id="name" required placeholder="First name">
                                <label for="name" class="contact__label">First name</label>
                            </div>
        
                            <div class="contact__box">
                                <input type="email" name="user_email" class="contact__input" id="email" required placeholder="Email Adress">
                                <label for="email" class="contact__label">Email Adress</label>
                            </div>
        
                            <div class="contact__box">
                                <input type="text" name="user_subject" class="contact__input" id="subject" required placeholder="Subject">
                                <label for="subject" class="contact__label">Subject</label>
                            </div>
        
                            <div class="contact__box contact__area">
                                <textarea name="user_message" id="message" class="contact__input" required placeholder="Message"></textarea>
                                <label for="message" class="contact__label">Message</label>
                            </div>
        
                            <p class="contact__message" id="contact-message"></p>
                            <button type="submit" class="contact__button button"> Send Message
                                <i class="ri-send-plane-line"></i>
                            </button>
                        </div>
                    </form>
                </div>
        
                <div class="contact__social">
                    <!-- Remplacer 'path/to/image.jpg' par le chemin de votre image ou supprimer cette ligne si l'image n'est pas nécessaire -->
                    <img src="img/pexels-rachel-claire-5531004.jpg" alt="Social Arrow" class="contact__social-arrow">
        
                    <div class="contact__social-data">
                        <div>
                            <p class="contact__social-description-1">
                                Vous pouvez également nous suivre sur les réseaux sociaux :
                            </p>
                            <p class="contact__social-description-2">
                                <!-- Write me on my social networks -->
                            </p>
                        </div>
        
                        <div class="contact__social-links">
                            <a href="https://www.facebook.com/" target="_blank" class="contact__social-link">
                                <i class="ri-facebook-circle-line"></i>
                            </a>
        
                            <a href="https://www.instagram.com/" target="_blank" class="contact__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
        
                            <a href="https://www.linkedin.com/in/belga-sedrati-aa58972a8/" target="_blank" class="contact__social-link">
                                <i class="ri-linkedin-box-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- DIV cookies -->
        <div class="cookies">
            <div class="cookies-texte">
                <p>Ce site utilise des cookies pour améliorer votre expérience. En utilisant ce site, vous acceptez notre <a href="/1-banniere/parametres-cookies.html">
                    Politique de cookies</a> et nos <a href="/conditions-utilisation">Conditions d'utilisation</a>.</p>
            </div>
            <div class="cookies-btn">
                <button class="btn btn-success">
                    Accepter les cookies
                </button>
                <button class="btn btn-deny">
                    <a href="/1-banniere/parametres-cookies.html">
                        parametres des cookies</a> 
                </button>
            </div><!-- Fermeture cookies -->
        </div><!-- Fermeture container -->
    </main>
<!-- =============== FOOTER =============== -->
<footer class="footer">
    <div class="container ">
        <ul class="footer__links list-unstyled mb-0 ">
            <li>
                <a href="#about" class="footer__link">About</a>
            </li>
            <li>
                <a href="#services" class="footer__link">Services</a>
            </li>
            <li>
                <a href="#projects" class="footer__link">Projects</a>
            </li>
        </ul>
        <span class="footer__copy">
            &#169; All Rights Reserved By Kenza Sedrati
            <a href="#"></a>
        </span>
    </div>
</footer>
<!--=============== SCROLLREVEAL ===============-->
    <a href="#" class="scrollup" id="scroll-up">
    <i class="ri-arrow-up-s-line"></i>
    </a>


    <!-- formulaire essaye  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="Public/scrollreveal.min.js"></script>
<script src="Public/script.js"></script>
<div id="scrollUp" class="scrollup">
    <i class="ri-arrow-up-line"></i>
</div>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'G-DZEG6TEPSR');
  </script>

</body>
</html>















