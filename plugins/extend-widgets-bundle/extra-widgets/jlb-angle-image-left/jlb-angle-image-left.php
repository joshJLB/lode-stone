<?php
/*
Widget Name: JLB Angle Image Left
Description: This is for the Angle Image Left module displayed on the Child Page Mockup.
Author:JLB (Josh Kincheloe)
*/
class JLB_Angle_Image_Left extends SiteOrigin_Widget {
  function get_template_name($instance) {
    return 'jlb-angle-image-left-template';
  }
  function get_template_dir($instance) {
    return 'jlb-angle-image-left-templates';
  }
  function initialize() {
    $this->register_frontend_styles(
      array(
        array( 'jlb-angle-image-left-css', '/wp-content/plugins/extend-widgets-bundle/css/jlb-angle-image-left.min.css', array() ),
      )
    );
    /*
    $this->register_frontend_scripts(
      array(
        array( 'jlb-angle-image-left-js', '/wp-content/plugins/extend-widgets-bundle/js/jlb-angle-image-left.js', array( 'jquery' ), '1.0')
      )
    );
    */
  }
  function __construct() {
    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'jlb-angle-image-left',
      // The name of the widget for display purposes.
      __('JLB Angle Image Left', 'jlb-angle-image-left-text-domain'),
      // The widget_options array, which is passed through to WP_Widget.
      // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
      array(
        'description' => __('JLB Angle Image Left', 'jlb-angle-image-left-text-domain'),
      ),
      //The base_folder path string.
      plugin_dir_path(__FILE__)
    );
  }
  function get_widget_form() {
    // https://siteorigin.com/docs/widgets-bundle/form-building/form-fields/
    return array(
      // put all fields here
        'left_image' => array(
          'type' => 'media',
          'label' => __('Choose an Image', 'widget-form-fields-text-domain'),
          'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
          'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
          'library' => 'image',
        ),
        'icon_image' => array(
          'type' => 'media',
          'label' => __('Choose an Image', 'widget-form-fields-text-domain'),
          'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
          'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
          'library' => 'image',
        ),
        'left_title' => array(
          'type' => 'text',
          'label' => __('Left Title', 'widget-form-fields-text-domain')
        ),
        'left_content' => array(
          'type' => 'tinymce',
          'label' => __('Left Content', 'widget-form-fields-text-domain'),
          'default_editor' => 'tmce'
        ),
        
        'left_link_text' => array(
          'type' => 'text',
          'label' => __('Left Link Text', 'widget-form-fields-text-domain')
        ),
        'left_link' => array(
            'type' => 'text',
            'label' => __( 'Link', 'widget-form-fields-text-domain' )
        ),
    );
  }
}
siteorigin_widget_register('jlb-angle-image-left', __FILE__, 'JLB_Angle_Image_Left');