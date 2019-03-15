<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
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
            <div class="barre"></div>
        </div>
        <div class="container">
            <h2 class="display-1">Hello, world!</h2>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
                featured content or information.</p>
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        </div>
        <div class="container">
            <div class="barre"></div>
        </div>
        <div class="container no-padding">
            <div class="card-deck">
                <div class="card">
                    <img src="imgredim/concert_card.jpg" class="card-img-top w-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Concerts</h5>
                        <p class="card-text">Au Ferrailleur cette semaine</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img src="imgredim/hellfest_card.jpg" class="w-100" alt="hellfest">
                    <div class="card-body">
                        <h5 class="card-title">Festivals</h5>
                        <p class="card-text">Hellfest - Knotfest</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img src="imgredim/anneaux_card.jpg" class="w-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Art Contemporain</h5>
                        <p class="card-text">La Ville d'artiste</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="barre"></div>
        </div>
        <div class="container no-padding">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">Concerts</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab laborum
                                voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="imgredim/ferrailleur_card.jpg" class="card-img" alt="...">
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="imgredim/plantes_card.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Espaces Verts</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab laborum
                                voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="barre"></div>
        </div>
        <div class="container no-padding mx-auto">
            <h2>Infos Pratiques, Contacts</h2>
            <a href="contact.html" class="btn btn-lightblue btn-lg btn-block hvr-buzz-out" role="button" aria-pressed="true">Par ici !</a>
            <img src="imgredim/mairie_250.jpg" alt="mairie" class="col no-padding mt-3">
        </div>
        <?php require 'footer.php'?>
    </body>
</html>