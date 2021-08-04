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
    <title>Inscription</title>
     <!-- plugin -->
     <link rel="stylesheet" href="dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="dist/css/owl.theme.default.min.css">
</head>
<body>
<!-- header -->
<?php include "include/nav.php"; ?>
<!-- inscription -->
<div class="container-fluid ">
    <div class="inscription">
        <div class="row">
            <div class="col-md-6">
                <div class="title">
                    <h3> Creer un compte</h3>
                     <p>Inscrivzez-vous pour accéder à votre espace pour plus de fonctionnalité</p>
                </div>
                <form action="cnx.php" style="padding-left: 50px;">
                    <input type="text" placeholder="Nom">
                    <input type="text" placeholder="Prénom">
                    <input type="text" placeholder="E-mail">
                    <input type="text" placeholder="Telephone">
                    <input type="text" placeholder="Mot de pass">
                    <div class="form-check">
                        <input type="checkbox" >
                        <label class="ins-condition">J'accepte les <a href="">Conditions</a></label>
                    </div>
                      <button type="submit">S'inscrire</button>
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
