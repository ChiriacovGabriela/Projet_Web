<!DOCTYPE html>
<html>
<head>
<title> Voyages </title>
<meta charset="UTF-8">
<link rel="stylesheet" href="Trip.css">

</head>
<body>
<header class="header" >
    <nav class="nav">
        <a class="nav_link" href="Accueil.php">Accueil</a>
        <a class="nav_link" href="">Profil</a>
        <a class="nav_link" href="Reservation.php">Reservation</a>
        <a class="nav_link" href="">Inscription</a>
        <a class="nav_link" href="">Connexion</a>
        
</nav>


<div class="header_titre"> <h1>Voyages </h1> </div>
</header>
<div class="intro1">
<?php
    foreach($lestrips as $untrip){
        echo "<option value ='" $untrip['idt']."'>".$untrip['description']."</option>";
    }

?>

hdgsfjhsdfhjjhsdhjhjdshjdbfjbdfjh<br>
dshbfjhd<br>



</div>

</body>

</html>