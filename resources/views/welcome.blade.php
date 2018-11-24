@extends('layouts.app')

@section('content')
      <main>
        <section class="camera_container">
          <div id="camera" class="camera_wrap">
            <div data-src=" images/page-1_slide01.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6">Con ayuda de la Inteligencia Artificial</div>
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
                    <div class="preffix_6 grid_6">Con la cual podemos hacer pronósticos más acertados de enfermedades respiratorias</div>
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
                <p>Diagnostic Expert es una plataforma web de pronóstico temprano de enfermedades respiratorias basado en un sistema difuso. </p><a href="{{ url('nosotros') }}"></a>
                {{-- Diagnostic Expert es una plataforma web de pronóstico temprano de enfermedades respiratorias basado en un sistema difuso que ofrece una base de datos completa y estructurada de síntomas y enfermedades asociadas a los mismos en un proceso de selección y clasificación eficiente. --}}
              </li>
              <li>
                <div class="fa-lightbulb-o"></div>
                <h3>Nuestro Sistema</h3>
                <p>La lógica difusa como herramienta de analisis de información entre lo verdadero y lo falso permite juzgar síntomas y generar un diagnóstico aproximado.</p><a href=" {{ url('algoritmo') }}"></a>
              </li>
              <li>
                <div class="fa-question-circle"></div>
               <i class="fal "></i>
                <h3>Ayuda</h3>
                <p>Accede a nuestro sistema de ayuda y aprende a usar nuestra herramienta de diagnóstico</p><a href="{{ url('ayuda') }}"></a>
              </li>
              <li>
                <i class="fas "></i>
                <div class="fa-phone-square"></div>
                <h3>Contacto</h3>
                <p>Si te queda alguna duda comunicate con nostros y con gusto atenderemos de manera oportuna todas tus dudas, solicitudes o sugerencias</p><a href="#"></a>
              </li>
            </ul>
          </div>
        </section>
        <section class="well ins1">

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