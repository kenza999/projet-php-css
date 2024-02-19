<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Police Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@1,600;1,700&display=swap');
        .style-color {
            color: hsl(14, 98%, 50%);
        }
        body {          
            font-family: 'Roboto Condensed', sans-serif;
            /* Appliquez la police à tout le corps du document */
        }
      
        .text {
            width: 50%; /* Réserve 50% de la largeur pour le texte */
            position: relative;
            top: 50px;
            left: 50%;
        }
        .image_mission{
            position: relative;
            bottom: 258px;
            left: 100%;
            width: 50%; /* Réserve 50% de la largeur pour l'image */
        }
        .home__row{
            position: relative;
            top: 50px;
        }
    </style>
</head>
<body>
    <?php include"header.php";?>
    <section>
        <div class="home__container container grid"> 
            <h1 class="home__row">
                <p class="text">Les Missions de votre choix, 
                    <b class="style-color">À L'ENDROIT DE VOTRE CHOIX ET AU MOMENT
                         DE VOTRE CHOIX !</b>
               <br><br>
            <p>Adapte tes missions à ton rythme
            <b>Staff Tech</b> t'attend !</p>
                <div class="image_mission">
                    <img src="../view/img/Mission (c)De WindAwake shutterstock_565338826.jpg" width="350" height="350" alt="" loading="lazy">
                </div>
            </p>
            </h1>
        </div>
        <div class="about__buttons" >
                <a href="index.php?page=inscriptionView" class="button" style="height: 5px;">
                    <i class="ri-user-add-line"></i>S'inscrire
                </a>
                <a href="index.php?page=connexionView" class="button" style="height: 5px;">
                    <i class="ri-user-line"></i>Se connecter
                </a>
            </div>
            <p>inscrit toi vite !
            <b>Staff Tech</b> t'attend !</p>
           
    </section>
    <?php include"footer.php";?>
</body>
</html>
