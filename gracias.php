<?php include('header.php'); ?>

    <body class="gracias">
        <!-- Navigation -->
       <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div >
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" onclick="openNav()">
                    <div class="txt-menu"><span>Menu</span></div>
                    <div>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span></div>
                        </button>
                        <a class="navbar-brand" href="index.php"><img src="imgs/logo-b.svg" class="img-responsive logo" alt="Sierra_Gráfico"></a>
                    </div>
                    
                </div>
                <!-- /.container -->
            </nav>
            <?php include('menu.php'); ?>
            <!-- Put your page content here! -->
            <div id="menu"></div>
     
        <section id="contacto-pg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                    <div class="datos">
                        <h1 class="gracias">¡Gracias!</h1>
                        <h4 class="gracias">  <?php echo $first_name; ?>  </h4>
                        <h3 class="gracias">Tus datos han sido registrados con éxito, sigue disfrutando del contenido que hay para ti:</h3>
                     <div class="btns-gracias">
                            <div class="col-xs-6 col-md-6">
                            <center><a onClick="ga('send', 'event', 'bth home de Gracias')" href="index.php" ><button class="btn-inicio">Ir al Inicio</button></a></center></div>
                            <div class="col-xs-6 col-md-6"><center><a onClick="ga('send', 'event', 'bth blog de Gracias')" href="http://blog.sierragrafico.com/" ><button class="btn-blog">Ir al Blog</button></a></center></div>
                        </div>
                        
                            <div class="col-xs-12 col-md-12">
                            <center>   <div class="redes-gracias">
                            <h4 class="gracias">Sígueme en mis redes:</h4>
                                <p class="inline"><a onClick="ga('send', 'event', 'ir a Facebook')" href="https://www.facebook.com/SierraGrafico" target="new" class=""><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a> Mi perfil social </p>
                                <p class="inline"><a onClick="ga('send', 'event', 'ir a Linkedin')" href="https://www.linkedin.com/in/johnny-sierra-a881792b" target="new" class=""><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a> Mi perfil Profesional </p>
                                <p class="inline"><a onClick="ga('send', 'event', 'ir a Deviantart')" class=""><i class="fa fa-deviantart fa-2x" aria-hidden="true"></i></a> Mi perfil Artistico </p>
                            </div> </center>  
                       </div>
                    </div>
                    </div> 
 
                </div>
                
            </div>
        </section>

        <?php include('footer.php'); ?>