<?php
    session_start();
    require_once 'config.php';
    if(isset($_POST['email']) & isset($_POST['mdp']) & isset($_POST['conect'])){
        $email = htmlspecialchars($_POST['email']);
        $mdp = htmlspecialchars($_POST['mdp']);
        $mdp = hash('md5', $mdp);
        $connect = htmlspecialchars($_POST['conect']);
        $erreur1 = '';
        $erreur2 = '';

        $check = $db->prepare('SELECT id , Email , mot_de_passe , Prenom FROM client WHERE Email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1 ){
            if($data['mot_de_passe'] === $mdp ){
                $_SESSION['autoriser'] = 'oui';
                header("Location:pageperso.php?prenom=$data[Prenom]");
            }else $erreur2 = 'Mot de passe incorrect,essayer encore.';
        }else $erreur1 = 'Utilisateur non existant, veuillez re-saisir.';
       
    }


?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>Se connecter</title>
    <link rel="stylesheet" href="connexion.css">
    
  </head>
  <body style="overflow: hidden;margin-bottom: 20px;">
    <center>

   
   <header>
    <a href="acceuil.php" class="logo"><span>CHIC</span>&& CLASS</a>
    <div class="menu"></div>
    <ul class="nav">
        <li> <a href="acceuil.php">ACCUEIL</a> </li>
        <li> <a href="Model_Chic.php">CHIC ✨</a> </li>
        <li> <a href="pageclass.html">CLASS💃</a> </li>
        <li> <a href="modeAfricaine.html">A L'AFRICAINE</a> </li>
        
        
    </ul>
</header>

<section style="padding: 10px">

<form method="post">  


<h2>CONNECTEZ-VOUS AVEC VOTRE ADRESSE EMAIL</h2><br><br>


<div>

<input type="text" id="email" name="email" style="height: 25px;" placeholder= "E-mail"> <br><br>


<input type="password" id="mdp" name="mdp"  style="height: 25px;" placeholder="Mot de passe"> <br><br><br>

</div>
<input type="submit" name ="conect" value ="CONNEXION" style="text-decoration: none;border-radius: 3px;padding: 10px; background-color: pink;"> <br><br>

<p>Vous n'avez pas encore de compte?<a href="inscription.php">Inscrivez vous!! </a></p>

<?php
    if(!empty($erreur1)){
        echo $erreur1;
    }elseif(!empty($erreur2)){
        echo "<p style='color:red;'> $erreur2 </p>";
    }
   
?>

</form>
</section>


</center>
</body>
</html>