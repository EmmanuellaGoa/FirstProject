<?php
    require_once 'config.php';
    if(isset($_POST['nom'])& isset($_POST['prenom'])& isset($_POST['tel']) & isset($_POST['email']) & isset($_POST['mdp']) & isset($_POST['rmdp']) & isset($_POST['valider'])){
        $nom = htmlspecialchars($_POST['nom']);    //pr sppr toute balise entrée par l'utilisteur cherchant à tester le site
        $prenom = htmlspecialchars($_POST['prenom']);
        $tel = htmlspecialchars($_POST['tel']);
        $email = htmlspecialchars($_POST['email']);
        $filtreur = filter_var($email,FILTER_VALIDATE_EMAIL); // pr filtrer l'email
        $mdp = htmlspecialchars($_POST['mdp']);
        $mdp = hash('md5',$mdp);  // pr crypter le mdp
        $rmdp =  htmlspecialchars($_POST['rmdp']);
        $rmdp = hash('md5',$rmdp);
        $erreur = '';
        $erreur1 ='';
        $succes = '';

        if($mdp != $rmdp){
            echo 'erreur , retaper le mot de passe';
        }
        elseif($nom == NULL || $prenom == NULL || $tel==NULL || $email==NULL || $mdp==NULL ) {
           $erreur ="Erreur, veuillez remplir tous les champs";
        }
        elseif($nom != NULL && $prenom != NULL && $tel!=NULL && $email!=NULL && $mdp!=NULL  && $filtreur == true ){
            $insert = "INSERT INTO client(Nom,Prenom,Contact,Email,mot_de_passe) VALUES ('$nom','$prenom','$tel','$email','$mdp')";
            $execut = $db->query($insert);
            $succes = 'Donnée enregistré';
        }
        else $erreur1 = 'Email invalid';


    }
?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="inscription.css">
</head>
<body >
    <center>
    <form method="post" >
        
           
        <fieldset style ="width: 50%;">
            <legend style = "text-align:center;">CREER UN COMPTE</legend>
            <div class="formulaire">

            <input type="text" id="nom" name="nom" placeholder ="Nom"><br><br>

            <input type="text" id="prenom" name="prenom" placeholder ="Prénom"><br><br>

            <input type="text" id="tel" name="tel" placeholder ="Contact"> <br><br>

            <input type="text" id="email" name="email" placeholder ="E-mail"> <br><br>

            <input type="password" id="mdp" name="mdp" placeholder ="Mot de passe"> <br><br>

            <input type="password" id="rmdp" name="rmdp" placeholder = "Confirmer le mot de passe" > <br><br><br><br>

            <input type="submit" value="S'INSCRIRE" name='valider' style="text-decoration: none;border-radius: 3px;padding: 10px; background-color: pink;"></a><br><br><br>
            
            </div>
            
        </fieldset>
        
           
           <?php
                if (!empty($erreur)) { #vérifier que la variable contient une valeur
                    echo "<p style='color:red'>$erreur</p>";
                }elseif(!empty($erreur1)){
                    echo "<p style='color:red'>$erreur1</p>";
                }elseif(!empty($succes)){
                    echo "<p style='color:green'>$succes</p>";
                }
                
            ?>

         
    </form>
    <p>Cliquez <a href="acceuil.php">ici</a>  pour accéder à la page d'acceuil </p>

    </center>
    
</body>
</html>