<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  
  /* OptionTree is not loaded yet */
  if ( ! function_exists( 'ot_settings_id' ) )
    return false;
    
  /**
   * Get a copy of the saved settings array. 
   */
  //$saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'field_status',
        'title'       => __( 'Field Status', 'field-status' )
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'bear_branch_turf',
        'label'       => __( 'Bear Branch-turf', 'field-status' ),
        'desc'        => __( 'test', 'field-status' ),
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'field_status',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'bear_branch_grass',
        'label'       => __( 'Bear Branch-grass', 'field-status' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'field_status',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'alden_bridge',
        'label'       => __( 'Alden Bridge', 'field-status' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'field_status',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'carl_barton',
        'label'       => __( 'Carl Barton', 'field-status' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'field_status',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'shadowbend_park',
        'label'       => __( 'Shadowbend Park', 'field-status' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'field_status',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'wendtwoods_park',
        'label'       => __( 'Wendtwoods Park', 'field-status' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'field_status',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'lents_park',
        'label'       => __( 'Lents Park', 'field-status' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'field_status',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'northland_christian',
        'label'       => __( 'Northland Christian', 'field-status' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'field_status',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}