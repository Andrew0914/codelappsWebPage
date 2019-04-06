        <!-- FOOTER PRINCIPAL DEL SITIO -->
        <footer class="page-footer amber darken-4">
            <div class="row">
                <!-- PREVIEW ACERCA DE -->
                <div class="col l4 m12 s12">
                    <?php
                    get_template_part('content/part', 'miniAcercaDe');
                    ?>
                    <div class="clear"></div>
                    <small>
                        Some Icons made by Freepik from 
                        <u><a href="www.flaticon.com" class='indigo-text text-darken-5'>www.flaticon.com</a></u>
                    </small>
                </div>
                <!-- PREVIEW DEVELOPER -->
                <div class="col l4 m12 s12">
                    <?php
                    get_template_part('content/part', 'ultimoDeveloper');
                    ?>
                </div>
                <!-- PREVIRE PORTAFOLIO -->
                <div class="col l4 m12 s12">
                    <?php
                    get_template_part('content/part', 'ultimoTrabajo');
                    ?>
                </div>
            </div>
            <!-- COPYRIGHT Y ENLACES DE INTERES -->
            <div class="row footer-copyright">
                <div class="col s12">
                    © 2019 Copyright Andrew Alan Gonzalez
                    <a class="white-text right" href="https://github.com/Andrew0914">
                        Visita mi GitHub <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
            <?php wp_footer(); ?>
        </footer>


        </section>
        </body>

        </html> 