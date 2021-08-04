<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/animate.css">

    <!-- js -->
    <script src="dist/js/jquery.js"></script>
    <script src="dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <title>Cours</title>
     <!-- plugin -->
     <link rel="stylesheet" href="dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="dist/css/owl.theme.default.min.css">
</head>
<body>
<!-- header -->
<?php include "include/nav.php"; ?>
<!-- cours header -->
<div class="container-fluid">
    <div class="row begin">
        <div class="col-md-9 fulscreen p-0"> 
            <div class="row">
                <video width="100%" height="450px" controls>
                    <source src="videos/Puissance et énergie - Physique-Chimie - 3e - Les Bons Profs.mp4" type="video/mp4">
                </video>
                <span class= 'content-show'> Contenu du cours</span>
            </div> 
            <div class="row begin-tabs">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-recherche" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><img src="img/search.png" alt=""></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Objectifs</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Q&R</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Remarque</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-annonce" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Annonce</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-recherche" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="search-container">
                            <form action="/action_page.php">
                            <div class='searchbar' >
                                <input type="text" placeholder="Rechercher du contenu de cours" name="search">
                                <button type="submit"><img src="img/search1.png" alt=""></button>
                            </div>
                            </form>
                            <p><span>Lancer une nouvelle recherche</span> <br> <span>Pour trouver des sessions ou des ressources</span>  </p>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="container ">
                            <div class="row m-3">
                                <h3 class="mt-5">Ce que vous apprendrez</h3>
                                <div class="col-md-6 mb-3">
                                    <span><img src="img/check.png" class='obj-icon' alt=""></span>
                                    <span>L'énergie: conversion et transfert</span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <span><img src="img/check.png" class='obj-icon' alt=""></span>
                                    <span>Apprendre les mouvements et Interactions</span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <span><img src="img/check.png" class='obj-icon' alt=""></span>
                                    <span>Contruction et transformation de la matière</span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <span><img src="img/check.png" class='obj-icon' alt=""></span>
                                    <span> Apprendre les champs electrostatique</span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <span><img src="img/check.png" class='obj-icon' alt=""></span>
                                    <span>apprendre la cinematique </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="search-container question-reponse">
                            <form action="/action_page.php">
                                <div>
                                    <input type="text" placeholder="Rechercher toute les questions relatives au cours" name="search">
                                    <button type="submit"><img src="img/search1.png" alt=""></button> <br>
                                </div>
                                <div>
                                    <select name="" class='mt-3'>
                                        <option value="">Tout les session</option>
                                        <option value="">Session actuelle</option>
                                    </select>
                                    <select name="" class='mt-3'>
                                        <option value="">Trier par date</option>
                                        <option value="">Trier par le plus de votes positifs</option>
                                        <option value="">Trier par recommandations</option>
                                    </select>
                                </div>
                            </form>
                            <div class="question mt-5">
                                <div class="title">
                                    <h3>Toutes les questions dans ce cours(598)</h3>
                                </div>
                                <div class="content-msg">
                                    <div class="left" >
                                        <img src="img/w2.jpeg" alt="">
                                    </div>
                                    <div class="midlle" >
                                        <p>Question exécution débogage node.js par défaut</p>
                                        <p>Hello,J'ai une question concernant l'exécution sans débogage. Lors...</p>
                                        <span>Thierry · Session 11 · il y a 9 mois</span>
                                    </div>
                                    <!-- <div class="right" >
                                        <p> <span>15</span><span></span></p>
                                        <p> <span>7</span><span></span></p>
                                    </div> -->
                                     
                                </div>
                                <div class="content-msg mt-3">
                                    <div class="left" >
                                        <img src="img/w2.jpeg" alt="">
                                    </div>
                                    <div class="midlle" >
                                        <p>Question exécution débogage node.js par défaut</p>
                                        <p>Hello,J'ai une question concernant l'exécution sans débogage. Lors...</p>
                                        <span>Thierry · Session 11 · il y a 9 mois</span>
                                    </div>
                                    <!-- <div class="right" >
                                        <p> <span>15</span><span></span></p>
                                        <p> <span>7</span><span></span></p>
                                    </div> -->
                                     
                                </div>
                                <div class="content-msg mt-3">
                                    <div class="left" >
                                        <img src="img/w2.jpeg" alt="">
                                    </div>
                                    <div class="midlle" >
                                        <p>Question exécution débogage node.js par défaut</p>
                                        <p>Hello,J'ai une question concernant l'exécution sans débogage. Lors...</p>
                                        <span>Thierry · Session 11 · il y a 9 mois</span>
                                    </div>
                                    <!-- <div class="right" >
                                        <p> <span>15</span><span></span></p>
                                        <p> <span>7</span><span></span></p>
                                    </div> -->
                                     
                                </div>
                                <div class="content-msg mt-3">
                                    <div class="left" >
                                        <img src="img/w2.jpeg" alt="">
                                    </div>
                                    <div class="midlle" >
                                        <p>Question exécution débogage node.js par défaut</p>
                                        <p>Hello,J'ai une question concernant l'exécution sans débogage. Lors...</p>
                                        <span>Thierry · Session 11 · il y a 9 mois</span>
                                    </div>
                                    <!-- <div class="right" >
                                        <p> <span>15</span><span></span></p>
                                        <p> <span>7</span><span></span></p>
                                    </div> -->
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Remarque</div>
                    <div class="tab-pane fade" id="pills-annonce" role="tabpanel" aria-labelledby="pills-contact-tab">Annonce</div>
                </div>
            </div> 
        </div>
        <div class="col-md-3 p-0 courscontent " >
            <div class="bloc-right">
                <div class="sty">
                    <h5>Contenu du cours <img src="img/cancel.png" alt="" class='cancel'></h5>
                    <div class="right" >
                        <div class="content">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="title">
                                        <span>Section 1 : Cinématique</span>
                                        <span>0/15 | 1h12</span>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse  " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="bloc">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt=""> Ressources</a>
                                        </div>   
                                    </div>
                                    <div class="bloc mt-3">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt=""> Resources</a>
                                        </div>   
                                    </div>
                                    <div class="bloc mt-3">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt=""> Resources </a>
                                        </div>   
                                    </div>
                                    <div class="bloc mt-3">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"> <img src="img/file.png" alt="">Resources</a>
                                        </div>   
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="title">
                                        <span>Section 2 : Force</span>
                                        <span>0/15 | 1h12</span>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <div class="bloc">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt=""> Ressources </a>
                                        </div>   
                                    </div>
                                    <div class="bloc mt-3">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt="">  Ressources </a>
                                        </div>   
                                    </div>
                                    <div class="bloc mt-3">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt="">Ressources </a>
                                        </div>   
                                    </div>
                                    <div class="bloc mt-3">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt="">Ressources </a>
                                        </div>   
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="title">
                                        <span>Section 3 : Puissance</span>
                                        <span>0/15 | 1h12</span>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="bloc">
                                            <div class="left">
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </div>
                                            <div class="midlle">
                                                <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                                <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                                <a href="#"><img src="img/file.png" alt="">Ressources </a>
                                            </div>   
                                        </div>
                                        <div class="bloc mt-3">
                                            <div class="left">
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </div>
                                            <div class="midlle">
                                                <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                                <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                                <a href="#"><img src="img/file.png" alt="">Ressources </a>
                                            </div>   
                                        </div>
                                        <div class="bloc mt-3">
                                            <div class="left">
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </div>
                                            <div class="midlle">
                                                <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                                <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                                <a href="#"><img src="img/file.png" alt="">Ressources </a>
                                            </div>   
                                        </div>
                                        <div class="bloc mt-3">
                                            <div class="left">
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </div>
                                            <div class="midlle">
                                                <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                                <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                                <a href="#"><img src="img/file.png" alt=""> Ressources</a>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <div class="title">
                                        <span>Section 4 : Puissance</span>
                                        <span>0/15 | 1h12</span>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <div class="bloc">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt="">Resources</a>
                                        </div>   
                                    </div>
                                    <div class="bloc mt-3">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt="">Ressources </a>
                                        </div>   
                                    </div>
                                    <div class="bloc mt-3">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#">  <img src="img/file.png" alt=""> Ressources</a>
                                        </div>   
                                    </div>
                                    <div class="bloc mt-3">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt=""> Ressources </a>
                                        </div>   
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <div class="title">
                                        <span>Section 5 : Puissance</span>
                                        <span>0/15 | 1h12</span>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <div class="bloc">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt="">Resources</a>
                                        </div>   
                                    </div>
                                    <div class="bloc mt-3">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt="">Ressources </a>
                                        </div>   
                                    </div>
                                    <div class="bloc mt-3">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#">  <img src="img/file.png" alt=""> Ressources</a>
                                        </div>   
                                    </div>
                                    <div class="bloc mt-3">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt=""> Ressources </a>
                                        </div>   
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <div class="title">
                                        <span>Section 6 : Puissance</span>
                                        <span>0/15 | 1h12</span>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <div class="bloc">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt="">Resources</a>
                                        </div>   
                                    </div>
                                    <div class="bloc mt-3">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt="">Ressources </a>
                                        </div>   
                                    </div>
                                    <div class="bloc mt-3">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#">  <img src="img/file.png" alt=""> Ressources</a>
                                        </div>   
                                    </div>
                                    <div class="bloc mt-3">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt=""> Ressources </a>
                                        </div>   
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <div class="title">
                                        <span>Section 7 : Puissance</span>
                                        <span>0/15 | 1h12</span>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <div class="bloc">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt="">Resources</a>
                                        </div>   
                                    </div>
                                    <div class="bloc mt-3">
                                        <div class="left">
                                            <input type="checkbox" id="" name="" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt="">Ressources </a>
                                        </div>   
                                    </div>
                                    <div class="bloc mt-3">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#">  <img src="img/file.png" alt=""> Ressources</a>
                                        </div>   
                                    </div>
                                    <div class="bloc mt-3">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt=""> Ressources </a>
                                        </div>   
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <div class="title">
                                        <span>Section 8 : Puissance</span>
                                        <span>0/15 | 1h12</span>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <div class="bloc">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt="">Resources</a>
                                        </div>   
                                    </div>
                                    <div class="bloc mt-3">
                                        <div class="left">
                                            <input type="checkbox" id="" name="" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt="">Ressources </a>
                                        </div>   
                                    </div>
                                    <div class="bloc mt-3">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#">  <img src="img/file.png" alt=""> Ressources</a>
                                        </div>   
                                    </div>
                                    <div class="bloc mt-3">
                                        <div class="left">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        </div>
                                        <div class="midlle">
                                            <span> 1. Qu'est ce qu'une accéleration?</span> <br>
                                            <span> <img src="img/play-button.png" alt=""> 15 min</span>
                                            <a href="#"><img src="img/file.png" alt=""> Ressources </a>
                                        </div>   
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                 
                
            </div>
            
        </div>
    </div>
</div>
<!-- cours header end -->
<!-- commity -->
<div class="container-fluid p-0">
  <div class="commity dasbord_commity" style='margin-bottom:-15px'>
    <!-- <img src="img/6.png" alt="" class="img-fluid">
    <div class="content">
      <p>Passioneé par l'éducation, vous souhaitez participer à l'aventure de performance accademique. <br> 
      Vous nous intéressez! Inscrivez-vous!</p>
      <a href="">Rejoignez nos experts</a>
    </div> -->
  </div>
</div>
<!-- footer -->
<?php include "include/footer.php"; ?>


<script src="dist/js/jquery.js"></script>
<script src="dist/js/owl.carousel.min.js"></script>
<script src="dist/js/script.js"></script>
</body>
</html>
