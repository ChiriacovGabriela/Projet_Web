<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Voyage</title>
        <link rel="stylesheet" href="Connexion.css"/>
    </head>

    <body>
    <header class="header" >
        <nav class="nav">
            <a class="nav_link" href="Voyages.php">Voyages</a>
            <a class="nav_link" href="Profil.php">Profil</a>
            <a class="nav_link" href="Reservation.html">Reservation</a>
            <a class="nav_link" href="vue_inscription_client.php">Inscription</a>
            <a class="nav_link" href="Connexion.html">Connexion</a>
        </nav>
    </header>
    <section>
        <fieldset>
            <legend><h1>Profil</h1></legend>
                <br>
            <form>
                <table>
                    <tr>
                        <td><label for="gender">Civilité</label></th>
                        <td><input type="text" id="gender"></th>
                    </tr>
                    <tr>
                        <td><label for="familyName">Nom</label></td>
                        <td><input type="text" id="familyName"></td>
                    </tr>
                    <tr>
                        <td><label for="firstName">Prénom</label></td>
                        <td><input type="text" id="firstName"></td>
                    </tr>
                    <tr>
                        <td><label for="age">Âge</label></td>
                        <td><input type="text" id="age"></td>
                    </tr>
                    <tr>
                        <td><label for="mail">Adresse mail</label></td>
                        <td><input type="text" id="mail"></td>
                    </tr>
                    <tr>
                        <td><label for="telNumber">Numéro de téléphone</label></td>
                        <td><input type="text" id="telNumber"></td>
                    </tr>
                </table>
                <p><button class="modify">Modifier</button></p>
            </form>
        </fieldset>
    </section>
    </body>
</html>