<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gallery</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="screen" href="style.css">
</head>

<body>
<?php require 'header.php'?>
  <div class="container mt-3 px-0">
    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imgredim/chat_250.jpg" class="d-block w-100" alt="bar">
            <div class="carousel-caption d-none d-md-block">
              <p><a href="#bar" class="hvr-buzz-out">Voir plus</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="imgredim/concert_250.jpg" class="d-block img-fluid w-100" alt="concert">
            <div class="carousel-caption d-none d-md-block">
              <p><a href="#concert" class="hvr-buzz-out">Voir plus</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="imgredim/elephant_250.jpg" class="d-block w-100" alt="insolites">
            <div class="carousel-caption d-none d-md-block">
              <p><a href="#insolites" class="hvr-buzz-out">Voir plus</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="imgredim/plantes_250.jpg" class="d-block w-100" alt="espaceV">
            <div class="carousel-caption d-none d-md-block">
              <p><a href="#vert" class="hvr-buzz-out">Voir plus</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="imgredim/musee_250.jpg" class="d-block w-100" alt="historique">
            <div class="carousel-caption d-none d-md-block">
              <p><a href="#lieuxHistorique">Voir plus</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="imgredim/atlantis_250.jpg" class="d-block w-100" alt="commerciaux">
            <div class="carousel-caption d-none d-md-block">
              <p><a href="#commerciaux" class="hvr-buzz-out">Voir plus</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="imgredim/cure_250.jpg" class="d-block w-100" alt="produit">
            <div class="carousel-caption d-none d-md-block">
              <p><a href="#produits" class="hvr-buzz-out">Voir plus</a></p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="barre">
    </div>
  </div>
  <div class="container px-0">
    <h2 id="bar" class="mt-3 d-flex justify-content-center">Les Bars Nantais</h2>
    <div class="d-flex justify-content-center">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur convallis dapibus. Vivamus
        nec rutrum tellus, eu blandit felis. Etiam.</p>
    </div>
    <div class="card-deck">
      <div class="card mt-3">
        <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="imgredim/atomics_card.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imgredim/atomics_card2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imgredim/atomics_card3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Atomic's Café</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum mauris id
            pellentesque rhoncus. Mauris aliquam faucibus lacus in tincidunt. Phasellus ut tempus tortor, ut efficitur
            justo. Vestibulum rutrum tortor non odio dignissim efficitur. Quisque quis nibh quis nulla lacinia
            porttitor. Mauris vehicula lorem lectus, tempus molestie velit condimentum sed.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted"><a href="contact.html" class="hvr-buzz-out">Plus d'info</a></small>
        </div>
      </div>
      <div class="card mt-3">
        <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="imgredim/chat_card.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imgredim/chat_card2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imgredim/chat_card3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">La maison d'Elise</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum mauris id
            pellentesque rhoncus. Mauris aliquam faucibus lacus in tincidunt. Phasellus ut tempus tortor, ut efficitur
            justo. Vestibulum rutrum tortor non odio dignissim efficitur. Quisque quis nibh quis nulla lacinia
            porttitor. Mauris vehicula lorem lectus, tempus molestie velit condimentum sed.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted"><a href="contact.html" class="hvr-buzz-out">Plus d'info</a></small>
        </div>
      </div>
      <div class="card mt-3">
        <div id="carouselExampleControls3" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="imgredim/labo_card.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imgredim/labo_card2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imgredim/labo_card3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Le Labo</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum mauris id
            pellentesque rhoncus. Mauris aliquam faucibus lacus in tincidunt. Phasellus ut tempus tortor, ut efficitur
            justo. Vestibulum rutrum tortor non odio dignissim efficitur. Quisque quis nibh quis nulla lacinia
            porttitor. Mauris vehicula lorem lectus, tempus molestie velit condimentum sed.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted"><a href="contact.html" class="hvr-buzz-out">Plus d'info</a></small>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="barre">
      </div>
      <h2 id="concert" class="mt-3 d-flex justify-content-center"> Les concert et evenement de Nantes</h2>
      <div class="d-flex justify-content-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur convallis dapibus. Vivamus
          nec rutrum tellus, eu blandit felis. Etiam.</p>
      </div>
      <div class="card-deck">
        <div class="card mt-3">
          <div id="carouselExampleControls4" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imgredim/art2play_card.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/art2play_card2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/art2play_card3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls4" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls4" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Art to play</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum mauris id
              pellentesque rhoncus. Mauris aliquam faucibus lacus in tincidunt. Phasellus ut tempus tortor, ut efficitur
              justo. Vestibulum rutrum tortor non odio dignissim efficitur. Quisque quis nibh quis nulla lacinia
              porttitor. Mauris vehicula lorem lectus, tempus molestie velit condimentum sed.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><a href="contact.html" class="hvr-buzz-out">Plus d'info</a></small>
          </div>
        </div>
        <div class="card mt-3">
          <div id="carouselExampleControls5" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imgredim/hellfest_card.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/hellfest_card2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/hellfest_card3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/hellfest_card4.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls5" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls5" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Hellfest</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum mauris id
              pellentesque rhoncus. Mauris aliquam faucibus lacus in tincidunt. Phasellus ut tempus tortor, ut efficitur
              justo. Vestibulum rutrum tortor non odio dignissim efficitur. Quisque quis nibh quis nulla lacinia
              porttitor. Mauris vehicula lorem lectus, tempus molestie velit condimentum sed.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><a href="contact.html" class="hvr-buzz-out">Plus d'info</a></small>
          </div>
        </div>
        <div class="card mt-3">
          <div id="carouselExampleControls6" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imgredim/web2day_card.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/web2day_card2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/web2day_card3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls6" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls6" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Web2Day</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum mauris id
              pellentesque rhoncus. Mauris aliquam faucibus lacus in tincidunt. Phasellus ut tempus tortor, ut efficitur
              justo. Vestibulum rutrum tortor non odio dignissim efficitur. Quisque quis nibh quis nulla lacinia
              porttitor. Mauris vehicula lorem lectus, tempus molestie velit condimentum sed.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><a href="contact.html" class="hvr-buzz-out">Plus d'info</a></small>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="barre"></div>
      </div>
      <h2 id="insolites" class="mt-3 d-flex justify-content-center">Les lieux insolites de Nantes</h2>
      <div class="d-flex justify-content-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur convallis dapibus. Vivamus
          nec rutrum tellus, eu blandit felis. Etiam.</p>
      </div>
      <div class="card-deck">
        <div class="card mt-3">
          <div id="carouselExampleControls7" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imgredim/bateau_card.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/maillebreze_card2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/maillebreze_card3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/maillebreze_card4.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls7" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls7" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Le Maille Breze</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum mauris id
              pellentesque rhoncus. Mauris aliquam faucibus lacus in tincidunt. Phasellus ut tempus tortor, ut efficitur
              justo. Vestibulum rutrum tortor non odio dignissim efficitur. Quisque quis nibh quis nulla lacinia
              porttitor. Mauris vehicula lorem lectus, tempus molestie velit condimentum sed.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><a href="contact.html" class="hvr-buzz-out">Plus d'info</a></small>
          </div>
        </div>
        <div class="card mt-3">
          <div id="carouselExampleControls8" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imgredim/elephant_card.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/machines_card2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/machines_card3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/machines_card3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls8" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls8" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Les Machines de l'Ile</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum mauris id
              pellentesque rhoncus. Mauris aliquam faucibus lacus in tincidunt. Phasellus ut tempus tortor, ut efficitur
              justo. Vestibulum rutrum tortor non odio dignissim efficitur. Quisque quis nibh quis nulla lacinia
              porttitor. Mauris vehicula lorem lectus, tempus molestie velit condimentum sed.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><a href="contact.html" class="hvr-buzz-out">Plus d'info</a></small>
          </div>
        </div>
        <div class="card mt-3">
          <div id="carouselExampleControls9" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imgredim/pommeraye_card.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/pommeraye_card2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/pommeraye_card3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls9" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls9" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Le Passage Pommeraye</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum mauris id
              pellentesque rhoncus. Mauris aliquam faucibus lacus in tincidunt. Phasellus ut tempus tortor, ut efficitur
              justo. Vestibulum rutrum tortor non odio dignissim efficitur. Quisque quis nibh quis nulla lacinia
              porttitor. Mauris vehicula lorem lectus, tempus molestie velit condimentum sed.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><a href="contact.html" class="hvr-buzz-out">Plus d'info</a></small>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="barre"></div>
      </div>
      <h2 id="vert" class="mt-3 d-flex justify-content-center">Les Espaces vert de Nantes</h2>
      <div class="d-flex justify-content-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur convallis dapibus. Vivamus
          nec rutrum tellus, eu blandit felis. Etiam.</p>
      </div>
      <div class="card-deck">
        <div class="card mt-3">
          <div id="carouselExampleControls10" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imgredim/versailles_card.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/versailles_card2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/versailles_card3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls10" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls10" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Ile de Versaille</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum mauris id
              pellentesque rhoncus. Mauris aliquam faucibus lacus in tincidunt. Phasellus ut tempus tortor, ut efficitur
              justo. Vestibulum rutrum tortor non odio dignissim efficitur. Quisque quis nibh quis nulla lacinia
              porttitor. Mauris vehicula lorem lectus, tempus molestie velit condimentum sed.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><a href="contact.html" class="hvr-buzz-out">Plus d'info</a></small>
          </div>
        </div>
        <div class="card mt-3">
          <div id="carouselExampleControls11" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imgredim/plantes_card.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/plantes_card2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/plantes_card3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls11" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls11" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Les jardin des plantes</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptas, vero dicta
              sed magni nesciunt dolor nihil! Quisquam, ea? Fugiat quia neque quaerat quo magni quibusdam minima
              dolorum, illo assumenda.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><a href="contact.html" class="hvr-buzz-out">Plus d'info</a></small>
          </div>
        </div>
        <div class="card mt-3">
          <div id="carouselExampleControls12" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imgredim/crapa_card.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/crapa_card2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/crapa_card3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls12" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls12" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Le crapa de Beaulieu</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum mauris id
              pellentesque rhoncus. Mauris aliquam faucibus lacus in tincidunt. Phasellus ut tempus tortor, ut efficitur
              justo. Vestibulum rutrum tortor non odio dignissim efficitur. Quisque quis nibh quis nulla lacinia
              porttitor. Mauris vehicula lorem lectus, tempus molestie velit condimentum sed.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><a href="contact.html" class="hvr-buzz-out">Plus d'info</a></small>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="barre"></div>
      </div>
      <h2 id="produits" class="mt-3 d-flex justify-content-center">Les Produits locaux</h2>
      <div class="d-flex justify-content-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur convallis dapibus. Vivamus
          nec rutrum tellus, eu blandit felis. Etiam.</p>
      </div>
      <div class="card-deck">
        <div class="card mt-3">
          <div id="carouselExampleControls13" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imgredim/gateau_card.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/gateau_card2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/gateau_card3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls13" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls13" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Gateau Nantais</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum mauris id
              pellentesque rhoncus. Mauris aliquam faucibus lacus in tincidunt. Phasellus ut tempus tortor, ut efficitur
              justo. Vestibulum rutrum tortor non odio dignissim efficitur. Quisque quis nibh quis nulla lacinia
              porttitor. Mauris vehicula lorem lectus, tempus molestie velit condimentum sed.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><a href="contact.html" class="hvr-buzz-out">Plus d'info</a></small>
          </div>
        </div>
        <div class="card mt-3">
          <div id="carouselExampleControls14" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imgredim/muscadet_card.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/muscadet_card2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/muscadet_card3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls14" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls14" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Muscadet</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum mauris id
              pellentesque rhoncus. Mauris aliquam faucibus lacus in tincidunt. Phasellus ut tempus tortor, ut efficitur
              justo. Vestibulum rutrum tortor non odio dignissim efficitur. Quisque quis nibh quis nulla lacinia
              porttitor. Mauris vehicula lorem lectus, tempus molestie velit condimentum sed.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><a href="contact.html" class="hvr-buzz-out">Plus d'info</a></small>
          </div>
        </div>
        <div class="card mt-3">
          <div id="carouselExampleControls15" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imgredim/cure_card.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/cure_card2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/cure_card3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls15" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls15" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Curé Nantais</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum mauris id pellentesque
              rhoncus. Mauris aliquam faucibus lacus in tincidunt. Phasellus ut tempus tortor, ut efficitur justo.
              Vestibulum rutrum tortor non odio dignissim efficitur. Quisque quis nibh quis nulla lacinia porttitor.
              Mauris vehicula lorem lectus, tempus molestie velit condimentum sed.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><a href="contact.html" class="hvr-buzz-out">Plus d'info</a></small>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="barre"></div>
      </div>
      <h2 id="lieuxHistorique" class="mt-3 d-flex justify-content-center">Les lieux historique de nantes</h2>
      <div class="d-flex justify-content-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur convallis dapibus. Vivamus
          nec rutrum tellus, eu blandit felis. Etiam.</p>
      </div>
      <div class="card-deck">
        <div class="card mt-3">
          <div id="carouselExampleControls16" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imgredim/chateau_card.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/chateau_card2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/chateau_card3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls16" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls16" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Chateau des ducs de Bretagne</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum mauris id
              pellentesque rhoncus. Mauris aliquam faucibus lacus in tincidunt. Phasellus ut tempus tortor, ut efficitur
              justo. Vestibulum rutrum tortor non odio dignissim efficitur. Quisque quis nibh quis nulla lacinia
              porttitor. Mauris vehicula lorem lectus, tempus molestie velit condimentum sed.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><a href="contact.html" class="hvr-buzz-out">Plus d'info</a></small>
          </div>
        </div>
        <div class="card mt-3">
          <div id="carouselExampleControls17" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imgredim/cathedrale_card.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/cathedrale_card2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/cathedrale_card3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/cathedrale_card4.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls17" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls17" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Cathédrale Saint-Pierre</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum mauris id
              pellentesque rhoncus. Mauris aliquam faucibus lacus in tincidunt. Phasellus ut tempus tortor, ut efficitur
              justo. Vestibulum rutrum tortor non odio dignissim efficitur. Quisque quis nibh quis nulla lacinia
              porttitor. Mauris vehicula lorem lectus, tempus molestie velit condimentum sed.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><a href="contact.html" class="hvr-buzz-out">Plus d'info</a></small>
          </div>
        </div>
        <div class="card mt-3">
          <div id="carouselExampleControls18" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imgredim/julesverne_card.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/julesverne_card2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/julesverne_card3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/julesverne_card4.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls18" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls18" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Musée Jules Verne</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum mauris id
              pellentesque rhoncus. Mauris aliquam faucibus lacus in tincidunt. Phasellus ut tempus tortor, ut efficitur
              justo. Vestibulum rutrum tortor non odio dignissim efficitur. Quisque quis nibh quis nulla lacinia
              porttitor. Mauris vehicula lorem lectus, tempus molestie velit condimentum sed.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><a href="contact.html" class="hvr-buzz-out">Plus d'info</a></small>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="barre"></div>
      </div>
      <h2 id="commerciaux" class="mt-3 d-flex justify-content-center">Les centre commerciaux nantais</h2>
      <div class="d-flex justify-content-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur convallis dapibus. Vivamus
          nec rutrum tellus, eu blandit felis. Etiam.</p>
      </div>
      <div class="card-deck">
        <div class="card mt-3">
          <div id="carouselExampleControls19" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imgredim/paridis_card.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/paridis_card2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/paridis_card3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls19" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls19" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Paridis</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum mauris id
              pellentesque rhoncus. Mauris aliquam faucibus lacus in tincidunt. Phasellus ut tempus tortor, ut efficitur
              justo. Vestibulum rutrum tortor non odio dignissim efficitur. Quisque quis nibh quis nulla lacinia
              porttitor. Mauris vehicula lorem lectus, tempus molestie velit condimentum sed.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><a href="contact.html" class="hvr-buzz-out">Plus d'info</a></small>
          </div>
        </div>
        <div class="card mt-3">
          <div id="carouselExampleControls20" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imgredim/atlantis_card.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/atlantis_card2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/atlantis_card3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls20" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls20" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Atlantis</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum mauris id
              pellentesque rhoncus. Mauris aliquam faucibus lacus in tincidunt. Phasellus ut tempus tortor, ut efficitur
              justo. Vestibulum rutrum tortor non odio dignissim efficitur. Quisque quis nibh quis nulla lacinia
              porttitor. Mauris vehicula lorem lectus, tempus molestie velit condimentum sed.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><a href="contact.html" class="hvr-buzz-out">Plus d'info</a></small>
          </div>
        </div>
        <div class="card mt-3">
          <div id="carouselExampleControls21" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imgredim/beaulieu_card.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/beaulieu_card2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imgredim/beaulieu_card3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls21" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls21" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Beaulieu</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum mauris id
              pellentesque rhoncus. Mauris aliquam faucibus lacus in tincidunt. Phasellus ut tempus tortor, ut efficitur
              justo. Vestibulum rutrum tortor non odio dignissim efficitur. Quisque quis nibh quis nulla lacinia
              porttitor. Mauris vehicula lorem lectus, tempus molestie velit condimentum sed.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><a href="contact.html" class="hvr-buzz-out">Plus d'info</a></small>
          </div>
        </div>
      </div>
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