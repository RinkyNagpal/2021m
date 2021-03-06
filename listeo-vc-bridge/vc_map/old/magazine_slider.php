<?php
/*
 * Recent project for Visual Composer
 *
 */
add_action( 'init', 'magazine_slider_integrateWithVC' );
function magazine_slider_integrateWithVC() {
  vc_map( array(
    "name" => __("Magazine Slider", 'sphene'),
    "base" => "magazine-slider",
    'icon' => 'sphene_icon',
    'description' => __( 'Carousel with posts ', 'sphene' ),
    "category" => __('Sphene',"sphene"),
    "params" => array(
         array(
        'type' => 'dropdown',
        'heading' => __( 'Order by', 'sphene' ),
        'param_name' => 'orderby',
        'value' => array(
          __( 'Date', 'sphene' ) => 'date',
          __( 'ID', 'sphene' ) => 'ID',
          __( 'Author', 'sphene' ) => 'author',
          __( 'Title', 'sphene' ) => 'title',
          __( 'Modified', 'sphene' ) => 'modified',
          __( 'Random', 'sphene' ) => 'rand',
          __( 'Comment count', 'sphene' ) => 'comment_count',
          __( 'Menu order', 'sphene' ) => 'menu_order'
          ),
        'save_always' => true,
        ),
      array(
        'type' => 'dropdown',
        'heading' => __( 'Order', 'sphene' ),
        'param_name' => 'order',
        'value' => array(
          __( 'Descending', 'sphene' ) => 'DESC',
          __( 'Ascending', 'sphene' ) => 'ASC'
          ),
        'save_always' => true,
        ),
       array(
        'type' => 'custom_posts_list',
        'heading' => __( 'Posts to include', 'sphene' ),
        'param_name' => 'include_posts',
        'settings' => array(
          'post_type' => 'post',
          ),
        'description' => __( 'Select items, leave empty to use all.', 'sphene' )
        ),
      array(
        'type' => 'custom_posts_list',
        'heading' => __( 'Posts to exclude', 'sphene' ),
        'param_name' => 'exclude_posts',
        'settings' => array(
          'post_type' => 'post',
          ),
        'description' => __( 'Select items to exclude from list.', 'sphene' )
        ),

      array(
        'type' => 'custom_taxonomy_list',
        'heading' => __( 'Project categories', 'sphene' ),
        'param_name' => 'categories',
        'taxonomy' => 'category',
        'description' => __( 'Select categories from which posts items will be taken.', 'sphene' )
        ),
      array(
        'type' => 'dropdown',
        'heading' => __( 'Elements to show', 'sphene' ),
        'param_name' => 'limit',
        'value' => array(
          '4' => '4',
          '5' => '5',
          '6' => '6',
          '7' => '7',
          '8' => '8',
          '9' => '9',
          '10' => '10',
          '11' => '11',
          '12' => '12',
          ),
        'save_always' => true,
        'std' => '6'
        ),

   
       array(
          'type' => 'from_vs_indicatior',
          'heading' => esc_html__( 'From Visual Composer', 'sphene' ),
          'param_name' => 'from_vs',
          'value' => 'yes',
          'save_always' => true,
        )
      ),

));
}
?>