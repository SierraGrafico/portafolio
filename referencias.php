<?php include('header.php'); ?>
<body class="referencias">
  <?php include('menu.php'); ?>
  <?php include('redes.php'); ?>
  <main>
    <h1 class="seo">Johnny Enrique Sierra Guerrero, Diseñador Web, Desarrollador Front , Bogotá</h1>
    <section class="cabecera">
      <div class="cabecera__iconoCabecera">
        <i class="bi bi-chat-dots-fill"></i>
      </div>
      <h2 class="cabecera__titulo">Referencias</h2>
    </section>
    <section class="introPag">
      <div class="container">
        <h3 class="introPag__lema">No lo digo yo, lo dice el público.</h3>
        <p class="introPag__txt">Puedo decir muchas cosas sobre mi, pero mejor que me respalden los comentarios de
          amigos y compañeros con los quienes he tenido la oprtunidad de trabajar en equipo y conocer personalmente</p>
      </div>
    </section>
    <section class="content">
      <div class="container">
          <div class="grilla">
            <div class="grilla__referido a" type="button" data-toggle="modal" data-target="#exampleModal" onclick="referencia(this)">
              <img src="images/oscar.png"  class="thumReferencia">
              <div class="nombreReferido"> < Oscar <span>Arias</span> />
              <small>Ingeniero de Sistemas</small></div>
              <div class="referencia">"Tuve la suerte de compartir laboralmente con Johnny, una persona sumamente profesional, ética y aplicada en todos los aspectos, cualidades que se quedan cortas para tan grandiosa persona, el cual además de convertirse en un buen compañero de trabajo, se convirtió en un gran amigo."</div>
              <div class="ver">Ver más</div>
              <div class="fondoReferencia"></div>
          </div>
            <div class="grilla__referido b" type="button" data-toggle="modal" data-target="#exampleModal" onclick="referencia(this)">
              <img src="images/dalma.png"  class="thumReferencia">
              <div class="nombreReferido">< Dalma <span>Prieto</span> />
                <small>Diseñadora UX/UI</small></div>
              <div class="referencia">El tiempo que trabajé con Johnny fue un periodo fructífero y enriquecedor, ya que aprendí bastante con el y su amplia experiencia en diseño, además es una persona con altos valores morales y que brinda además de apoyo profesional una buena amistad."</div>
              <div class="ver">Ver más</div>
              <div class="fondoReferencia"></div>
          </div>
            <div class="grilla__referido c" type="button" data-toggle="modal" data-target="#exampleModal" onclick="referencia(this)">
              <img src="images/luisa.png"  class="thumReferencia">
              <div class="nombreReferido">< Luisa <span>Amaya</span> />
                <small>Periodista y Comunicadora Social</small></div>
              <div class="referencia">"Es un gran diseñador y creativo, tiene muy buenas ideas y conceptualiza cualquier comunicación, le gusta innovar en el área digital y es bastante proactivo en su trabajo, ha sido una ficha fundamental para el departamento. Además y muy importante, es un excelente compañero"</div>
              <div class="ver">Ver más</div>
              <div class="fondoReferencia"></div>
          </div>
            <div class="grilla__referido d" type="button" data-toggle="modal" data-target="#exampleModal" onclick="referencia(this)">
              <img src="images/nelson.png"  class="thumReferencia">
              <div class="nombreReferido">< Nelson <span>Díaz</span> />
                <small>Desarrollador Multimedia</small></div>
              <div class="referencia">"He tenido el privilegio de compartir con él muchos años como compañero y amigo. Johnny es una persona comprometida, responsable, honesto, respetuoso, amable, creativo y proactivo. No dudaría ni un segundo en recomendarlo ¡una gran persona!"</div>
              <div class="ver">Ver más</div>
              <div class="fondoReferencia"></div>
          </div>
          </div>
      </div>
    </section>
    <section class="linkRef">
      <a href="https://www.linkedin.com/in/sierra-grafico/" target="_blank"><span><i class="bi bi-info-circle-fill"></i></span> Mira más recomendaciones haciendo clic acá.</a>
    </section>
  </main>

  <!-- MODAL REFERENCIAS -->
  <div class="modal fade modalReferencias" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="" id="fotoReferencia" class="img-fluid">
          <h4 id="nameReferenciaModal"></h4>
          <p id="txtReferenciaModal"></p>
        </div>
        
      </div>
    </div>
  </div>
  
  <?php include('footer.php'); ?>