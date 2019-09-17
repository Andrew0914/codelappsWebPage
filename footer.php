<?php
    include_once TEMPLATEPATH . '/content/part-postsDeveloper.php'; 
    include_once TEMPLATEPATH . '/content/part-postsTrabajo.php'; 
?>
<!-- FOOTER PRINCIPAL DEL SITIO -->
        <footer class="page-footer teal z-depth-1 round1">
            <div class="row">
                <!-- PREVIEW ACERCA DE -->
                <div class="col l4 m12 s12">
                <h4 class="white-text text-darken-4">
                    Acerca de 
                </h4>
                    <?php
                        get_template_part('content/part', 'miniAcercaDe');
                    ?>
                    <div class="clear"></div>
                    <small class="roboto">
                        Some Icons made by Freepik from 
                        <a href="www.flaticon.com" class='indigo-text text-darken-4'>www.flaticon.com</a>
                    </small>
                </div>
                <!-- PREVIEW DEVELOPER -->
                <div class="col l4 m12 s12">
                    <h4 class="white-texttext-darken-4 noto">
                        Lo último developer
                    </h4>
                    <?php
                        postsDevelopers(1,[
                            'title_class' =>'noto',
                            'actions_class' => 'mt1',
                            'learnmore_class' => 'mt1 waves-effect waves-light btn light-blue darken-3',
                            'download_class' => 'mt1 waves-effect waves-light btn green darken-4',
                            'demo_class' => 'mt1 waves-effect waves-light btn yellow darken-4',
                            'has_short' => true,
                            'has_content' => false,
                            'short_class'=> 'roboto mt1',
                            'more'=>'true'
                        ]);
                    ?>
                </div>
                <!-- PREVIRE PORTAFOLIO -->
                <div class="col l4 m12 s12">
                    <h4 class="white-text text-darken-4 noto">
                            Lo último portafolio
                    </h4>
                    <?php
                        postsTrabajo(1,[
                            'title_class' =>'noto',
                            'actions_class' => 'mt1',
                            'learnmore_class' => 'mt1 waves-effect waves-light btn light-blue darken-3',
                            'download_class' => 'mt1 waves-effect waves-light btn green darken-4',
                            'enlace_class' => 'mt1 waves-effect waves-light btn yellow darken-4',
                            'has_short' => true,
                            'has_content' => false,
                            'short_class'=> 'roboto mt1',
                            'more'=>'true'
                        ]);
                        ?>
                </div>
            </div>
            <!-- COPYRIGHT Y ENLACES DE INTERES -->
            <div class="row footer-copyright">
                <div class="col s12">
                    © 2019 Copyright Andrew Alan Gonzalez - v1.1.5
                    <a class="white-text right" href="https://github.com/Andrew0914">
                        Visita mi GitHub <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
            <?php wp_footer(); ?>
            <div id="fb-root"></div>
        </footer>
        </section>
        <!-- Element Showed -->
    </body>
</html> 