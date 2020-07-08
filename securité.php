<?php

echo "<p>Login:".$_POST['Login']."</p>";
echo "<p>Password:".$_POST['Password']."</p>" ;

if (isset($_POST["Login"])&& $_POST["Login"]=="admin" && isset($_POST["Password"])&& $_POST["Password"]=="2020")
else {echo "<p>Mauvais couple identifiant/mot de passe.</p>";
echo "<a href='connexion.php'>Connexion</a>";
}

?>

