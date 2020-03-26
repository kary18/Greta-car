<?php 


session_start();

?>




<body>

  <?php include("template/head.php"); ?>
  <?php include("template/navbar-connex.php"); ?>
  <?php include("template/modal-contact.php"); ?>



  <center>

    <div class="container marketing  " id="couleurtext"><br>


      <?php

    $prenom = $_SESSION['prenom'];

    if(date("H")<18){

    echo 'Bonjour et bienvenue '.$prenom.' dans votre espace personnel';
      
    }else{

      echo 'Bonsoir et bienvenue '.$prenom.' dans votre espace personnel';
       
    }

?>
    </div>
  </center>



  <div class="row">
    <div class="col">
      <?php

try { 

$bdd = new PDO('mysql:host=localhost;dbname=covoit1', 'covoit1', 'covoit1');

  foreach($bdd->query('SELECT usr_nom, usr_prenom,usr_ville,nom_etab
   FROM user WHERE usr_nom =  "'.$_SESSION['nom'].'" AND usr_prenom  = "'
  .$_SESSION['prenom'].'"AND usr_email ="'.$_SESSION['email'].'"') as $row)
   {
      $nom = $row[0];
      $prenom = $row[1];
      $ville = $row[2];
      $nom_etab= $row[3];



   }  
  
     }
   catch (PDOException $erreur) {
      echo $erreur.' -- '.$erreur->getMessage();
   }

   ?>

      <div class="container-fluid">
        <div class="row">
          <div class="col ">
   

            <!-- <div class="col-sm-6"> -->
     <!-- <h4 style="color:#00b1b1;"> <?php // echo $nom. ' '.$prenom; ?> </h4></span><br>  -->
     <h4 style="color:#00b1b1;">Liste des personnes de votre centre de formation</h4><br>



            <div class="row">
              <div class="col">
                Nom :</div>
              <div class="col">
                <?php echo $nom; ?>
              </div>
            </div>
            <div class="row">
              <div class="col ">
                Prenom :</div>
              <div class="col">
                <?php echo $prenom; ?>
              </div>

            </div>

            <div class="row">
              <div class="col">
                Ville :</div>
              <div class="col">
                <?php echo $ville; ?>
              </div>
            </div>




            <div class="row">
              <div class="col">
                Formation :</div>
              <div class="col">
                <?php echo $nom_etab; ?>
              </div>
            </div>




            <div class="col">
              <hr style="margin:5px 0 5px 0;">
              <?php

                                  try { 

                                  $bdd = new PDO('mysql:host=localhost;dbname=covoiturage', 'root', '');

                                    foreach($bdd->query('SELECT usr_nom, usr_prenom,usr_ville
                                    FROM user WHERE nom_etab="'. $nom_etab.'"') as $row)
                                    {
                                        $nom = $row[0];
                                        $prenom = $row[1];
                                        $ville = $row[2];
                                        echo $nom.' - '.$prenom.' d| '.$ville.'<br/>';
                                    }  
                                    
                                      }
                                    catch (PDOException $erreur) {
                                        echo $erreur.' -- '.$erreur->getMessage();
                                    }

                                    ?>
            </div>
          </div>









          <div class="col-md-6 " id="modifier">
            <!-- taille de la boite --><br><br>


            <iframe width="100%" height="400px" frameborder="0" allowfullscreen
              src="https://umap.openstreetmap.fr/fr/map/carte-sans-nom_420876?scaleControl=false&miniMap=true&scrollWheelZoom=true&zoomControl=true&allowEdit=false&moreControl=true&searchControl=true&tilelayersControl=true&embedControl=false&datalayersControl=null&onLoadPanel=undefined&captionBar=false&fullscreenControl=true&locateControl=true&editinosmControl=false">
            </iframe>
            <p>
              <a href="https://umap.openstreetmap.fr/fr/map/carte-sans-nom_420876">Voir en plein écran</a>
            </p>

          </div>


        </div>
      </div>
    </div>
  </div>

  <!-- <div class ="col" class="carte">
      <iframe width="100%" height="400px" frameborder="0" allowfullscreen
        src="https://umap.openstreetmap.fr/fr/map/carte-sans-nom_420876?scaleControl=false&miniMap=true&scrollWheelZoom=true&zoomControl=true&allowEdit=false&moreControl=true&searchControl=true&tilelayersControl=true&embedControl=false&datalayersControl=null&onLoadPanel=undefined&captionBar=false&fullscreenControl=true&locateControl=true&editinosmControl=false">
      </iframe>
      <p>
        <a href="https://umap.openstreetmap.fr/fr/map/carte-sans-nom_420876">Voir en plein écran</a> -->
  </p>
  </div>
  </div>

  </div>


  <!-- Le corps -->

  <div class="container gris">


  </div>

  <!-- Le pied de page -->

  <!-- le footer merde mais je ne sais pas pourquoi il ne se met pas tout en bas-->


</body>
<?php include("template/footer.php"); ?>