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
<body style='background-image: url(img/téléchargement.jpg);'>
<!-- header -->
<?php include "include/nav.php"; ?>
<!-- inscription -->
    
<section class="h-100" style="background: url('/pictures/brand/background/educational-bg.jpg')">
        <div class="container">
            <h1 class="title-category text-center pt-5 mb-4">Connexion</h1>
            <div class="row justify-content-center mb-5">
                <div class="col-xl-6 col-lg-7 col-md-8 box">
                    <div class="m-3 p-5 rounded shadow text-left bg-white">
                        <form name="registration_form" method="post">
                            <p>
                                <div class="label">Adresse email</div>
                                <input type="email" id="registration_form_email" name="registration_form[email]" required="required" placeholder="Adresse email" class="input form-control" />
                            </p>
                            <p>
                                <div class="label">Mot de passe</div>
                                <input type="password" id="registration_form_plainPassword" name="registration_form[plainPassword]" required="required" placeholder="Au moins 6 caractères" class="input form-control" />
                            </p>
                            <p>
                                <!-- <input type="checkbox" id="communications" name="communications" /> -->
                                <small><label for="communications"> <a href="/privacy">Mot de passe oublié</a></label></small>
                            </p>
                            <small></small>
                            <div class="text-end mt-3">
                            <button class="purple-btn d-inline-block">Connexion</button>
                            </div>
                            <input type="hidden" id="registration_form__token" name="registration_form[_token]" value="uOUdmnyKiR14wrJmMzNsvdsQ1Ohw2Hv1xEmLTPMTRoo" /></form>
                    </div>
                    <div class="text-center p-3">
                        <a href="/" class="purple-outline-btn-lg">Pas encore inscrit ? Inscrivez-vous ici</a>
                    </div>
                </div>
            </div>
        </div>
</section>
   

<!-- footer -->
<?php include "include/footer.php"; ?>


<script src="dist/js/jquery.js"></script>
<script src="dist/js/owl.carousel.min.js"></script>
<script src="dist/js/script.js"></script>


</body>
</html>
