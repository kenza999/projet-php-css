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
        <!-- code moi une page dacceuil pour les entreprises -->
        <div class="home__row row justify-content-center align-items-start text">
            
                <h1 class="style-color fs-3 fw-bold">Client</h1>
             



      
        <div class="about__buttons" >
                <a href="index.php?page=register_client" class="button" style="height: 5px;">
                    <i class="ri-user-add-line"></i>S'inscrire
                </a>
                <a href="index.php?page=connexion_client" class="button" style="height: 5px;">
                    <i class="ri-user-line"></i>Se connecter
                </a>
            </div>
            <p>inscrit toi vite !
            <b>Staff Tech</b> t'attend !</p>
            
    </section>
    <?php include"footer.php";?>
</body>
</html>
