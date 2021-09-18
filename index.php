<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E6'Coif</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
</head>
<body>
    <div class="container">
        <div class="imgsalon">
            <img class="logo" src="logo_e6coif.svg" alt="">
            <div class="descr">
            Salon de coiffure pour dame, par rendez-vous
            </div>
            
            <!-- <div class="arrow">
                &#8659;
            </div> -->
        </div>
        <div class="imgcffeuse">        
        </div>
        <div class="form">
        Date et heure du rendez vous :
            <br>
            <input type="date" id="start" name="trip-start"
            value=<?php echo date("Y-m-d"); ?>
            min=<?php echo date("Y-m-d"); ?> max="2025-12-31">
            <input type="time" min="9:00" max="19:00">
            <br>
            Entrez votre numéro de téléphone:
            <br>
            <input type="tel">
            <br>
            Entrez votre nom et prénom
            <br>
            <input type="text" placeholder="Nom"><input type="text" placeholder="Prénom">
             <br>
             <br>
             Tous les jours sauf lundi et dimanche 
        <br>
        Ouvert de 9H à 19H sans interruption
           <br>
           <a href ="mailto: reservations@e6coif.be">📧 reservations@e6coif.be</a>
           <br>
            <br>
            <a href="#" class="fa fa-facebook"></a>  
            <a href="#" class="fa fa-twitter"></a>  
            <a href="#" class="fa fa-instagram"></a>
        </div>
        <img class="cis" src="sci.png" alt="">
        <img class="cis2" src="sci.png" alt="">
        <div class="avis1" ><img src="coiff1.jpg" alt=""><p>Coupe magnifique, ravie !<br><span>@Mirobela</span><p></div>
        <div class="avis2" ><img src="coiff2.jpg" alt=""><p>Démocratique et très réussi !<br><span>@Siloa</span><p></div>
        <div class="iframe"> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2542.7196271694934!2d4.4386216155814955!3d50.409062579469655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2260aa361529f%3A0x4cb3599f3c97eb86!2sRue%20de%20Dampremy%2C%206000%20Charleroi!5e0!3m2!1sfr!2sbe!4v1631904461256!5m2!1sfr!2sbe" width="65%" height="65%" style="border:0;" allowfullscreen="" loading="lazy"> </iframe>
            <p class="adresse">
            Rue de Dampremy, 248<br> 6000 Charleroi<br> -<br>Parking facile > Parking Rive Gauche
            </p>
        </div>
    </div>
</body>
</html>