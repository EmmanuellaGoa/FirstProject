<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="acceuil.css">
    <link rel="shortcut icon" href="image/logo.png">
    <title>CHIC & CLASS</title>
</head>
<body>

    <header>
        <a href="#" class="logo"><span>CHIC</span>&& CLASS</a>
        <div class="menu"></div>
        <ul class="nav">
            <li> <a href="acceuil.php">ACCUEIL</a> </li>
            <li> <a href="Model_Chic.php">CHIC ✨</a> </li>
            <li> <a href="pageclass.html">CLASS💃</a> </li>
            <li> <a href="modeAfricaine.html">A L'AFRICAINE</a> </li>
            <li> <a href="connexion.php" id="conect" style="padding: 10px;">SE CONNECTER</a> </li>
        </ul>
    </header>

         
                <!-- temps reduction  -->

    
       
    
                   <!-- pub  -->
    
       
        
    <section id="n1"><br><br><br>
        <div class="tex1"><br>
            <span>Votre confort c'est notre priorité!!&nbsp;</span>
            <span>Votre confort c'est notre priorité!!&nbsp;</span>
            <span>Votre confort c'est notre priorité!!&nbsp;</span> 
        </div> 
        <div class="pub">
            
            <img src="img _pub/IMG_E7019.JPG" >
            <img src="img _pub/IMG_E7018.JPG" >
            <img src="img _pub/IMG_E6973.JPG" >
            <img src="image/IMG_E6953.JPG" >
            <img src="image/IMG_E6978.JPG" >
            
        </div>
    </section>

    <section id="n2"><br><br>
       <div class="tex2">
            <span style="font-style: italic; ">NOS CATEGORIES DE VETEMENTS👗, CHAUSSURES👠 & SACS👜</span>
       </div>

       <div class="categorie"> 
            
               <div class="box">
                    <div id="imge">
                        <img src="image/IMG_E6965.JPG" alt="ENSEMBLE">
                    </div>
                    <div id="tex">
                        <h3>ENSEMBLE</h3>
                    </div>
               </div>
              
               <div class="box">
                    <div id="imge">
                        <img src="image/IMG_E6994.JPG" alt="ROBE " >
                    </div>
                    <div id="tex">
                        <h3>ROBE</h3>
                    </div>
                </div>

                <div class="box">
                    <div id="imge">
                        <img src="image/IMG_E7021.JPG" alt="HAUT">
                    </div>
                    <div id="tex">
                        <h3>HAUT</h3>
                    </div>
                </div>

                <div class="box">
                    <div id="imge">
                        <img src="image/IMG_E6980.JPG" alt="VESTE">
                    </div>
                    <div id="tex">
                        <h3>VESTE</h3>
                    </div>
                </div>

                <div class="box">
                    <div id="imge">
                        <img src="image/IMG_E6972.JPG" alt="CHAUSSURES">
                    </div>
                    <div id="tex">
                        <h3>CHAUSSURES</h3>
                    </div>
                </div>

                <div class="box">
                    <div id="imge">
                        <img src="image/IMG_E7006.JPG" alt="SACS">
                    </div>
                    <div id="tex">
                        <h3>SACS</h3>
                    </div>
                </div>
         </div>
    </section> <br><br>

    <section id="n3">
       <a id="n3a" href="connexion.php" style="text-decoration: none;">VOIR PLUS</a> 
    </section>

    <div class="fleche">
        <img src="image/flch1.png" class="flch">
    </div>
    <Script language="javascript">
        const fleche = document.querySelector('.fleche');
        fleche.addEventListener('click',() =>{
            window.scrollTo({
                top:0,
                left:0,
                behavior: "smooth", //pour scroller doucement
            })
        }
        )
        
    </Script>
    
    <footer>
        <div><h4>Qui sommes nous?</h4> Nous sommes une boutique en ligne de vente de vêtements chics et class🤩 <br>
             N'hesitez surtout pas à vous faire plaisir car votre plaisir c'est notre priorité😉<br>
             <h4>Trouvez-nous sur:</h4> <img src="image/facebook.ico" alt="photo" style="width: 40px;height: 40px;margin-left: 20px;"> <img src="image/favicon (1).ico" style="width: 40px;height: 40px;margin-left: 20px;">
            
             
        </div>

        <div class="lien"><h4>Engagement</h4>
            <ul>
                <li><a href="">Condition de rembourssement</a></li>
                <li><a href="Livraison Express.html">Livraison express</a></li>
            </ul>

        </div>

        <div class="lien"><h4>Aide & Contact</h4>
            <ul>
                <li><a href="">Contact</a></li>
                <li><a href="commande.html">Commande</a></li>
                <li><a href="">Guide des tailles</a></li>
            </ul>
        </div>

        <div><h4>Mode de Livraison</h4><img src="image/livr.jpg" title="Payez à la livraison" style="width: 50px;height: 50px;margin-left: 20px;">
            <img src="image/favicon (2).ico"  style="width: 50px;height: 50px;" title="Livraison rapide" > 
           
        </div><br><br><br><br><br>

        <div><h4>Moyen paiement</h4>
            <img src="image/om.png"  style="width: 50px;height: 50px;margin-right: 20px;" > <img src="image/mtn.png"  style="width: 50px;height: 50px;margin-right: 20px;">
            <img src="image/wave.jpg"  style="width: 50px;height: 50px;margin-right: 20px;" > 
        </div>
    </footer>


    
</body>
</html>