<?php
    /**
     * Devuelve los post del tipo y cantidad requeridos
     */
    function getPosts($posts_per_page, $type){
        // query ultimo trabajo
        $args = array(
            'post_type'=> $type,
            'posts_per_page' => $posts_per_page,
            'order'=>'DESC',
            'orderby'=> 'date'
        );
        $posts = new WP_Query($args);
        return $posts;
    }
?>