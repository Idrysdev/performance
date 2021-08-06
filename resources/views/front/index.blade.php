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
                <div class="bloc" style="background-color: #660265;">
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
          <div class="row mb-5 mt-3">
            <div class="col-md-6">
              <div class="left">
                <h3> Les grands axes de notre formation avec performance academy </h3>
                <p> Performance academy forme dans les disciplines permettant au élèves et futur étudiants de mieux s'orienter</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="right">
                <div class="content">
                  <img src="img/thema.jpg" alt="" class='img-thema img-fluid'>
                  <img  src="img/play-them.png" alt="" class='icon-thema'>
                  <video id="myVideo" width="409" height="250"  controls >
                      <source src="videos/Puissance et énergie - Physique-Chimie - 3e - Les Bons Profs.mp4" type="video/mp4">
                  </video>
                </div>
            </div>
            </div>
            </div>
          </div>
          <div class="container matiere mt-4">
            <div class="row">
              <div class=" col-md-4 mt-4">
                <div class="matiere-content">
                  <div class="img">
                    <img src="{{ asset('front/img/pi.png') }}" alt="">
                  </div>
                    <h4> mathematiques	</h4>
                </div>
              </div>

              <div class="col-md-4 mt-4">
                <div class="matiere-content">
                  <div class="img">
                    <img src="{{ asset('front/img/electron.png') }}" alt="">
                  </div>
                  <h4>physique chimie	</h4>
                  </div>
                </div>
              <div class="col-md-4 mt-4">
                <div class="matiere-content">
                  <div class="img">
                    <img src="{{ asset('img/genetics.png') }}" alt="">
                  </div>
                  <h4>SVT</h4>
                </div>
              </div>
              <div class="col-md-4 mt-4">
                <div class="matiere-content">
                  <div class="img">
                    <img src="{{ asset('front/img/10.png') }}" alt="">
                  </div>
                  <h4>anglais</h4>
                </div>
              </div>
              <div class="col-md-4 mt-4">
                <div class="matiere-content">
                  <div class="img">
                    <img src="{{ asset('front/img/10.png') }}" alt="">
                  </div>
                  <h4>francais	</h4>
                </div>
              </div>
              <div class="col-md-4 mt-4">
                <div class="matiere-content">
                  <div class="img">
                    <img src="{{ asset('front/img/10.png') }}" alt="">
                  </div>
                  <h4>allemand</h4>
                </div>
              </div>
              <div class="col-md-4 mt-4">
                <div class="matiere-content">
                  <div class="img">
                    <img src="{{ asset('front/img/10.png') }}" alt="">
                  </div>
                  <h4>espagnol</h4>
                </div>
              </div>
              <div class="col-md-4 mt-4">
                <div class="matiere-content">
                  <div class="img">
                    <img src="{{ asset('front/img/10.png') }}" alt="">
                  </div>
                  <h4>histoire géographie		</h4>
                </div>
              </div>
              <div class="col-md-4 mt-4">
                <div class="matiere-content">
                  <div class="img">
                    <img src="{{ asset('front/img/10.png') }}" alt="">
                  </div>
                  <h4>éducation aux droits de .....				</h4>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
  </div>
  <!-- cours -->
<!-- cours -->

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

<!-- footer -->
@include('partials.front._footer')

<script src="{{ asset('front/dist/js/jquery.js') }}"></script>
<script src="{{ asset('front/dist/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/dist/js/script.js') }}"></script>
</body>
</html>
