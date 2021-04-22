<?php include('header.php'); ?>
<body class="contacto">
    <?php include('menu.php'); ?>
    <?php include('redes.php'); ?>
    <main>
        <h1 class="seo">Johnny Enrique Sierra Guerrero, Diseñador Web, Desarrollador Front , Bogotá</h1>
        <section class="cabecera">
            <div class="cabecera__iconoCabecera">
                <i class="bi bi-envelope-open-fill"></i>
            </div>
            <h2 class="cabecera__titulo">Contáctame</h2>
        </section>
        <section class="introPag">
            <div class="container">
                <h3 class="introPag__lema">¿Alguna duda o comentario?</h3>
                <p class="introPag__txt">Deja tus inquietudes y tus datos en el formulatio a continuación y en menos de
                    nada esater contactandome contigo.</p>
            </div>
        </section>

        <section class="contacto">
            <div class="container">

                <form id="sierraForm" method="post" action="mail.php">
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="Nombre">Nombres</label>
                            <input type="text" class="form-control" id="nombres" name="first_name" required>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="apellidos">Apellidos</label>
                            <input type=text" class="form-control" id="apellidos" name="last_name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-8">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group col-12 col-md-4">
                            <label for="celular">Celular</label>
                            <input type="number" class="form-control" id="celular" name="telefono" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="celular">Comentarios</label>
                            <textarea class="form-control" id="comentarios" rows="3" name="message"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check" required>
                                <label class="form-check-label" for="check">
                                    Acepto el tratamiento de mis datos personales
                                </label>
                            </div>
                    </div>
                    <input type="submit" class="btn enviar g-recaptcha" name="submit" value="Enviar" id="Enviar"  data-sitekey="6Lca-UgaAAAAAErrYcRwm8tPX6WT24NZk9GdkZyY"  data-callback='onSubmit' 
                    data-action='submit'>
                </form>
            </div>
        </section>
    </main>
    <?php include('footer.php'); ?>