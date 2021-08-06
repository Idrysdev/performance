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
    <title>Rejouindre nos experts</title>
     <!-- plugin -->
     <link rel="stylesheet" href="dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="dist/css/owl.theme.default.min.css">
</head>
<body>
<!-- style='background-image: url(img/téléchargement.jpg); -->
<!-- header -->
<?php include "include/nav.php"; ?>
<!-- inscription -->
    
<section class="h-100">
<!-- style="background: url('/pictures/brand/background/educational-bg.jpg')" -->
        <div class="container ">
            
            <div class="row mb-5 justify-content-center expertformumlaire">
                <div class="col-xl-6 col-lg-7 col-md-8 box p-0 ">
                    <div class="p-5 rounded  text-left bg-white">
                    <h3 class="title-category text-center pt-5 mb-4">Remplissez le formulaire</h3>
                        <form name="registration_form" method="post">
                            <div class="row" style="margin-bottom: -1rem">
                                <div class="col">
                                     <p>
                                        <div class="label"></div>
                                        <input type="text" id="registration_form_firstName" name="registration_form[firstName]" required="required" placeholder="Prénom" class="input form-control" />
                                    </p>
                                </div>
                                <div class="col">
                                    <p>
                                        <div class="label"></div>
                                        <input type="text" id="registration_form_lastName" name="registration_form[lastName]" required="required" placeholder="Nom" class="input form-control" />
                                    </p>
                                </div>
                            </div>
                            <p>
                                <div class="label "></div>
                                <input type="" id="registration_form_email" name="registration_form[email]" required="required" placeholder="Téléphone" class="input form-control" />
                            </p>
                            <p>
                                <div class="label"></div>
                                <input type="email" id="registration_form_email" name="registration_form[email]" required="required" placeholder="Adresse email" class="input form-control" />
                            </p>
                            <p>
                                <div class="label">Curriculum vitae</div>
                                <input type="file" id="registration_form_plainPassword" name="registration_form[plainPassword]" required="required" placeholder="" class="input form-control" />
                            </p>
                            <p>
                                <div class="label">Lettre de Motivation</div>
                                <input type="file" id="registration_form_plainPassword" name="registration_form[plainPassword]" required="required" placeholder="" class="input form-control" />
                            </p>
                            <p>
                                <input type="checkbox" id="communications" name="communications" />
                                <small><label for="communications">Vous acceptez nos <a href="/privacy">conditions générales d'utilisation</a>.</label></small>
                            </p>
                            <small></small>
                            <div class="text-end mt-3">
                            <button class="purple-btn d-inline-block">Soumettre</button>
                            </div>
                            <input type="hidden" id="registration_form__token" name="registration_form[_token]" value="uOUdmnyKiR14wrJmMzNsvdsQ1Ohw2Hv1xEmLTPMTRoo" /></form>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <div class=' rounded text-left bg-white box'>
                       <img src="img/ins5.jpg" alt="">
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
