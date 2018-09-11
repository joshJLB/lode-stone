<?php
/*
Widget Name: JLB Text Block
Description: This is for the Text Block module displayed on the Child Page Mockup.
Author:JLB (Josh Kincheloe)
*/
class JLB_Text_Block extends SiteOrigin_Widget {
  function get_template_name($instance) {
    return 'jlb-text-block-template';
  }
  function get_template_dir($instance) {
    return 'jlb-text-block-templates';
  }
  function initialize() {
    $this->register_frontend_styles(
      array(
        array( 'jlb-text-block-css', '/wp-content/plugins/extend-widgets-bundle/css/jlb-text-block.min.css', array() ),
      )
    );
    /*
    $this->register_frontend_scripts(
      array(
        array( 'jlb-text-block-js', '/wp-content/plugins/extend-widgets-bundle/js/jlb-text-block.js', array( 'jquery' ), '1.0')
      )
    );
    */
  }
  function __construct() {
    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'jlb-text-block',
      // The name of the widget for display purposes.
      __('JLB Text Block', 'jlb-text-block-text-domain'),
      // The widget_options array, which is passed through to WP_Widget.
      // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
      array(
        'description' => __('JLB Text Block', 'jlb-text-block-text-domain'),
      ),
      //The base_folder path string.
      plugin_dir_path(__FILE__)
    );
  }
  function get_widget_form() {
    // https://siteorigin.com/docs/widgets-bundle/form-building/form-fields/
    return array(
        // put all fields here
        'title' => array(
          'type' => 'text',
          'label' => __('title', 'widget-form-fields-text-domain')
        ),
        'main_content' => array(
          'type' => 'tinymce',
          'label' => __('Main Content', 'widget-form-fields-text-domain'),
          'default_editor' => 'tmce'
        ),
        'left_textarea' => array(
            'type' => 'textarea',
            'label' => __( 'Left Textarea', 'widget-form-fields-text-domain' ),
            'default' => 'Text Area',
            'rows' => 5
        ),
        'right_textarea' => array(
            'type' => 'textarea',
            'label' => __( 'Right Textarea', 'widget-form-fields-text-domain' ),
            'default' => 'Text Area',
            'rows' => 5
        ),
    );
  }
}
siteorigin_widget_register('jlb-text-block', __FILE__, 'JLB_Text_Block');