<?php
/*
Widget Name: JLB Team Members
Description: This is for the Team Members module displayed on the Child Page Mockup.
Author:JLB (Josh Kincheloe)
*/
class JLB_Team_Members extends SiteOrigin_Widget {
  function get_template_name($instance) {
    return 'jlb-team-members-template';
  }
  function get_template_dir($instance) {
    return 'jlb-team-members-templates';
  }
  function initialize() {
    $this->register_frontend_styles(
      array(
        array( 'jlb-team-members-css', '/wp-content/plugins/extend-widgets-bundle/css/jlb-team-members.min.css', array() ),
      )
    );
    /*
    $this->register_frontend_scripts(
      array(
        array( 'jlb-team-members-js', '/wp-content/plugins/extend-widgets-bundle/js/jlb-team-members.js', array( 'jquery' ), '1.0')
      )
    );
    */
  }
  function __construct() {
    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'jlb-team-members',
      // The name of the widget for display purposes.
      __('JLB Team Members', 'jlb-team-members-text-domain'),
      // The widget_options array, which is passed through to WP_Widget.
      // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
      array(
        'description' => __('JLB Team Members', 'jlb-team-members-text-domain'),
      ),
      //The base_folder path string.
      plugin_dir_path(__FILE__)
    );
  }
  function get_widget_form() {
    // https://siteorigin.com/docs/widgets-bundle/form-building/form-fields/
    return array(
      // put all fields here
        'section_title' => array(
          'type' => 'text',
          'label' => __('Section Title', 'widget-form-fields-text-domain')
        ),
        'section_description' => array(
            'type' => 'textarea',
            'label' => __( 'Section Description', 'widget-form-fields-text-domain' ),
            'default' => 'Text Area',
            'rows' => 5
        ),
        'team_repeater' => array(
            'type' => 'repeater',
            'label' => __('Team Repeater', 'widget-form-fields-text-domain'),
            'item_name' => __('', 'widget-form-fields-text-domain'),
            'fields' => array(
                'image' => array(
                  'type' => 'media',
                  'label' => __('Choose an Image', 'widget-form-fields-text-domain'),
                  'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
                  'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
                  'library' => 'image',
                ),
                'employee_description' => array(
                    'type' => 'textarea',
                    'label' => __( 'Employee Description', 'widget-form-fields-text-domain' ),
                    'default' => 'Text Area',
                    'rows' => 6
                ),
                'title' => array(
                  'type' => 'text',
                  'label' => __('Title', 'widget-form-fields-text-domain')
                ),
                'position' => array(
                  'type' => 'text',
                  'label' => __('Position', 'widget-form-fields-text-domain')
                ),
                'link_text' => array(
                  'type' => 'text',
                  'label' => __('Link Text', 'widget-form-fields-text-domain')
                ),
                'link' => array(
                    'type' => 'text',
                    'label' => __( 'Link', 'widget-form-fields-text-domain' )
                ),
            )
        ),
    );
  }
}
siteorigin_widget_register('jlb-team-members', __FILE__, 'JLB_Team_Members');