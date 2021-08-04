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
    <title>Contact</title>
     <!-- plugin -->
     <link rel="stylesheet" href="dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="dist/css/owl.theme.default.min.css">
</head>
<body>
<!-- header -->
<?php include "include/nav.php"; ?>
<!-- cours header -->
<div class="container-fluid p-0">
    <div class="commity cours_header ">
      <img src="img/s1.jpg" alt="" class="img-fluid">
      <div class="content dashbord_content contact_title">
        <h4>Contactez-nous</h4>
      </div>
    </div>
</div>
<!--  -->
<div class="contact">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <h3>Information</h3>
            <span class='soulign'></span>
            <p> 
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Reprehenderit, repellendus! Ex quibusdam dicta consequatur temporibus ducimus 
                illo eius tempora, quaerat aliquid minima hic eligendi nostrum!
                Facere neque iste rerum ratione repellat, debitis dolorem consequatur ex at.
            </p>
            <div class="bloc">
                <img src="img/map-position.png" alt="">
                <div class='content'>
                    <h6>Adress</h6>
                    <span>112 meril avenue, Ocland City New York</span>
                </div>
            </div>
            <div class="bloc">
                <img src="img/call.png" alt="">
                <div class='content'>
                    <h6>Téléphone</h6>
                    <span>(801) 2345 - 6789 / (801) 2345 - 6789</span>
                </div>
            </div>
            <div class="bloc">
                <img src="img/email.png" alt="">
                <div class='content'>
                    <h6>Email</h6>
                    <span>support@yourmail.com</span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h3>Envoyez un message</h3>
            <span class='soulign'></span>   
            <form action="" method="" class="mt-4">
                <div class="row">
                    <div class="col-md-6">
                    <input type="text" name="" id="" placeholder="Nom">
                    </div>
                    <div class="col-md-6">
                    <input type="text" name="" id="" placeholder="Prénom">
                    </div>
                    <div class="col-md-12">
                    <input type="text" name="" id="" placeholder="Objet">
                    </div>
                    <div class="col-md-12">
                        <textarea name="" id="" cols="" rows="">Message</textarea>
                    </div>
                    <div class="col-md-6">
                        <button type="submit">Envoyer</button>
                    </div>
                </div>
            </form>
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
