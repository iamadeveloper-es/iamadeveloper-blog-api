<?php
//Api Posts
function  posts_endpoint( $request_data ) {
    $args = array(
        'post_type' => 'post',
        'posts_per_page'=>-1, 
        'numberposts'=>-1
    );
    
    $posts = get_posts($args);
    // foreach ($posts as $key => $post) {
    //     $posts[$key]->acf = get_fields($post->ID);
    // }
    return  $posts;
}
    
add_action( 'rest_api_init', function () {
    register_rest_route( 'posts/v1', '/posts/', array(
        'methods' => 'GET',
        'callback' => 'posts_endpoint'
    ));
});