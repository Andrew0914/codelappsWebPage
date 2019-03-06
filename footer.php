        

        <footer class="page-footer amber darken-4">
            <div class="row">
                <div class="col s4">
                    <h5 class="white-text">
                        Acerca de 
                    </h5>
                    <!-- excerp de acerca de-->
                    <aside class="grey-text text-lighten-4">
                        <?php 
							$acercade = new WP_Query('page_id=19');
							while($acercade->have_posts()): $acercade->the_post();
                                the_excerpt();
                        ?>
                        <br>
                        <a class="waves-effect waves-light btn purple darken-4" href="<?php the_permalink(); ?>">Saber más</a>
                        <?php
							endwhile; 
							wp_reset_postdata();
						?>
                    </aside>
                </div>
                <div class="col s4">
                    <h5 class="white-text">Lo último developer</h5>
                </div>
                <div class="col s4">
                    <h5 class="white-text">Mis últimos trabajos</h5>
                </div>
            </div>
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