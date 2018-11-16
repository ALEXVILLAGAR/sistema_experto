@extends('layouts.app')

@section('content')
      <main>
        <section class="camera_container">
          <div id="camera" class="camera_wrap">
            <div data-src=" images/page-1_slide01.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6">con ayuda de la IA.</div>
                  </div>
                </div>
              </div>
            </div>
            <div data-src="images/page-1_slide02.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6">Te traemos una nueva herramienta</div>
                  </div>
                </div>
              </div>
            </div>
            <div data-src="images/page-1_slide03.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6">con la cual podemos hacer pronosticos mas acertados de enfermedades respiratorias</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
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
                <h3>Contacto</h3>
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