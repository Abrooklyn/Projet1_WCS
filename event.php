<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Event</title>
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
                        <img src="imgredim/concert_250.jpg" class="d-block w-100" alt="concert">
                    </div>
                    <div class="carousel-item">
                        <img src="imgredim/hellfest_250.jpg" class="d-block w-100" alt="hellfest">
                    </div>
                    <div class="carousel-item">
                        <img src="imgredim/web2day_250.jpg" class="d-block w-100" alt="salon">
                    </div>
                    <div class="carousel-item">
                        <img src="imgredim/meeting_250.jpg" class="d-block w-100" alt="meeting">
                    </div>
                    <div class="carousel-item">
                        <img src="imgredim/musee_250.jpg" class="d-block w-100" alt="musee">
                    </div>
                    <div class="carousel-item">
                        <img src="imgredim/nocturne_250.jpg" class="d-block w-100" alt="nocture">
                    </div>
                    <div class="carousel-item">
                        <img src="imgredim/spectacles_250.jpg" class="d-block w-100" alt="spectacle">
                    </div>
                    <div class="carousel-item">
                        <img src="imgredim/anneaux_250.jpg" class="d-block w-100" alt="anneaux">
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
        <div class="container no-padding">
            <h2 class="d-flex justify-content-center" id="concert">Concerts</h2>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="imgredim/ferrailleur_card.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">Le Ferrailleur</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab laborum
                                voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="imgredim/zenith_card.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Zénith Nantes Métropole</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab laborum
                                voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="imgredim/stereolux_card.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">StereoLux</h5>
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
        <div class="container no-padding">
            <h2 class="d-flex justify-content-center" id="festival">Festivals</h2>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Hellfest/Knotfest 2019</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab laborum
                                voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="imgredim/hellfest_card.jpg" class="card-img" alt="...">
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Aux heures d'été 2019</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab laborum
                                voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="imgredim/ete_card.jpg" class="card-img" alt="...">
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Festival Du Cinéma Espagnol</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab laborum
                                voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="imgredim/espagnol_card.jpg" class="card-img" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="barre"></div>
        </div>
        <div class="container no-padding">
            <h2 class="d-flex justify-content-center" id="salon">Salons</h2>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="imgredim/art3f_card.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Art3F</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab laborum
                                voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="imgredim/art2play_card.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Art2Play</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab laborum
                                voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="imgredim/web2day_card.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Web2day</h5>
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
        <div class="container no-padding">
            <h2 class="d-flex justify-content-center" id="meeting">Meeting</h2>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Meetup</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab laborum
                                voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="imgredim/meetup_card.jpg" class="card-img" alt="...">
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">EventBrite</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab laborum
                                voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="imgredim/eventbrite_card.jpg" class="card-img" alt="...">
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Nantes Digital Week</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab laborum
                                voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="imgredim/nantesdigital_card.jpg" class="card-img" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="barre"></div>
            <div class="container no-padding">
                <h2 class="d-flex justify-content-center" id="musées">Musées</h2>
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="imgredim/julesverne_card.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Musée Jules Verne</h5>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab
                                    laborum
                                    voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                    laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="imgredim/musee_card.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Museum Histoire Naturelle</h5>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab
                                    laborum
                                    voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                    laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="imgredim/planetarium_card.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Planetarium</h5>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab
                                    laborum
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
            <div class="container no-padding">
                <h2 class="d-flex justify-content-center" id="nocturne">Nocturnes</h2>
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Les petits secrets de Nantes</h5>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab
                                    laborum
                                    voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                    laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="imgredim/petitssecrets_card.jpg" class="card-img" alt="...">
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Regard différents sur la ville et les architectures</h5>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab
                                    laborum
                                    voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                    laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="imgredim/nocturne_card.jpg" class="card-img" alt="...">
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Chateau à la torche</h5>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab
                                    laborum
                                    voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                    laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="imgredim/nocturnech_card.jpg" class="card-img" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="barre"></div>
            </div>
            <div class="container no-padding">
                <h2 class="d-flex justify-content-center" id="spectacles">Spectacles</h2>
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="imgredim/veronic_card.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Veronic Dicaire "Showgirl"</h5>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab
                                    laborum
                                    voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                    laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="imgredim/vamp_card.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Les Vamp in the kitchen</h5>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab
                                    laborum
                                    voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                    laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="imgredim/ahmed_card.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Ahmed Sylla "Différent"</h5>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab
                                    laborum
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
            <div class="container no-padding">
                <h2 class="d-flex justify-content-center" id="contemporain">Art Contemporain</h2>
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">HAB Galerie</h5>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab
                                    laborum
                                    voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                    laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="imgredim/hab_card.jpg" class="card-img" alt="...">
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Machines De Nantes</h5>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab
                                    laborum
                                    voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                    laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="imgredim/elephant_card.jpg" class="card-img" alt="...">
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Les anneaux</h5>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab
                                    laborum
                                    voluptate cum unde ex cupiditate consequatur dolores dicta optio magnam voluptates
                                    laudantium incidunt autem quos, fuga nulla sint non illum.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="imgredim/anneaux_card.jpg" class="card-img" alt="...">
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