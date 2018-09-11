<?php
/*
Widget Name: JLB Tab Widget Two
Description: This is for the Tab Widget Two module displayed on the Child Page Mockup.
Author:JLB (Josh Kincheloe)
*/
class JLB_Tab_Widget_Two extends SiteOrigin_Widget {
  function get_template_name($instance) {
    return 'jlb-tab-widget-two-template';
  }
  function get_template_dir($instance) {
    return 'jlb-tab-widget-two-templates';
  }
  function initialize() {
    $this->register_frontend_styles(
      array(
        array( 'jlb-tab-widget-two-css', '/wp-content/plugins/extend-widgets-bundle/css/jlb-tab-widget-two.min.css', array() ),
      )
    );
    /*
    $this->register_frontend_scripts(
      array(
        array( 'jlb-tab-widget-two-js', '/wp-content/plugins/extend-widgets-bundle/js/jlb-tab-widget-two.js', array( 'jquery' ), '1.0')
      )
    );
    */
  }
  function __construct() {
    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'jlb-tab-widget-two',
      // The name of the widget for display purposes.
      __('JLB Tab Widget Two', 'jlb-tab-widget-two-text-domain'),
      // The widget_options array, which is passed through to WP_Widget.
      // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
      array(
        'description' => __('JLB Tab Widget Two', 'jlb-tab-widget-two-text-domain'),
      ),
      //The base_folder path string.
      plugin_dir_path(__FILE__)
    );
  }
  function get_widget_form() {
    // https://siteorigin.com/docs/widgets-bundle/form-building/form-fields/
    return array(
        // put all fields here
        'tab_title' => array(
            'type' => 'text',
            'label' => __('Tab Title', 'widget-form-fields-text-domain')
        ),
        'tab_repeater' => array(
            'type' => 'repeater',
            'label' => __( 'Tabs' , 'widget-form-fields-text-domain' ),
            'item_name'  => __( 'Tab', 'siteorigin-widgets' ),
            'fields' => array(
                'tab_link' => array(
                  'type' => 'text',
                  'label' => __('Tab Link', 'widget-form-fields-text-domain')
                ),
                'tab_content' => array(
                    'type' => 'tinymce',
                    'label' => __( 'Content For Tab', 'widget-form-fields-text-domain' ),
                    'rows' => 10,
                    'default_editor' => 'html',
                    'button_filters' => array(
                        'mce_buttons' => array( $this, 'filter_mce_buttons' ),
                        'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
                        'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
                        'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
                        'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
                ),
            ),
        ),    
    ),
    );
  }
}
siteorigin_widget_register('jlb-tab-widget-two', __FILE__, 'JLB_Tab_Widget_Two');