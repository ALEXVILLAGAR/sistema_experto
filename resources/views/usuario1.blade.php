@extends('user.usuario')
@extends('header')

@section('opcion')
<li class="nav-item"> <i ></i><a href="{{ url('pronostico') }}" class="text-white">pronostico</a>
@endsection

@section('content')
      <main>
        <div class=" offset-md-1 ">
  <iframe  src="https://www.youtube.com/embed/M_xZKImZ38o?rel=0&&volume=0" width="1124" height="400" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
        
        <section>
          <div class="container banner_wr">
            <ul class="banner">
              <li>
                
                <div class="fa-users"></div>
                <h3>Nosotros</h3>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p><a href="{{ url('nosotros') }}"></a>
              </li>
              <li>
                <div class="fa-lightbulb-o"></div>
                <h3>Nuestro <br> Sistema</h3>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p><a href=" {{ url('algoritmo') }}"></a>
              </li>
              <li>
                <div class="fa-question-circle"></div>
               <i class="fal "></i>
                <h3>Ayuda</h3>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p><a href="{{ url('ayuda') }}"></a>
              </li>
              <li>
                <i class="fas "></i>
                <div class="fa-phone-square"></div>
                <h3>ontacto</h3>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p><a href="#"></a>
              </li>
            </ul>
          </div>
        </section>
        <section class="well ins1">
          <div class="container hr">
            <ul class="row product-list">
              <li class="grid_6">
                <div class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-check"></div>
                    <i class="fas fa-chart-line"></i>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Estadisticas</a></h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                  </div>
                </div>
                <hr>
                <div data-wow-delay="0.2s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-ambulance"></div>
                    <i class="fas fa-hospital"></i>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Hospitales Asociados</a></h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                  </div>
                </div>
              </li>
              <li class="grid_6">
                <div data-wow-delay="0.3s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-user-md"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Nuestros medicos</a></h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                  </div>
                </div>
                <hr>
                <div data-wow-delay="0.4s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-thumbs-up"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">testimonios</a></h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
       
      </main>
      <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
      
    </div>

    <script src="js/script.js"></script>

 @endsection