<?php ob_start();
require "../utile/formatage.php"
?>

<div id="carouselExampleIndicators" class="carousel slide perso_bgBlueDegrade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" class="bg-dark" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" class="bg-dark" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" class="bg-dark" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" class="bg-dark" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" class="bg-dark" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" class="bg-dark" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../sources/images/rotChiot.jpg" class="d-block w-75 h-75 mx-auto img-thumbnail object-fit: cover" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../sources/images/821E45F4-9DBD-42F0-9023-311CA9BE8836-1140x760.jpg" class="d-block w-75 h-75 mx-auto img-thumbnail" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../sources/images/images (1).jpeg" class="d-block w-75 h-75 mx-auto img-thumbnail" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>

<div class="text-center mt-3">
    <a class="btn rounded-pill perso_btnIndex text-white" href="../sources/pdf/cv_v2.1.pdf" download="CV-Thomas-Niaux">Téléchargez mon CV !</a>
</div>

<div class="container text-center" id="presentation">
    <h3 class="m-5 perso_colorBlueLight p-3">Aujourd'hui:</br> Bachelor développeur concepteur d'application </br> Demain:</br> Master Cybersécurité</h2>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gSlHPoW-h7o?start=4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
</div>

<div class="container mt-4 text-center">
    <?= formatageTitre("L'alternance selon l'ETNA") ?>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aVps6kFeEw0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>

<div class="container mt-4 text-center" id="competences">
    <?= formatageTitre("Mes compétences") ?>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4 my-2">
            <a href="#projet1">
                <h3>HTML / CSS project:</h3>
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 my-2">
            <a href="#projet2">
                <h3>PHP / Laravel project:</h3>
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 my-2">
            <a href="#projet3">
                <h3>Javascript / Node.JS project:</h3>
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 my-2">
            <a href="#projet4">
                <h3>MySQL / Sequelize project:</h3>
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 my-2">
            <a href="#projet5">
                <h3>Typescript project:</h3>
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 my-2">
            <a href="#projet6">
                <h3>SQL / MySQLI project:</h3>
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 my-2">
            <a href="#projet7">
                <h3>C project:</h3>
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 my-2">
            <a href="#projet8">
                <h3>C# project:</h3>
            </a>
        </div>
    </div>
</div>

<div class="container mt-4 text-center" id="portfolio">
    <?= formatageTitre("Mon Portfolio") ?>
    <div class="row">
        <div class="card border-success mb-3 mx-auto" id="projet1">
            <div class="card-header bg-transparent border-success">Site vitrine </br> HTML / CSS (only)</div>
            <div class="card-body p-0 text-success">
                <img src="../sources/images/chien-14.jpg" class="d-block w-100" alt="" srcset="">
            </div>
            <div class="card-footer bg-transparent border-success">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#project1">En savoir plus</button>
            </div>
        </div>
        <div class="card border-success mb-3 mx-auto">
            <div class="card-header bg-transparent border-success">Site vitrine </br> HTML / CSS (only)</div>
            <div class="card-body p-0 text-success">
                <img src="../sources/images/chien-14.jpg" class="d-block w-100" alt="" srcset="">
            </div>
            <div class="card-footer bg-transparent border-success">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#project1">En savoir plus</button>
            </div>
        </div>
        <div class="card border-success mb-3 mx-auto" id="projet2">
            <div class="card-header bg-transparent border-success">Pokédex </br> PHP / SQL</div>
            <div class="card-body p-0 text-success">
                <img src="../sources/images/chien-14.jpg" class="d-block w-100" alt="" srcset="">
            </div>
            <div class="card-footer bg-transparent border-success">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#project2">En savoir plus</button>
            </div>
        </div>
        <div class="card border-success mb-3 mx-auto">
            <div class="card-header bg-transparent border-success">BubbleMyTea </br> PHP / Laravel</div>
            <div class="card-body p-0 text-success">
                <img src="../sources/images/chien-14.jpg" class="d-block w-100" alt="" srcset="">
            </div>
            <div class="card-footer bg-transparent border-success">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#project3">En savoir plus</button>
            </div>
        </div>
        <div class="card border-success mb-3 mx-auto" id="projet3">
            <div class="card-header bg-transparent border-success">CaTourne </br> Javascript / Node.JS</div>
            <div class="card-body p-0 text-success">
                <img src="../sources/images/chien-14.jpg" class="d-block w-100" alt="" srcset="">
            </div>
            <div class="card-footer bg-transparent border-success">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#project4">En savoir plus</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="project1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Site Vitrine</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="../style/image/intro-chien.jpg" class="d-block w-100" alt="" srcset="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium expedita quisquam quibusdam ipsam recusandae, blanditiis pariatur enim, voluptate dolores eveniet harum aut ut ullam quidem reprehenderit nihil odit. Omnis, laudantium!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="project2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pokédex</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="../style/image/intro-chien.jpg" class="d-block w-100" alt="" srcset="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium expedita quisquam quibusdam ipsam recusandae, blanditiis pariatur enim, voluptate dolores eveniet harum aut ut ullam quidem reprehenderit nihil odit. Omnis, laudantium!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="project3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">BubbleMyTea</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="../sources/images/intro-chien.jpg" class="d-block w-100" alt="" srcset="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium expedita quisquam quibusdam ipsam recusandae, blanditiis pariatur enim, voluptate dolores eveniet harum aut ut ullam quidem reprehenderit nihil odit. Omnis, laudantium!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="project4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">CaTourne</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="../style/image/intro-chien.jpg" class="d-block w-100" alt="" srcset="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium expedita quisquam quibusdam ipsam recusandae, blanditiis pariatur enim, voluptate dolores eveniet harum aut ut ullam quidem reprehenderit nihil odit. Omnis, laudantium!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Témoignages -->
<div class="container mt-4 text-center" id="temoignages">
    <?= formatageTitre("Mes témoignages") ?>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4 my-2 temoignage1">
            <img src="../sources/images/Anthony_Tram.jpeg" class="d-block rounded-circle w-50 mx-auto" alt="">
            <h3>Témoignage n°1</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, at? Earum sint magni, voluptatem vitae aperiam cumque adipisci, nobis quasi, officiis facilis enim architecto nisi optio itaque pariatur atque. Ipsam!</p>
        </div>
        <div class="col-12 col-md-6 col-lg-4 my-2 temoignage2">
            <img src="../sources/images/Eli.jpeg" class="d-block rounded-circle w-50 mx-auto" alt="">
            <h3>Témoignage n°2</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, at? Earum sint magni, voluptatem vitae aperiam cumque adipisci, nobis quasi, officiis facilis enim architecto nisi optio itaque pariatur atque. Ipsam!</p>
        </div>
        <div class="col-12 col-md-6 col-lg-4 my-2 temoignage3">
            <img src="../sources/images/Florence.jpeg" class="d-block rounded-circle w-50 mx-auto" alt="">
            <h3>Témoignage n°3</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, at? Earum sint magni, voluptatem vitae aperiam cumque adipisci, nobis quasi, officiis facilis enim architecto nisi optio itaque pariatur atque. Ipsam!</p>
        </div>
        <div class="col-12 col-md-6 col-lg-4 my-2 temoignage4">
            <img src="../sources/images/Hubert-Henry.jpeg" class="d-block rounded-circle w-50 mx-auto" alt="">
            <h3>Témoignage n°4</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, at? Earum sint magni, voluptatem vitae aperiam cumque adipisci, nobis quasi, officiis facilis enim architecto nisi optio itaque pariatur atque. Ipsam!</p>
        </div>
        <div class="col-12 col-md-6 col-lg-4 my-2 temoignage5">
            <img src="../sources/images/kévin.jpeg" class="d-block rounded-circle w-50 mx-auto" alt="">
            <h3>Témoignage n°5</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, at? Earum sint magni, voluptatem vitae aperiam cumque adipisci, nobis quasi, officiis facilis enim architecto nisi optio itaque pariatur atque. Ipsam!</p>
        </div>
        <div class="col-12 col-md-6 col-lg-4 my-2 temoignage6">
            <img src="../sources/images/Linda.jpeg" class="d-block rounded-circle w-50 mx-auto" alt="">
            <h3>Témoignage n°6</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, at? Earum sint magni, voluptatem vitae aperiam cumque adipisci, nobis quasi, officiis facilis enim architecto nisi optio itaque pariatur atque. Ipsam!</p>
        </div>
        <!-- <div class="col-12 col-md-6 col-lg-4 my-2 temoignage7">
            <img src="../sources/images/Nakache.jpeg" class="d-block rounded-circle w-50 mx-auto" alt="">
            <h3>Témoignage n°7</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, at? Earum sint magni, voluptatem vitae aperiam cumque adipisci, nobis quasi, officiis facilis enim architecto nisi optio itaque pariatur atque. Ipsam!</p>
        </div> -->
    </div>
</div>
<script src="../style/js/main.js"></script>


<?php

$content = ob_get_clean();
require "./commons/template.php";
