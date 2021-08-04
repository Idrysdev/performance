<!DOCTYPE html>
<html lang="en">
  <!-- head -->
  @include('partials.front._header')
  <!-- head-end -->
<body>
  <div class="header-bloc">
      <!-- header -->
      @include('partials.front._nav')
<!-- header-end -->
<!-- slide -->
<div class="container-fluid p-0">
  <div class="slide">
    <div class="slide_content owl-carousel">
        <div class="item"> <img src="{{ asset('front/img/1.png') }}" alt="" class="img-fluid slide-1"></div>
        <div class="item"><img src="{{ asset('front/img/1.png') }}" alt="" class="img-fluid slide-1" style='height:450px'></div>
        <div class="item"><img src="{{ asset('front/img/1.png') }}" alt="" class="img-fluid slide-1"></div>
        <div class="item"><img src="{{ asset('front/img/1.png') }}" alt="" class="img-fluid slide-1"></div>
    </div>
    <div class="slide_bloc">
        @php
        $i = 0;
        foreach ($classes as $classe)
        {
            if ($i% 2== 0)
            {
            @endphp
            <a href="{{route('cours', [$classe->niveau->libelle,$classe->slug])}}" style=" text-decoration:none;">
                <div class="bloc" style="background-color: #bc0762;">
                <div class="img"></div>
                    <img src="{{ asset('front/img/niveau2.png') }}" alt="">
                    <h3> {{$classe->niveau->libelle != 'Troisième' ? "Tle $classe->libelle": "3e"}}</h3>
                </div>
            </a>
            @php
            }else{
            @endphp
            <a href="{{route('cours', [$classe->niveau->slug,$classe->slug])}}" style=" text-decoration:none;">
                <div class="bloc" style="background-color:  #efbc1d;">
                <div class="img"></div>
                    <img src="{{ asset('front/img/niveau2.png') }}" alt="">
                    <h3> {{$classe->niveau->libelle != 'Troisième' ? "Tle $classe->libelle": "3e"}}</h3>
                </div>
            </a>


           @php
            }
            $i++;
        }
    @endphp

        {{-- <a href="cours.php" style=" text-decoration:none;">
          <div class="bloc" style="background-color: #bc0762;">
            <div class="img"></div>
              <img src="{{ asset('front/img/niveau2.png') }}" alt="">
              <h3>3e</h3>
          </div>
        </a> --}}

        {{-- <a href="cours.php" style=" text-decoration:none;">
          <div class="bloc" style="background-color: #efbc1d;">
            <div class="img"></div>
            <img src="{{ asset('front/img/niveau2.png') }}" alt="">
            <h3>Tle A</h3>
          </div>
        </a>
        <a href="cours.php" style=" text-decoration:none;">
          <div class="bloc" style="background-color: #bc0762;">
            <div class="img"></div>
            <img src="{{ asset('front/img/niveau2.png') }}" alt="">
              <h3>Tle D</h3>
          </div>
        </a>
        <a href="cours.php" style=" text-decoration:none;">
            <div class="bloc" style="background-color: #efbc1d;">
              <div class="img"></div>
              <img src="{{ asset('front/img/niveau2.png') }}" alt="">
                <h3>Tle C</h3>
            </div>
        </a> --}}
    </div>
  </div>
</div>
  </div>
<!-- thematique   -->
<div class="container-fluid  thema-box">
  <div class="thema mt-5">
    <div class="title">
      <h3>les matieres</h3>
      <p>Decouvrez les matières disponibles.</p>
    </div>
    </div>
    <div class="container-fluid thema_bg">
      <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="left">
                <h3> Les grands axes de notre formation avec performance academy </h3>
                <p> Performance academy forme dans les disciplines permettant au élèves et futur étudiants de mieux s'orienter</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="right">
                <div class="content">
                  <a href="cours.php">
                  <div class=" row bloc">
                    <div class="img col-md-4">
                      <img src="{{ asset('front/img/electron.png') }}" alt="">
                    </div>
                    <h4 class="col-md-8">Physique-chimie</h4>
                  </div>
                  </a>
                  <a href="cours.php">
                    <div class=" row bloc">
                      <div class="img col-md-4">
                        <img src="{{ asset('front/img/pi.png') }}" alt="">
                      </div>
                      <h4 class="col-md-8">Mathématiques</h4>
                    </div>
                  </a>
                  <a href="cours.php">
                  <div class=" row bloc">
                    <div class="img col-md-4">
                       <img src="{{ asset('front/img/genetics.png') }}" alt="">
                    </div>
                    <h4 class="col-md-8">SVT</h4>
                  </div>
                  </a>
                </div>
            </div>
            </div>
          </div>
      </div>
    </div>

</div>
<!-- cours -->
<div class="container-fluid mt-5">
  <div class="cour">
    <div class="title">
      <h3>les cours du moment</h3>
      <p>Tous les cours que nous vous conseillons de suivre prochainement</p>
    </div>
    <div class="container" style="padding-top: 24px;">
      <div class="row">
        <div class="col-md-3 " style="margin-bottom: 24px;">
          <div class="bloc">
            <div class="top">
              <a href="presentation.php">
                <img src="{{ asset('front/img/2.png') }}" alt="" class="img_top">
              </a>
              <div class="d_icon">
                <img src="{{ asset('front/img/electron.png') }}" alt="">
              </div>
              <div class="d_name">
                <span>Phisique-chimie</span>
              </div>
            </div>
            <div class="bottom">
              <h5>Enjeux et bonne pratiques de la mediation <br>
              numerique pour le territoire </h5>
              <div class="info">
                <span><img src="{{ asset('front/img/delai.png') }}" alt=""></span> <span>5 heures</span> <br>
                <span> <img src="{{ asset('front/img/niveau1.png') }}" alt=""> </span> <span>Tle C</span>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-3 " style="margin-bottom: 24px;">
          <div class="bloc">
            <div class="top">
              <a href="presentation.php">
                <img src="{{ asset('front/img/3.png') }}" alt="" class="img_top">
              </a>
              <div class="d_icon">
                <img src="{{ asset('front/img/genetics.png') }}" alt="">
              </div>
              <div class="d_name">
                <span>SVT</span>
              </div>
            </div>
            <div class="bottom">
              <h5>Enjeux et bonne pratiques de la mediation <br>
              numerique pour le territoire </h5>
              <div class="info">
                <span><span><img src="{{ asset('front/img/delai.png') }}" alt=""></span> <span>5 heures</span><br>
                <span> <img src="{{ asset('front/img/niveau1.png') }}" alt=""> </span> <span>Tle A</span>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-3 " style="margin-bottom: 24px;">
          <div class="bloc">
            <div class="top">
              <a href="presentation.php">
                <img src="{{ asset('front/img/4.png') }}" alt="" class="img_top">
              </a>
              <div class="d_icon">
                <img src="{{ asset('front/img/pi.png') }}" alt="">
              </div>
              <div class="d_name">
                <span>Mathématiques</span>
              </div>
            </div>
            <div class="bottom">
              <h5>Enjeux et bonne pratiques de la mediation <br>
              numerique pour le territoire </h5>
              <div class="info">
                <span><span><img src="{{ asset('front/img/delai.png') }}" alt=""></span> <span>5 heures</span> <br>
                <span> <img src="{{ asset('front/img/niveau1.png') }}" alt=""> </span> <span>Tle D</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 " style="margin-bottom: 24px;">
          <div class="bloc">
            <div class="top">
              <a href="presentation.php">
                <img src="{{ asset('front/img/5.png') }}" alt="" class="img_top">
              </a>
              <div class="d_icon">
                <img src="{{ asset('front/img/electron.png') }}" alt="">
              </div>
              <div class="d_name">
                <span>Physique-chimie</span>
              </div>
            </div>
            <div class="bottom">
              <h5>Enjeux et bonne pratiques de la mediation <br>
              numerique pour le territoire </h5>
              <div class="info">
                <span><span><img src="{{ asset('front/img/delai.png') }}" alt=""></span> <span>5 heures</span><br>
                <span> <img src="{{ asset('front/img/niveau1.png') }}" alt=""> </span> <span>3e</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 "style="margin-bottom: 24px;">
          <div class="bloc">
            <div class="top">
              <a href="presentation.php">
                <img src="{{ asset('front/img/2.png') }}" alt="" class="img_top">
              </a>
              <div class="d_icon">
                <img src="{{ asset('front/img/electron.png') }}" alt="">
              </div>
              <div class="d_name">
                <span>Physique-chimie</span>
              </div>
            </div>
            <div class="bottom">
              <h5>Enjeux et bonne pratiques de la mediation <br>
              numerique pour le territoire </h5>
              <div class="info">
                <span><span><img src="{{ asset('front/img/delai.png') }}" alt=""></span> <span>5 heures</span> <br>
                <span> <img src="{{ asset('front/img/niveau1.png') }}" alt=""> </span> <span>Tle C</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 " style="margin-bottom: 24px;">
          <div class="bloc">
            <div class="top">
              <a href="presentation.php">
                 <img src="{{ asset('front/img/3.png') }}" alt="" class="img_top">
              </a>
              <div class="d_icon">
                <img src="{{ asset('front/img/genetics.png') }}" alt="">
              </div>
              <div class="d_name">
                <span>SVT</span>
              </div>
            </div>
            <div class="bottom">
              <h5>Enjeux et bonne pratiques de la mediation <br>
              numerique pour le territoire </h5>
              <div class="info">
                <span><span><img src="{{ asset('front/img/delai.png') }}" alt=""></span> <span>5 heures</span><br>
                <span> <img src="{{ asset('front/img/niveau1.png') }}" alt=""> </span> <span>Tle A</span>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-3" style="margin-bottom: 24px;">
          <div class="bloc">
            <div class="top">
              <a href="presentation.php">
                <img src="{{ asset('front/img/4.png') }}" alt="" class="img_top">
              </a>
              <div class="d_icon">
                <a href="presentation.php">
                  <img src="{{ asset('front/img/pi.png') }}" alt="">
                </a>
              </div>
              <div class="d_name">
                <span>Mathématiques</span>
              </div>
            </div>
            <div class="bottom">
              <h5>Enjeux et bonne pratiques de la mediation <br>
              numerique pour le territoire </h5>
              <div class="info">
                <span><span><img src="{{ asset('front/img/delai.png') }}" alt=""></span> <span>5 heures</span> <br>
                <span> <img src="{{ asset('front/img/niveau1.png') }}" alt=""> </span> <span>Tle D</span>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-3 " style="margin-bottom: 24px;">
          <div class="bloc">
            <div class="top">
              <a href="presentation.php">
                <img src="{{ asset('front/img/5.png') }}" alt="" class="img_top">
              </a>
              <div class="d_icon">
                <img src="{{ asset('front/img/electron.png') }}" alt="">
              </div>
              <div class="d_name">
                <span>Physique-chimie</span>
              </div>
            </div>
            <div class="bottom">
              <h5>Enjeux et bonne pratiques de la mediation <br>
              numerique pour le territoire </h5>
              <div class="info">
                <span><span><img src="{{ asset('front/img/delai.png') }}" alt=""></span> <span>5 heures</span><br>
                <span> <img src="{{ asset('front/img/niveau1.png') }}" alt=""> </span> <span>3e</span>
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
  <div class="commity">
    <img src="{{ asset('front/img/6.png') }}" alt="" class="img-fluid">
    <div class="content">
      <p>Passioneé par l'éducation, vous souhaitez participer à l'aventure de performance academy. <br>
      Vous nous intéressez! Inscrivez-vous!</p>
      <a href="cnx2.php">Rejoignez nos experts</a>
    </div>
  </div>
</div>
<!-- partner -->
<div class="container">
  <div class="partner">
      <h3>Ils nous font confiance</h3>
      <div class="partner_icon">
          <div class="logo_patner  owl-carousel">
            <div class="item"><img src="{{ asset('front/img/box.png') }}" alt=""></div>
            <div class="item"><img src="{{ asset('front/img/box.png') }}" alt=""></div>
            <div class="item"><img src="{{ asset('front/img/box.png') }}" alt=""></div>
            <div class="item"><img src="{{ asset('front/img/box.png') }}" alt=""></div>
            <div class="item"><img src="{{ asset('front/img/box.png') }}" alt=""></div>
            <div class="item"><img src="{{ asset('front/img/box.png') }}" alt=""></div>
            <div class="item"><img src="{{ asset('front/img/box.png') }}" alt=""></div>
          </div>
      </div>
  </div>
</div>
<!-- footer -->
@include('partials.front._footer')

<script src="{{ asset('front/dist/js/jquery.js') }}"></script>
<script src="{{ asset('front/dist/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/dist/js/script.js') }}"></script>
</body>
</html>
