<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="dist/css/style.css?v=1.5">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css?v=1.5">
    <link rel="stylesheet" href="dist/css/animate.css?v=1.5">
    <!-- js -->
    <script src="dist/js/jquery.js"></script>
    <script src="dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <title>Cours</title>
     <!-- plugin -->
     <link rel="stylesheet" href="dist/css/owl.carousel.min.css?v=1.5">
    <link rel="stylesheet" href="dist/css/owl.theme.default.min.css?v=1.5">
</head>
<body>
<!-- header -->
<?php include "include/nav.php"; ?>
<!-- cours header -->
<div class="container-fluid p-0">
    <div class="commity cours_header ">
      <img src="img/s1.jpg" alt="" class="img-fluid">
      <div class="content">
      <h3>Tle D</h3>
      </div>
    </div>
  </div>
<!-- thematique   -->
<!-- cours -->
<div class="container-fluid">
  <div class="cour">
    <div class="title">
      <h3>Tous les cours disponibles</h3>
      <p>Tous les cours que nous vous conseillons de suivre prochainement</p>
    </div>
    <div class="container">
        <div class="fliltre">
            <form>  
                <!-- <select name="" id="">
                  <option value="">Choisir un niveau</option>
                  <option value="">3 <sup>e</sup></option>
                  <option value="">Tle</option>
                </select> -->
            
                <select name="">
                    <option value="">Choisir la matière</option>
                    <option value="">Mathematiques	</option>
                    <option value="">Physique chimie	</option>
                    <option value="">SVT</option>
                    <option value="">Anglais	</option>
                    <option value="">Allemand</option>
                    <option value="">Espagnol</option>
                    <option value="">Histoire géographie</option>
                    <option value="">Education aux droits de l'homme et à la cioyenneté</option>
                </select>
            </form>
        </div>
    </div>
    <div class="container" style="padding-top: 24px;">
      <div class="row">
        <div class="col-md-3" style="margin-bottom: 24px;">
          <div class="bloc">
            <div class="top">
              <a href="presentation.php">
                <img src="img/2.png" alt="" class="img_top">
              </a>
              <div class="d_icon">
                <img src="img/electron.png" alt="">
              </div>
              <div class="d_name">
                <span>Phisique-chimie</span>
              </div>
            </div>
            <div class="bottom">
              <h5>Enjeux et bonne pratiques de la mediation <br>
              numerique pour le territoire </h5>
              <!-- <div class="point">
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <span>3/6</span>
              </div> -->
              <div class="info">
                <!-- <span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg> -->
              <!-- </span> <span>A patir du 7juin 2021</span> <br> -->
                <span><img src="img/delai.png" alt=""></span> <span>5 heures</span> <br>
                <span> <img src="img/niveau1.png" alt=""> </span> <span>Tle C</span>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-3" style="margin-bottom: 24px;">
          <div class="bloc">
            <div class="top">
              <a href="presentation.php">
                 <img src="img/3.png" alt="" class="img_top">
              </a>
              <div class="d_icon">
                <img src="img/genetics.png" alt="">
              </div>
              <div class="d_name">
                <span>SVT</span>
              </div>
            </div>
            <div class="bottom">
              <h5>Enjeux et bonne pratiques de la mediation <br>
              numerique pour le territoire </h5>
              <!-- <div class="point">
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <span>3/6</span>
              </div> -->
              <div class="info">
                <!-- <span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>
              </span> <span>A patir du 7juin 2021</span> <br> -->
                <span><span><img src="img/delai.png" alt=""></span> <span>5 heures</span> <br>
                <span> <img src="img/niveau1.png" alt=""> </span> <span>Tle A</span>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-3" style="margin-bottom: 24px;">
          <div class="bloc">
            <div class="top">
              <a href="presentation.php">
                <img src="img/4.png" alt="" class="img_top">
              </a>
              <div class="d_icon">
                <img src="img/pi.png" alt="">
              </div>
              <div class="d_name">
                <span>Mathématique</span>
              </div>
            </div>
            <div class="bottom">
              <h5>Enjeux et bonne pratiques de la mediation <br>
              numerique pour le territoire </h5>
              <!-- <div class="point">
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <span>3/6</span>
              </div> -->
              <div class="info">
                <!-- <span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>
              </span> <span>A patir du 7juin 2021</span> <br> -->
                <span><span><img src="img/delai.png" alt=""></span> <span>5 heures</span><br>
                <span> <img src="img/niveau1.png" alt=""> </span> <span>Tle D</span>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-3" style="margin-bottom: 24px;">
          <div class="bloc">
            <div class="top">
              <a href="presentation.php">
                <img src="img/5.png" alt="" class="img_top">
              </a>
              <div class="d_icon">
                <img src="img/electron.png" alt="">
              </div>
              <div class="d_name">
                <span>Physique-chimie</span>
              </div>
            </div>
            <div class="bottom">
              <h5>Enjeux et bonne pratiques de la mediation <br>
              numerique pour le territoire </h5>
              <!-- <div class="point">
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <span>3/6</span>
              </div> -->
              <div class="info">
                <!-- <span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>
              </span> <span>A patir du 7juin 2021</span> <br> -->
                <span><span><img src="img/delai.png" alt=""></span> <span>5 heures</span> <br>
                <span> <img src="img/niveau1.png" alt=""> </span> <span>3e</span>
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-3"style="margin-bottom: 24px;">
          <div class="bloc">
            <div class="top">
              <a href="presentation.php">
                <img src="img/2.png" alt="" class="img_top">
              </a>
              <div class="d_icon">
                <img src="img/electron.png" alt="">
              </div>
              <div class="d_name">
                <span>Phisique-chimie</span>
              </div>
            </div>
            <div class="bottom">
              <h5>Enjeux et bonne pratiques de la mediation <br>
              numerique pour le territoire </h5>
              <!-- <div class="point">
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <span>3/6</span>
              </div> -->
              <div class="info">
                <!-- <span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg> -->
              <!-- </span> <span>A patir du 7juin 2021</span> <br> -->
                <span><span><img src="img/delai.png" alt=""></span> <span>5 heures</span> <br>
                <span> <img src="img/niveau1.png" alt=""> </span> <span>Tle C</span>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-3" style="margin-bottom: 24px;">
          <div class="bloc">
            <div class="top">
              <a href="presentation.php">
              <img src="img/3.png" alt="" class="img_top">
              </a>
              <div class="d_icon">
                <img src="img/genetics.png" alt="">
              </div>
              <div class="d_name">
                <span>SVT</span>
              </div>
            </div>
            <div class="bottom">
              <h5>Enjeux et bonne pratiques de la mediation <br>
              numerique pour le territoire </h5>
              <!-- <div class="point">
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <span>3/6</span>
              </div> -->
              <div class="info">
                <!-- <span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>
              </span> <span>A patir du 7juin 2021</span> <br> -->
                <span><span><img src="img/delai.png" alt=""></span> <span>5 heures</span> <br>
                <span> <img src="img/niveau1.png" alt=""> </span> <span>Tle A</span>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-3" style="margin-bottom: 24px;">
          <div class="bloc">
            <div class="top">
              <a href="presentation.php">
                <img src="img/4.png" alt="" class="img_top">
              </a>
              <div class="d_icon">
                <img src="img/pi.png" alt="">
              </div>
              <div class="d_name">
                <span>Mathématique</span>
              </div>
            </div>
            <div class="bottom">
              <h5>Enjeux et bonne pratiques de la mediation <br>
              numerique pour le territoire </h5>
              <!-- <div class="point">
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <span>3/6</span>
              </div> -->
              <div class="info">
                <!-- <span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>
              </span> <span>A patir du 7juin 2021</span> <br> -->
                <span><span><img src="img/delai.png" alt=""></span> <span>5 heures</span> <br>
                <span> <img src="img/niveau1.png" alt=""> </span> <span>Tle D</span>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-3" style="margin-bottom: 24px;">
          <div class="bloc">
            <div class="top">
              <a href="presentation.php">
               <img src="img/5.png" alt="" class="img_top">
              </a>
              <div class="d_icon">
                <img src="img/electron.png" alt="">
              </div>
              <div class="d_name">
                <span>Physique-chimie</span>
              </div>
            </div>
            <div class="bottom">
              <h5>Enjeux et bonne pratiques de la mediation <br>
              numerique pour le territoire </h5>
              <!-- <div class="point">
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <div class="rond"></div>
                <span>3/6</span>
              </div> -->
              <div class="info">
                <!-- <span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>
              </span> <span>A patir du 7juin 2021</span> <br> -->
                <span><span><img src="img/delai.png" alt=""></span> <span>5 heures</span> <br>
                <span> <img src="img/niveau1.png" alt=""> </span> <span>3e</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- commity -->
<div class="container-fluid p-0">
  <div class="commity expert">
    <div class="overlay"></div>
    <!-- <img src="img/6.png" alt="" class="img-fluid"> -->
    <div class="content">
      <p>Passioneé par l'éducation, vous souhaitez participer à l'aventure de performance academy. <br> 
      Vous nous intéressez! Inscrivez-vous!</p>
      <a href="cnx2.php">Rejoignez nos experts</a>
    </div>
  </div>
</div>
<!-- footer -->
<?php include "include/footer.php"; ?>


<script src="dist/js/jquery.js"></script>
<script src="dist/js/owl.carousel.min.js"></script>
<script src="dist/js/script.js"></script>
</body>
</html>
