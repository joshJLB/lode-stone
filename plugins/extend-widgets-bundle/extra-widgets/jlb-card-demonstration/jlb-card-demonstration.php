<?php
/*
Widget Name: JLB Card Demonstration
Description: This is for the Card Demonstration module displayed on the Child Page Mockup.
Author:JLB (Josh Kincheloe)
*/
class JLB_Card_Demonstration extends SiteOrigin_Widget {
  function get_template_name($instance) {
    return 'jlb-card-demonstration-template';
  }
  function get_template_dir($instance) {
    return 'jlb-card-demonstration-templates';
  }
  function initialize() {
    $this->register_frontend_styles(
      array(
        array( 'jlb-card-demonstration-css', '/wp-content/plugins/extend-widgets-bundle/css/jlb-card-demonstration.min.css', array() ),
      )
    );
    /*
    $this->register_frontend_scripts(
      array(
        array( 'jlb-card-demonstration-js', '/wp-content/plugins/extend-widgets-bundle/js/jlb-card-demonstration.js', array( 'jquery' ), '1.0')
      )
    );
    */
  }
  function __construct() {
    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'jlb-card-demonstration',
      // The name of the widget for display purposes.
      __('JLB Card Demonstration', 'jlb-card-demonstration-text-domain'),
      // The widget_options array, which is passed through to WP_Widget.
      // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
      array(
        'description' => __('JLB Card Demonstration', 'jlb-card-demonstration-text-domain'),
      ),
      //The base_folder path string.
      plugin_dir_path(__FILE__)
    );
  }
  function get_widget_form() {
    // https://siteorigin.com/docs/widgets-bundle/form-building/form-fields/
    return array(
      // put all fields here
        'image' => array(
          'type' => 'media',
          'label' => __('Choose an Image', 'widget-form-fields-text-domain'),
          'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
          'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
          'library' => 'image',
        ),
        'title' => array(
          'type' => 'text',
          'label' => __('Title', 'widget-form-fields-text-domain')
        ),
        'card_repeater' => array(
            'type' => 'repeater',
            'label' => __('Card Repeater', 'widget-form-fields-text-domain'),
            'item_name' => __('', 'widget-form-fields-text-domain'),
            'fields' => array(
                'card_image' => array(
                  'type' => 'media',
                  'label' => __('Choose an Image', 'widget-form-fields-text-domain'),
                  'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
                  'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
                  'library' => 'image',
                ),
                'card_title' => array(
                  'type' => 'text',
                  'label' => __('Card Title', 'widget-form-fields-text-domain')
                ),
                'card_body' => array(
                    'type' => 'textarea',
                    'label' => __( 'Card Body', 'widget-form-fields-text-domain' ),
                    'default' => 'Text Area',
                    'rows' => 3
                ),
                'card_link_text' => array(
                  'type' => 'text',
                  'label' => __('Link Text', 'widget-form-fields-text-domain')
                ),
                'card_link' => array(
                    'type' => 'text',
                    'label' => __( 'Link', 'widget-form-fields-text-domain' )
                ),
            )
        ),
    );
  }
}
siteorigin_widget_register('jlb-card-demonstration', __FILE__, 'JLB_Card_Demonstration');