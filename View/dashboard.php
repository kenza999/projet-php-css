<?php


// $proposals = new ProposalModel();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Freelance Jobs Portal</title>
    <link rel="stylesheet" type="text/css" href="../Public/styles.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
    font-family: Arial, sans-serif;
    
}

header {
    background-color: hsl(0, 0%, 87%);
    color: white;
    padding: 10px 0;
    text-decoration: none;
}

nav ul {
    list-style-type: none;
    padding: 0;
    text-align: center;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: white;
    text-decoration: none;
}

.job-listings {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 20px;
}

.job-card {
    border: 1px solid #ddd;
    margin-bottom: 20px;
    padding: 15px;
    width: 300px;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
}

footer ul {
    list-style-type: none;
    padding: 0;
}

footer ul li {
    display: inline;
    margin-right: 20px;
}
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
  z-index: -1;
}
.sidebar {
    height: 100%;
    width: 250px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color:  hsl(0, 0%, 87%);
    overflow-x: hidden;
    padding-top: 20px;
}

.sidebar p {
    color: hsl(0, 0%, 35%);
    padding: 10px 16px;
}

.sidebar a {
    padding: 6px 16px;
    text-decoration: none;
    font-size: 18px;
    color: hsl(0, 0%, 35%);
    display: block;
    text-decoration: none;
}

.sidebar a:hover {
    color:  hsl(14, 98%, 50%);
    text-decoration: none;
}

.content {
    margin-left: 200px;
    padding: 1px 16px ;
    height: 1000px;
}
hr{
    position: relative;
    left: 50px;
    width: 100px;
}
/* Styles généraux pour la liste des propositions */
.job-listings {
    margin: 20px;
    padding: 0;
}

.proposal {
    border: 1px solid #ddd;
    margin-bottom: 20px;
    padding: 20px;
    border-radius: 8px;
    background-color: #f9f9f9;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.proposal h2 {
    color: #333;
    font-size: 24px;
    margin-top: 0;
}

.proposal p {
    color: #666;
    font-size: 16px;
    line-height: 1.5;
}

/* Spécifique pour le budget, la durée, et d'autres informations clés */
.proposal p span {
    font-weight: bold;
}

/* Styliser le bouton ou le lien pour postuler ou voir plus */
.proposal a {
    display: inline-block;
    text-decoration: none;
    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    margin-top: 10px;
    transition: background-color 0.3s;
}

.proposal a:hover {
    background-color: #0056b3;
}

/* Message pour le travail à distance */
.proposal .remoteWork {
    color: #28a745;
    font-weight: bold;
}
.job-listings{
    margin: auto;
    width: 40%;
}

    </style>
</head>
<body>
 
<div class="sidebar">
            <br><br>
        <p>Tableau de Bord</p>
    <a href="#messages">Messages</a>
    <a href="#ameliorer-profil">Améliorer Mon Profil</a>
    <a href="#gerer-missions">Gérer Mes Missions</a>
    <a href="#factures-paiements">Factures et Paiements</a>
    <a href="#mon-entreprise">Mon Entreprise</a>
    <a href="#mon-compte">Mon Compte</a>
        <hr>
    <a href="index.php?page=logout">Se déconnecter</a>
</div>
     <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Find Jobs</a></li>
                <li><a href="#">Post Job</a></li>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Support</a></li>
                
            </ul>
        </nav>
    </header> 
  
    <div class="job-listings">
    <?php 
    if (!empty($addProposal)) {
        foreach ($addProposal as $proposal): 
            ?>
            <div class="proposal">
                <h2><?php echo htmlspecialchars($proposal['missionName']); ?></h2>
                    <p><?php echo htmlspecialchars($proposal['description']); ?></p>
                    <p>Budget: <?php echo htmlspecialchars($proposal['budget']); ?> €</p>
                    <p>Durée: <?php echo htmlspecialchars($proposal['missionDuration']); ?> jours</p>
                    <p>Début: <?php echo htmlspecialchars($proposal['missionStart']); ?></p>
                    <p>Travail à distance: <?php echo htmlspecialchars($proposal['remoteWork']) ? 'Oui' : 'Non'; ?></p>
                    <p>Lieu: <?php echo htmlspecialchars($proposal['location']); ?></p>
                    <p>Compétences requises: <?php echo htmlspecialchars($proposal['skillsRequired']); ?></p>
                <form action="<?=$_SERVER['REQUEST_URI']?>" method="post">
                    <button class="button" name="accepted" value="oui" style="height: 40px;">Accepter</button>
                    <button class="button" name="accepted" value="non" style="height: 40px;">pas intéressé</button>
                    <input type="hidden" name="id_candidature" value=" <?= $proposal["id"]?> "/>
                </form>
                <!-- Plus de détails ou actions (postuler, voir plus, etc.) -->
            </div>
            <?php 
        endforeach;
    } else {
        echo "Aucune proposition disponible.";
    }
    ?>
</div>

</body>
</html>
