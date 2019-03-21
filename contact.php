<?php

$error = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)){
  if (empty($_POST['first-name'])){
    $error = true;
    $firstNameError = "First name is empty";
  } if (empty($_POST['last-name'])){
    $error = true;
    $firstNameError = "Last name is empty";
  } if (empty($_POST['email-name']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $error = true;
    $firstNameError = "Email is empty or invalid";
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
  </head>
  <body>
    <?php require 'header.php'?>
    <div class="container no-padding">
      <div id="carouselExampleFade" class="carousel slide carousel-fade bd-example" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imgredim/elephant_250.jpg" class="d-block w-100" alt="elephant">
          </div>
          <div class="carousel-item">
            <img src="imgredim/concert_250.jpg" class="d-block w-100" alt="concert">
          </div>
          <div class="carousel-item">
            <img src="imgredim/hellfest_250.jpg" class="d-block w-100" alt="hellfest">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="container">
      <h2 class="d-flex justify-content-center mt-5" id="Contact">Contactez nous !</h2>
      <div class="row">
          <form action="" method="GET" class="col-12">
            <div class="form-group offset-1 col-10">
              <label for="first-name">First Name</label>
              <input name="first-name" <?php if (!empty($_POST['first-name'])) echo "value=".$_POST['first-name']?> type="text" id="first-name" class="form-control">
              <?php if (isset($firstNameError)){?>
                <div class="text-danger"> <?= $firstNameError ?> </div>
              <?php } ?>
            </div>
            <div class="form-group offset-1 col-10">
              <label for="last-name">Last Name</label>
              <input name="last-name" <?php if (!empty($_POST['last-name'])) echo "value=".$_POST['last-name']?> type="text" id="last-name" class="form-control">
              <?php if (isset($lastNameError)){?>
                <div class="text-danger"> <?= $lastNameError ?> </div>
              <?php } ?>
            </div>
            <div class="form-group offset-1 col-10">
              <label for="email">Email</label>
              <input name="email" <?php if (!empty($_POST['email'])) echo "value=".$_POST['email']?> type="email" id="email" class="form-control">
              <?php if (isset($emailError)){?>
                <div class="text-danger"> <?= $emailError ?> </div>
              <?php } ?>
            </div>
              <div class="form-group offset-1 col-10">
              <label for="textaera">Votre message :</label>
              <textarea name="textaera" class="form-control" id="textaera" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-secondary hvr-buzz-out offset-2 col-8">Envoyer</button>
          </form>
      </div>




      <div class="container">
      </div>
      <h2 class="d-flex justify-content-center mt-5" id="numeros utiles">Numéros utiles</h2>
      <div class="container contact-modif">
        <div class="row">
          <div class="col-6 px-0">
            <ul>
              <li>Nantes Tourisme - Nantes - 0892 464 044 
                <a href="https://www.nantes-tourisme.com/fr" class="hvr-buzz-out">
                  Site officiel
                </a>
              </li>
              <li> AlloTan & InfoTrafic - Nantes - au 02 40 444 444 
                <a href="https://www.tan.fr/fr/menu/assistance/urgences/nous-contacter/nous-contacter-12749.kjsp?RH=1417441489347" class="hvr-buzz-out">
                  Site internet
                </a>
              </li>
              <li> CHU de Nantes - Nantes - 02 40 08 33 33 
                <a href="https://www.google.com/search?client=ubuntu&channel=fs&q=CHU+de+Nantes%2C+service+d%27urgences+&ie=utf-8&oe=utf-8"  class="hvr-buzz-out">
                  Site officiel
                </a>
              </li>
              <li> Mairie Centrale de Nantes - Nantes - 02 40 41 90 00
                <a href="https://www.nantes.fr/home/a-votre-service/equipements/mairie/mairie-centrale-de-nantes.html" class="hvr-buzz-out">
                  Site officiel
                </a>
              </li>
            </ul>
          </div>
          <div class="col-6">
            <ul>
              <li> Agence pôle emploi Nantes centre -Nantes - 3949
                <a href="https://www.pole-emploi.fr/annuaire/nantes-centre-44075" class="hvr-buzz-out">
                  Site officiel
                </a>
              </li>
              <li> La prefecture - Nantes -02 40 41 20 20 
                <a href="http://www.loire-atlantique.gouv.fr/Outils/Horaires-et-coordonnees" class="hvr-buzz-out">
                  Site officiel
                </a>
              </li>
              <li> La poste Nantes Bretagne - Nantes - 3631
                <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwi7jZmz6-rgAhUt3uAKHfCMCaQQFjAAegQIFxAC&url=https%3A%2F%2Fwww.laposte.fr%2Fparticulier%2Foutils%2Ftrouver-un-bureau-de-poste%2Fbureau-detail%2Fnantes-bretagne%2F08245A&usg=AOvVaw2KE_-WYIYycOkhH7l67jEP" class="hvr-buzz-out">
                  Site officiel
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="container">
          <div class="barre"></div>
        </div>
        <h2 class="d-flex justify-content-center" id="divertissements">Divertissements</h2>
        <h5> <b>Concerts / festivals / Spectacles </b></h5>
        <div class="row">
          <div class="col-6">
            <ul>
              <li> Le ferrailleur - Nantes - <a href="http://www.leferrailleur.fr/" class="hvr-buzz-out">Site officiel</a></li>
              <li> Zénith - St Herblain - <a href=https://www.zenith-nantesmetropole.com/ class="hvr-buzz-out">Site officiel</a></li>
              <li> Stéréolux - Nantes - <a href="https://www.stereolux.org/" class="hvr-buzz-out">Site officiel</a></li>
              <li> Hellfest/knotfest - Clisson - <a href="https://www.hellfest.fr/" class="hvr-buzz-out">Site officiel</a></li>
            </ul>
          </div>
          <div class="col-6">
            <ul>
              <li>Aux heures de l'été - Nantes - <a href="http://www.auxheuresete.com/" class="hvr-buzz-out">Site officiel</a></li>
              <li> Le festival du cinéma Espagnol de Nantes - Nantes - <a href="https://www.cinespagnol-nantes.com/" class="hvr-buzz-out">Site
                  officiel</a></li>
              <li> Veronic Dicaire - Nantes - <a
                  href="https://lacite-nantes.fr/evenement/veronic-dicaire-showgirl-tour.html" class="hvr-buzz-out">Site officiel</a></a>
              </li>
              <li> Vamp in the kitchen - Nantes - <a
                  href="https://www.nantes.fr/infonantes/agenda/32183-vamp-in-the-kitchen" class="hvr-buzz-out">Site officiel</a></a></li>
            </ul>
          </div>
        </div>
        <div class="container">
          <div class="barre"></div>
        </div>
        <h5> <b>Salons / Meeting / Noctures </b></h5>
        <div class="row">
          <div class="col-6">
            <ul>
              <li>Art 3F - Nantes - </a><a href="https://www.art3f.fr/index.php/fr/nantes" class="hvr-buzz-out">Site officiel</a></li>
              <li> Art to play - Nantes - <a href="http://www.art-to-play.fr/" class="hvr-buzz-out">Site officiel</a></li>
              <li> Web2day - Nantes - <a href="https://web2day.co/" class="hvr-buzz-out">Site officiel</a></li>
              <li> Meetup - Nantes - <a href="https://www.meetup.com/fr-FR/cities/fr/nantes/" class="hvr-buzz-out">Site officiel</a></li>
          </div>
          <div class="col-6">
            <ul>
              <li> Eventbrite - Nantes - <a href="https://www.eventbrite.fr/d/france--nantes/events/" class="hvr-buzz-out">Site officiel</a>
              </li>
              <li> Nantes Digital week - Nantes - <a href="http://www.nantesdigitalweek.com/" class="hvr-buzz-out">Site officiel</a></li>
              <li> L'adage dit souvent ...- Nantes - <a
                  href="https://www.fest.fr/les-petits-secrets-de-nantes-614344.html" class="hvr-buzz-out">Site officiel</a></li>
              <li> Un regard différent sur la ville - Nantes - <a
                  href="https://www.sudouest.fr/2015/03/31/un-regard-different-sur-la-ville-1876486-2820.php" class="hvr-buzz-out">Site
                  officiel</a></li>
              <li> # 16 Chateau à la torche - Nantes - <a
                  href="https://www.levoyageanantes.fr/agenda/nocturne-16-chateau-a-la-torche/" class="hvr-buzz-out">Site officiel</a></li>
            </ul>
          </div>
        </div>
        <div class="container">
          <div class="barre"></div>
        </div>
        <h5> <b>Musée / Art Contemporain </b></h5>
        <div class="row">
          <div class="col-6">
            <ul>
              <li> Musée histoire naturelle - Nantes - <a
                  href="http://www.museum.nantes.fr/pages/12-contacts/page1.html" class="hvr-buzz-out">Site officiel</a></li>
              <li>Musée Jules Verne - Nantes - <a href="http://www.museum.nantes.fr/pages/12-contacts/page1.html" class="hvr-buzz-out">Site
                  officiel</a></li>
              <li> Planétarium - Nantes - <a href="http://www.museum.nantes.fr/pages/12-contacts/page1.html" class="hvr-buzz-out">Site
                  officiel</a></li>
            </ul>
          </div>
          <div class="col-6">
            <ul>
              <li> HAB Galerie - Nantes - <a href="https://www.nantes-tourisme.com/fr/art-contemporain/hab-galerie" class="hvr-buzz-out">Site
                  officiel</a></li>
              <li> Machine de Nantes - Nantes - <a href="https://www.lesmachines-nantes.fr/" class="hvr-buzz-out">Site officiel</a></li>
              <li> Les Anneaux (Baren) - Nantes - <a
                  href="http://www.estuaire.info/fr/oeuvre/les-anneaux-daniel-buren-et-patrick-bouchain/" class="hvr-buzz-out">Site
                  officiel</a></li>
            </ul>
          </div>
        </div>
        <div class="container">
          <div class="barre"></div>
        </div>
        <h5> <b>Lieux insolites / historiques / espaces verts</b></h5>
        <div class="row">
          <div class="col-6">
            <ul>
              <li>Les Machines de l'île - Nantes - <a href="https://www.lesmachines-nantes.fr/" class="hvr-buzz-out">Site officiel</a></li>
              <li>Maillé Brézé - Nantes - <a href="https://www.maillebreze.com/fr">Site officiel</a></li>
              <li>Passage pommery - Nantes - <a
                  href="http://www.passagepommeraye.fr/travaux-renovation-passage-pommeraye.html" class="hvr-buzz-out">Site officiel</a></li>
              <li>Chateau de Bretagne - Nantes - <a href="http://www.chateaunantes.fr/fr/histoire" class="hvr-buzz-out">Site officiel</a>
              </li>
            </ul>
          </div>
          <div class="col-6">
            <ul>
              <li>Cathédrale - Nantes - <a href="http://cathedrale-nantes.fr/" class="hvr-buzz-out">Site officiel</a></li>
              <li>Ile de Versailles - Nantes - <a
                  href="https://www.nantes.fr/home/a-votre-service/equipements/parcs--jardins/parc-de-lile-de-versailles.html" class="hvr-buzz-out">Site
                  officiel</a></li>
              <li>Jardin des plantes - Nantes - <a href="https://www.nantes.fr/jardin-des-plantes" class="hvr-buzz-out">Site officiel</a>
              </li>
              <li>Le crapa de Beaulieux - Nantes - <a
                  href="https://www.nantes.fr/home/a-votre-service/equipements/parcs--jardins/parc-du-crapa-de-beaulieu.html" class="hvr-buzz-out">Site
                  officiel</a></li>
            </ul>
          </div>
        </div>
        <div class="container">
          <div class="barre"></div>
        </div>
        <h5><b>Produits locaux / Bars / Centres commerciaux </b></h5>
        <div class="row">
          <div class="col-6">
            <ul>
              <li>Muscadet - Nantes - <a href="https://www.muscadet.fr/" class="hvr-buzz-out">Site officiel</a></li>
              <li>Gateaux Nantais - Nantes - <a
                  href="https://www.nantes.fr/home/a-nantes-et-pas-ailleurs/decouvrir-nantes/les-symboles-nantais/le-gateau-nantais.html" class="hvr-buzz-out">Site
                  officiel</a></li>
              <li>Curé Nantais - Nantes - <a href="http://www.curenantais.com/fr" class="hvr-buzz-out">Site officiel</a></li>
              <li> Atomic's Café - Nantes - <a href="https://www.yelp.fr/biz/atomics-caf%C3%A9-nantes" class="hvr-buzz-out">Site officiel</a>
              </li>
            </ul>
          </div>
          <div class="col-6">
            <ul>
              <li> Bar à chat - Nantes - <a href="http://lamaison-delise.fr/" class="hvr-buzz-out">Site officiel</a></li>
              <li> Bar Chimiste - Nantes - <a href="http://www.lelabo-nantes.com/" class="hvr-buzz-out">Site officiel</a></li>
              <li>Leclerc Atlantis - St Herblain - <a href="http://www.e-leclerc.com/atlantis" class="hvr-buzz-out">Site officiel</a></li>
              <li>Leclerc Paridis - Nantes - <a href="http://www.paridis.fr/plan-du-centre/" class="hvr-buzz-out">Site officiel</a></li>
              <li>Carrefour Beaulieu - Nantes - <a href="https://beaulieu.klepierre.fr/Shopping/Carrefour" class="hvr-buzz-out">Site
                  officiel</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container no-padding w-100">
        <img src="imgredim/chaussettes.jpg" alt="chaussettes">
      </div>
    </div>
    <?php require 'footer.php'?>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
  </body>
</html>