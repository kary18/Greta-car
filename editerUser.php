<?php




session_start();

try { 

$bdd = new PDO('mysql:host=localhost;dbname=covoit1', 'covoit1', 'covoit1');

  

  foreach($bdd->query('SELECT usr_nom, usr_prenom, usr_adresse, usr_ville, usr_codepostal, usr_email, usr_tel, nom_etab, usr_mdp1
   FROM user WHERE usr_nom =  "'.$_SESSION['nom'].'" AND usr_prenom  = "'
  .$_SESSION['prenom'].'"AND usr_email ="'.$_SESSION['email'].'"') as $row)
   {
      $nom = $row[0];
      $prenom = $row[1];
      $adresse= $row[2];
      $ville = $row[3];
      $codepostal= $row[4];
      $mail = $row[5];
      $tel= $row[6];
      $nom_etab= $row[7];
      $mdp= $row[8];
      
      
     //update champs Nom
    


     //// attention   !!!!!!!!!  au numéro de case $row   ///////////////////////////////////////////
    /*
      echo 'Nom : '.$nom. '</br>';
      echo  'Prénom : ' .$prenom.'</br>';
      echo  ' Adresse : ' .$adresse.'</br>';
      echo  ' Ville : ' .$ville.'</br>';
      echo  ' Codepostal : '.$adresse.'</br>';
      echo  ' mail : '.$mail.'</br>';
      echo  ' tel : '.$tel.'</br>';
     */





      
      
      

    
      
   }  
  
   
   }
   catch (PDOException $erreur) {
      echo $erreur.' -- '.$erreur->getMessage();
   }
  
?>

<html>
<!-- lien pourri boostarp à changer en version plus récente -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<body>





   <div class="container">
      <div class="row">
         <h2>Votre profil</h2>

         <div class="col-md-6 ">
            <!-- taille de la boite -->

            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4>votre profil</h4>
               </div>
               <div class="panel-body">

                  <div class="col-sm-6">
                     <h4 style="color:#00b1b1;"> <?php echo $nom. ' '.$prenom; ?> </h4></span>

                  </div>

                  <div class="clearfix"></div>
                  <hr style="margin:5px 0 5px 0;">


                  <div class="col-sm-5 col-xs-6 ">Nom :</div>
                  <div class="col-sm-7"><?php echo $nom; ?></div>
                  <div class="clearfix"></div>
                  <div class="bot-border"></div>


                  <div class="col-sm-5 col-xs-6 ">Prenom :</div>
                  <div class="col-sm-7"><?php echo $prenom; ?></div>
                  <div class="clearfix"></div>
                  <div class="bot-border"></div>

                  <div class="col-sm-5 col-xs-6 ">Adresse:</div>
                  <div class="col-sm-7"><?php echo $adresse; ?></div>

                  <div class="clearfix"></div>
                  <div class="bot-border"></div>

                  <div class="col-sm-5 col-xs-6">Ville:</div>
                  <div class="col-sm-7"><?php echo $ville; ?></div>

                  <div class="clearfix"></div>
                  <div class="bot-border"></div>

                  <div class="col-sm-5 col-xs-6">Code postal :</div>
                  <div class="col-sm-7"><?php echo $codepostal; ?></div>

                  <div class="clearfix"></div>
                  <div class="bot-border"></div>

                  <div class="col-sm-5 col-xs-6 ">Email:</div>
                  <div class="col-sm-7"><?php echo $mail; ?></div>

                  <div class="clearfix"></div>
                  <div class="bot-border"></div>

                  <div class="col-sm-5 col-xs-6 ">Tel:</div>
                  <div class="col-sm-7"><?php echo $tel; ?></div>

                  <div class="clearfix"></div>
                  <div class="bot-border"></div>


                  <div class="col-sm-5 col-xs-6">Centre de Formation :</div>
                  <div class="col-sm-7"><?php echo $nom_etab; ?></div>

                  <div class="col-sm-6">
                     <hr style="margin:5px 0 5px 0;">


                     <button type="button" id="affichUp" class="btn-warning"> <a>Modifier mon profil</a></button>

                  </div>

               </div>


            </div>
         </div>












         <div class="col-md-6 " id="modifier">
            <!-- taille de la boite -->

            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4> modifer votre profil</h4>
               </div>
               <div class="panel-body">

                  <div class="col-sm-6">
                     <h4 style="color:#00b1b1;"> <?php echo $nom. ' '.$prenom; ?> </h4></span>

                  </div>

                  <div class="clearfix"></div>
                  <hr style="margin:5px 0 5px 0;">

                  <form method="POST" action="updateUser.php" enctype="">

                     <div class="col-sm-5 col-xs-6 ">Nom :</div>
                     <div class="col-sm-7">
                        <input type="text" name="newnom" placeholder="nom" value="<?php echo $nom; ?>">
                     </div>
                     <div class="clearfix"></div>
                     <div class="bot-border"></div>


                     <div class="col-sm-5 col-xs-6 ">Prenom :</div>
                     <div class="col-sm-7">
                        <input type="text" name="newprenom" placeholder="prenom" value="<?php echo $prenom; ?>" />
                     </div>

                     <div class="clearfix"></div>
                     <div class="bot-border"></div>

                     <div class="col-sm-5 col-xs-6 ">Adresse:</div>
                     <div class="col-sm-7">
                        <input type="text" name="newadresse" placeholder="Adresse" value="<?php echo $adresse; ?>" />
                     </div>

                     <div class="clearfix"></div>
                     <div class="bot-border"></div>

                     <div class="col-sm-5 col-xs-6">Ville:</div>
                     <div class="col-sm-7">
                        <input type="text" name="newville" placeholder="Ville" value="<?php echo $ville; ?>" />
                     </div>

                     <div class="clearfix"></div>
                     <div class="bot-border"></div>

                     <div class="col-sm-5 col-xs-6">Code postal :</div>
                     <div class="col-sm-7">
                        <input type="number" name="newcp" placeholder="Cp" value="<?php echo $codepostal; ?>" />

                     </div>

                     <div class="clearfix"></div>
                     <div class="bot-border"></div>

                     <div class="col-sm-5 col-xs-6 ">Email:</div>
                     <div class="col-sm-7">
                        <input type="mail" name="newmail" placeholder="mail" value="<?php echo $mail; ?>" />
                     </div>

                     <div class="clearfix"></div>
                     <div class="bot-border"></div>

                     <div class="col-sm-5 col-xs-6 ">Tel:</div>
                     <div class="col-sm-7">
                        <input type="number" name="newtel" placeholder="Tel" value="<?php echo $tel; ?>" />
                     </div>

                     <div class="clearfix"></div>
                     <div class="bot-border"></div>


                     <div class="col-sm-5 col-xs-6">Centre de Formation :</div>
                     <div class="col-sm-7">
                        <input type="text" name="newcf" placeholder="nom etablissement"
                           value="<?php echo $nom_etab; ?>" /><br /><br />
                     </div>


                     <div class="clearfix"></div>
                     <div class="bot-border"></div>


                     <div class="col-sm-5 col-xs-6">mot de passe :</div>
                     <div class="col-sm-7">
                        <input type="password" name="newmdp1" placeholder="mot de passe 1"
                           value="<?php echo $mdp1; ?>" />
                     </div>

                     <div class="clearfix"></div>
                     <div class="bot-border"></div>


                     <div class="col-sm-5 col-xs-6">Confirmation mot de passe :</div>
                     <div class="col-sm-7">
                        <input type="password" name="newmdp2" placeholder="mot de passe 2"
                           value="<?php echo $mdp1; ?>" />
                     </div>

                     <div class="col-sm-6">
                        <hr style="margin:5px 0 5px 0;">



                        <button type="submit" class="btn-warning"> Valider</button>
                  </form>

               </div>

            </div>


         </div>
      </div>
   </div>
   </div>


   <script>
      $(document).ready(function () {

         $("#modifier").hide();
      });
      $("#affichUp").click(function () {
         $("#modifier").show();
      });
   </script>


</body>

</html>

<form method="POST" action="updateUser.php" enctype="multipart/form-data">

   <!-- Partie HTML-->

   <!-- afficher le nom et le prénom en mode static ou/et affichage des donnée avec un tableau-->






</form>