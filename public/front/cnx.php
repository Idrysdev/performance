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
    <title>Connexion</title>
     <!-- plugin -->
     <link rel="stylesheet" href="dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="dist/css/owl.theme.default.min.css">
</head>
<body>
<!-- header -->
<?php include "include/nav.php"; ?>
<!-- inscription -->
<div class="container-fluid ">
    <div class="inscription cnx">
        <div class="row">
            <div class="col-md-6">
                <div class="title">
                    <h3> Connexion</h3>
                     <p>Connectez-vous pour accéder à votre espace afin de profiter de tous vos cours (en format texte et vidéo).</p>
                </div>
                <form action="welcome.php" style="padding-left: 50px;">
                    <input type="Email" placeholder="Login">
                    <input type="password" placeholder="Mot de pass">
                    <div class="form-check">
                        <button type="submit"  value="Submit" class="cnx-btn">Connexion</button>
                        <label class="">
                        <a href=""> Mot de pass oublié</a>  
                        </label>
                      </div>
                      
                </form>
            </div>
            <div class="col-md-6">
                <div class="left">
                    <img src="img/ins5.jpg" alt="" class="img-fluid">
                </div>
            </div>
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
