
<?php 
$currentpage = $_SERVER['PHP_SELF'];
?>

<header class="header" id="navbar">
    <div class="progress-container">
    <div class="row">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-lightblue" id="myBar">
            </div>
        </div>
    </div>
    <div class="container no-padding">
        <div class="row bg-lightblue">
            <nav class="navbar navbar-expand-lg navbar-light mx-auto">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="hvr-buzz-out nav-link <?php if($currentpage == "/home.php") echo "openpage"; else echo " "?>" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="hvr-buzz-out nav-link <?php if($currentpage == "/blog.php") echo "openpage"; else echo " "?>" href="blog.php">Blog/Actus</a>
                        </li>
                        <li class="nav-item">
                            <a class="hvr-buzz-out nav-link <?php if($currentpage == "/gallery.php") echo "openpage"; else echo " "?>" href="gallery.php">Galerie</a>
                        </li>
                        <li class="nav-item">
                            <a class="hvr-buzz-out nav-link <?php if($currentpage == "/event.php") echo "openpage"; else echo " "?>" href="event.php">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="hvr-buzz-out nav-link <?php if($currentpage == "/contact.php") echo "openpage"; else echo " "?>" href="contact.php">Infos Pratiques</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="row">
            <a href="home.php"><img src="img/logo/logo.png" alt="logo" class="logo mx-auto mb-3 mt-2" id="logo"><h1 class="navbar-brand w-50" id="title">Nantes'DrEAM</h1></a>
        </div>
    </div>
</header>