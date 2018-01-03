<?php
/**
 * Created by PhpStorm.
 * User: nhat.nb
 * Author: NhatNB - 3SI Company
 */
    if ( ! class_exists('Sytem_Square_Theme_Options')) {
        class Sytem_Square_Theme_Options {
            public $args = array();
            public $sections = array();
            public $theme;
            public $ReduxFramework;
            public function __construct() {
                if (!class_exists('ReduxFramework')) {
                    return;
                }
                if ( true == Redux_Helpers::isTheme( __FILE__ ) ) {
                    $this->initSettings();
                } else {
                    add_action( 'plugins_loaded', array($this,'initSettings' ),10);
                }
            }
            public function initSettings() {
                $this->setArguments();
                $this->setHelpTabs();
                $this->setSections();
                if ( ! isset( $this->args['opt_name'])) {
                    return;
                }
                $this->ReduxFramework = new ReduxFramework($this->sections,$this->args);
            }
            public function setSections() {
                $this->sections[] = array(
                    'title'  => __('Common', 'ss' ),
                    'desc'   => __('Options for general options', 'ss' ),
                    'icon' => 'el el-smiley',
                    'fields' => array(
						array(
                            'id'       => 'logo',
                            'type'     => 'media',
                            'title'    => __('Change Logo','ss'),
                            'compiler' => 'true',
                            'desc'     => __('Dimension 300 x 55. Allow file type *jpg, *png, *gif', 'ss'),
                        ),
                        array(
                            'id'       => 'footer-text',
                            'type'     => 'text',
                            'title'    => __('Copyright', 'ss'),
                            'compiler' => 'true',
                        ),
                    )
                );
                $this->sections[] = array(
                    'title'  => __('Homepage', 'ss' ),
                    'desc'   => __('Options for Home page', 'ss' ),
                    'icon' => 'el el-home',
                    'fields' => array(
                        array(
                            'id' => 'sectionI-0-start',
                            'type' => 'section',
                            'title' => __('Upload Video','ss'),
                            'indent' => true
                        ),
                            array(
                                'id'       => 'video-file-ja',
                                'type'     => 'media',
                                'title'    => __('Japanese version','ss'),
                                'compiler' => 'true',
                                'desc'     => __('Allow file typle *mp4,*flv, *mkv, *avi', 'ss'),
                                'mode' => false,
                            ),
                            array(
                                'id'       => 'video-file-en',
                                'type'     => 'media',
                                'title'    => __('English version','ss'),
                                'compiler' => 'true',
                                'desc'     => __('Allow file typle *mp4,*flv, *mkv, *avi', 'ss'),
                                'mode' => false,
                            ),
                        array(
                            'id'     => 'sectionI-0-end',
                            'type'   => 'section',
                            'indent' => false,
                        ),
                        array(
                            'id'       => 'img-left',
                            'type'     => 'media',
                            'title'    => __('CMS banner','ss'),
                            'compiler' => 'true',
                            'desc'     => __('Dimension 190 x 70. Allow file type *jpg, *png, *gif', 'ss'),
                        ),
                        array(
                            'id'       => 'img-right',
                            'type'     => 'media',
                            'title'    => __('CMS banner','ss'),
                            'compiler' => 'true',
                            'desc'     => __('Dimension 190 x 70. Allow file type *jpg, *png, *gif', 'ss'),
                        ),
                        array(
                            'id' => 'sectionI-1-start',
                            'type' => 'section',
                            'title' => __('CMS banner','ss'),
                            'indent' => true
                        ),
                            array(
                                'id'       => 'img-below',
                                'type'     => 'media',
                                'title'    => __('Image','ss'),
                                'compiler' => 'true',
                                'desc'     => __('Dimension 370 x 100. Allow file type *jpg, *png, *gif', 'ss'),
                            ),
                            array(
                                'id'       => 'link-below',
                                'type'     => 'text',
                                'title'    => __('Link','ss'),
                                'compiler' => 'true',
                            ),
                        array(
                            'id'     => 'sectionI-1-end',
                            'type'   => 'section',
                            'indent' => false,
                        ),
                        array(
                            'id' => 'sectionII-start',
                            'type' => 'section',
                            'title' => __('Facebook','ss'),
                            'indent' => true
                        ),
                            array(
                                'id'       => 'fb-text',
                                'type'     => 'text',
                                'title'    => __('Text','ss' ),
                                'compiler' => 'true',
                            ),
                            array(
                                'id'       => 'fb-link',
                                'type'     => 'text',
                                'title'    => __('Link','ss' ),
                                'compiler' => 'true',
                            ),
                        array(
                            'id'     => 'sectionII-end',
                            'type'   => 'section',
                            'indent' => false,
                        ),
                        array(
                            'id' => 'sectionIII-start',
                            'type' => 'section',
                            'title' => __('Readmore Region','ss'),
                            'indent' => true
                        ),
                        array(
                            'id'       => 'news-text',
                            'type'     => 'text',
                            'title'    => __('Text','ss' ),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'news-link',
                            'type'     => 'text',
                            'title'    => __('Link','ss' ),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'     => 'sectionIII-end',
                            'type'   => 'section',
                            'indent' => false,
                        ),
                    )
                );
                $this->sections[] = array(
                    'title'  => __('Service', 'ss' ),
                    'desc'   => __('Options for Service page', 'ss' ),
                    'icon' => 'el el-list-alt',
                    'fields' => array(
                        array(
                            'id'       => 'service-title',
                            'type'     => 'text',
                            'title'    => __('Title','ss'),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'service-link',
                            'type'     => 'text',
                            'title'    => __('Link','ss' ),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'bg-service',
                            'type'     => 'media',
                            'title'    => __('Background Header Menu','ss'),
                            'compiler' => 'true',
                            'desc'     => __('Allow file type *jpg, *png, *gif', 'ss'),
                        ),
                        array(
                            'id'       => 'service-number',
                            'type'     => 'text',
                            'title'    => __('Page Number','ss'),
                            'desc'     => __('Display number of page in service page','ss'),
                            'validate' => 'numeric',
                            'msg'      => 'Value should be number and greater than 0',
                            'default'  => '7',
                            'compiler' => 'true',
                        ),
                        /*array(
                            'id'=>'service-area',
                            'type' => 'textarea',
                            'title' => __('Textarea Option - HTML Validated Custom', 'redux-framework-demo'),
                            'subtitle' => __('Custom HTML Allowed (wp_kses)', 'redux-framework-demo'),
                            'compiler' => 'true',
                            'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
                            'validate' => 'html',
                            'allowed_html' => array(
                                'a' => array(
                                    'href' => array(),
                                    'title' => array()
                                ),
                                'br' => array(),
                                'em' => array(),
                                'strong' => array()
                            ),
                        ),*/
                    ),
                );
                $this->sections[] = array(
                    'title'  => __('Company', 'ss' ),
                    'desc'   => __('Options for Company page', 'ss' ),
                    'icon' => 'el el-briefcase',
                    'fields' => array(
                        array(
                            'id'       => 'company-title',
                            'type'     => 'text',
                            'title'    => __('Title','ss'),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'company-link',
                            'type'     => 'text',
                            'title'    => __('Link','ss' ),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'bg-company',
                            'type'     => 'media',
                            'title'    => __('Background Header Menu','ss'),
                            'compiler' => 'true',
                            'desc'     => __('Allow file type *jpg, *png, *gif', 'ss'),
                        ),
                    )
                );
                $this->sections[] = array(
                    'title'  => __('Recruit', 'ss' ),
                    'desc'   => __('Options for Recruit page', 'ss' ),
                    'icon' => 'el el-group',
                    'fields' => array(
                        array(
                            'id'       => 'recruit-title',
                            'type'     => 'text',
                            'title'    => __('Title','ss'),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'recruit-link',
                            'type'     => 'text',
                            'title'    => __('Link','ss' ),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'bg-recruit',
                            'type'     => 'media',
                            'title'    => __('Background Header Menu','ss'),
                            'compiler' => 'true',
                            'desc'     => __('Allow file type *jpg, *png, *gif', 'ss'),
                        ),
                    )
                );
                $this->sections[] = array(
                    'title'  => __('Compliance', 'ss' ),
                    'desc'   => __('Options for Compliance page', 'ss' ),
                    'icon' => 'el el-asl',
                    'fields' => array(
                        array(
                            'id'       => 'compliance-title',
                            'type'     => 'text',
                            'title'    => __('Title','ss'),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'compliance-link',
                            'type'     => 'text',
                            'title'    => __('Link','ss' ),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'bg-compliance',
                            'type'     => 'media',
                            'title'    => __('Background Header Menu','ss'),
                            'compiler' => 'true',
                            'desc'     => __('Allow file type *jpg, *png, *gif', 'ss'),
                        ),
                    )
                );
                $this->sections[] = array(
                    'title'  => __('Sitemap', 'ss' ),
                    'desc'   => __('Options for Sitemap page', 'ss' ),
                    'icon' => 'el el-map-marker',
                    'fields' => array(
                        array(
                            'id'       => 'sitemap-title',
                            'type'     => 'text',
                            'title'    => __('Title','ss'),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'bg-sitemap',
                            'type'     => 'media',
                            'title'    => __('Background Header Menu','ss'),
                            'compiler' => 'true',
                            'desc'     => __('Allow file type *jpg, *png, *gif', 'ss'),
                        ),
                    )
                );
                $this->sections[] = array(
                    'title'  => __('Contact', 'ss' ),
                    'desc'   => __('Options for Contact page', 'ss' ),
                    'icon' => 'el el-phone',
                    'fields' => array(
                        array(
                            'id'       => 'before-title',
                            'type'     => 'text',
                            'title'    => __('Title','ss'),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'contact-title',
                            'type'     => 'text',
                            'title'    => __('Button text','ss'),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'contact-link',
                            'type'     => 'text',
                            'title'    => __('Link','ss' ),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'bg-contact',
                            'type'     => 'media',
                            'title'    => __('Background Header Menu','ss'),
                            'compiler' => 'true',
                            'desc'     => __('Allow file type *jpg, *png, *gif', 'ss'),
                        ),
                    )
                );
                $this->sections[] = array(
                    'title'  => __('Quality Policy', 'ss' ),
                    'desc'   => __('Options for Quality Policy page', 'ss' ),
                    'icon' => 'el el-gift',
                    'fields' => array(
                        array(
                            'id'       => 'quality-policy-title',
                            'type'     => 'text',
                            'title'    => __('Title','ss'),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'bg-quality-policy',
                            'type'     => 'media',
                            'title'    => __('Background Header Menu','ss'),
                            'compiler' => 'true',
                            'desc'     => __('Allow file type *jpg, *png, *gif', 'ss'),
                        ),
                    )
                );
                $this->sections[] = array(
                    'title'  => __('Shinsotsu', 'ss' ),
                    'desc'   => __('Options for Shinsotsu page', 'ss' ),
                    'icon' => 'el el-star',
                    'fields' => array(
                        array(
                            'id'       => 'shinsotsu-title',
                            'type'     => 'text',
                            'title'    => __('Title','ss'),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'shinsotsu-link',
                            'type'     => 'text',
                            'title'    => __('Link','ss' ),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'bg-shinsotsu',
                            'type'     => 'media',
                            'title'    => __('Background Header Menu','ss'),
                            'compiler' => 'true',
                            'desc'     => __('Allow file type *jpg, *png, *gif', 'ss'),
                        ),
                        array(
                            'id'       => 'shinsotsu-number',
                            'type'     => 'text',
                            'title'    => __('Post Number','ss'),
                            'desc'     => __('Display number of this post','ss'),
                            'validate' => 'numeric',
                            'msg'      => 'Value should be number and greater than 0',
                            'default'  => '7',
                            'compiler' => 'true',
                        ),
                    )
                );
                $this->sections[] = array(
                    'title'  => __('News', 'ss' ),
                    'desc'   => __('Options for News page', 'ss' ),
                    'icon' => 'el el-book',
                    'fields' => array(
                        array(
                            'id'       => 'news-title',
                            'type'     => 'text',
                            'title'    => __('Title','ss'),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'bg-news',
                            'type'     => 'media',
                            'title'    => __('Background Header Menu','ss'),
                            'compiler' => 'true',
                            'desc'     => __('Allow file type *jpg, *png, *gif', 'ss'),
                        ),
                        array(
                            'id'       => 'post-number',
                            'type'     => 'text',
                            'title'    => __('Post Number','ss'),
                            'desc'     => __('Display number of this post','ss'),
                            'validate' => 'numeric',
                            'msg'      => 'Value should be number and greater than 0',
                            'default'  => '5',
                            'compiler' => 'true',
                        ),
                    )
                );
                $this->sections[] = array(
                    'title'  => __('AccessMap', 'ss' ),
                    'desc'   => __('Options for AccessMap page', 'ss' ),
                    'icon' => 'el el-hand-right',
                    'fields' => array(
                        array(
                            'id'       => 'accessmap-title',
                            'type'     => 'text',
                            'title'    => __('Title','ss'),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'bg-accessmap',
                            'type'     => 'media',
                            'title'    => __('Background Header Menu','ss'),
                            'compiler' => 'true',
                            'desc'     => __('Allow file type *jpg, *png, *gif', 'ss'),
                        ),
                        array(
                            'id'       => 'google-api-key',
                            'type'     => 'text',
                            'title'    => __('Google API key','ss'),
                            'compiler' => 'true'
                        )
                    )
                );
                $this->sections[] = array(
                    'title'  => __('Map', 'ss' ),
                    'desc'   => __('Options for AccessMap page', 'ss' ),
                    'icon' => 'el el-hand-right',
                    'fields' => array(
                        array(
                            'id'       => 'bg-map',
                            'type'     => 'media',
                            'title'    => __('Background Header Menu','ss'),
                            'compiler' => 'true',
                            'desc'     => __('Allow file type *jpg, *png, *gif', 'ss'),
                        ),
                    )
                );
                $this->sections[] = array(
                    'title'  => __('Inquiry', 'ss' ),
                    'desc'   => __('Options for Inquiry page', 'ss' ),
                    'icon' => 'el el-hand-right',
                    'fields' => array(
                        array(
                            'id'       => 'inquiry-title',
                            'type'     => 'text',
                            'title'    => __('Title','ss'),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'bg-inquiry',
                            'type'     => 'media',
                            'title'    => __('Background Header Menu','ss'),
                            'compiler' => 'true',
                            'desc'     => __('Allow file type *jpg, *png, *gif', 'ss'),
                        ),
                        array(
                            'id'       => 'admin-email',
                            'type'     => 'text',
                            'title'    => __('Email','ss' ),
                            'validate' => 'email',
                            'msg'      => 'Email invalid!',
                            'default'  => 'admin123@gmail.com',
                            'compiler' => 'true',
                        ),
                    )
                );
                $this->sections[] = array(
                    'title'  => __('Inquiry Saiyo', 'ss' ),
                    'desc'   => __('Options for Inquiry Saiyo page', 'ss' ),
                    'icon' => 'el el-hand-right',
                    'fields' => array(
                        array(
                            'id'       => 'inquiry-saiyo-title',
                            'type'     => 'text',
                            'title'    => __('Title','ss'),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'bg-inquiry-saiyo',
                            'type'     => 'media',
                            'title'    => __('Background Header Menu','ss'),
                            'compiler' => 'true',
                            'desc'     => __('Allow file type *jpg, *png, *gif', 'ss'),
                        ),
                        array(
                            'id'       => 'inquiry-saiyo-email',
                            'type'     => 'text',
                            'title'    => __('Email','ss' ),
                            'validate' => 'email',
                            'msg'      => 'Email invalid!',
                            'default'  => '',
                            'compiler' => 'true',
                        ),
                    )
                );
                $this->sections[] = array(
                    'title'  => __('Shinsotsu Entry', 'ss' ),
                    'desc'   => __('Options for Shinsotsu Entry page', 'ss' ),
                    'icon' => 'el el-hand-right',
                    'fields' => array(
                        array(
                            'id'       => 'shinsotsu-entry-title',
                            'type'     => 'text',
                            'title'    => __('Title','ss'),
                            'compiler' => 'true',
                        ),
                        array(
                            'id'       => 'bg-shinsotsu-entry',
                            'type'     => 'media',
                            'title'    => __('Background Header Menu','ss'),
                            'compiler' => 'true',
                            'desc'     => __('Allow file type *jpg, *png, *gif', 'ss'),
                        ),
                        array(
                            'id'       => 'shinsotsu-entry-email',
                            'type'     => 'text',
                            'title'    => __('Email','ss' ),
                            'validate' => 'email',
                            'msg'      => 'Email invalid!',
                            'default'  => '',
                            'compiler' => 'true',
                        ),
                    )
                );
            }
            public function setHelpTabs() {
                // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-1',
                    'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );
                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-2',
                    'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );
                // Set the help sidebar
                $this->args['help_sidebar'] = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
            }
            /**

             * All the possible arguments for Redux.

             * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments

             * */
            public function setArguments() {
                $theme = wp_get_theme(); // For use with some settings. Not necessary.
                $this->args = array(
                    // TYPICAL -> Change these values as you need/desire
                    'opt_name'           => 'ss_options',
                    // This is where your data is stored in the database and also becomes your global variable name.
                    'display_name'       => $theme->get( 'Name' ),
                    // Name that appears at the top of your panel
                    'display_version'    => $theme->get( 'Version' ),
                    // Version that appears at the top of your panel
                    'menu_type'          => 'menu',
                    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                    'allow_sub_menu'     => true,
                    // Show the sections below the admin menu item or not
                    'menu_title'         => __( 'Page settings', 'redux-framework-demo' ),
                    'page_title'         => __( 'Page settings', 'redux-framework-demo' ),
                    // You will need to generate a Google API key to use this feature.
                    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                    'google_api_key'     => 'AIzaSyAs0iVWrG4E_1bG244-z4HRKJSkg7JVrVQ',
                    // Must be defined to add google fonts to the typography module
                    'async_typography'   => false,
                    // Use a asynchronous font on the front end or font string
                    'admin_bar'          => true,
                    // Show the panel pages on the admin bar
                    'global_variable'    => '',
                    // Set a different name for your global variable other than the opt_name
                    'dev_mode'           => false,
                    // Show the time the page took to load, etc
                    'customizer'         => true,
                    // Enable basic customizer support
                    // OPTIONAL -> Give you extra features
                    'page_priority'      => null,
                    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                    'page_parent'        => 'themes.php',
                    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
                    'page_permissions'   => 'manage_options',
                    // Permissions needed to access the options panel.
                    'menu_icon'          => '',
                    // Specify a custom URL to an icon
                    'last_tab'           => '',
                    // Force your panel to always open to a specific tab (by id)
                    'page_icon'          => 'icon-themes',
                    // Icon displayed in the admin panel next to your menu_title
                    'page_slug'          => 'ss_options',
                    // Page slug used to denote the panel
                    'save_defaults'      => true,
                    // On load save the defaults to DB before user clicks save or not
                    'default_show'       => false,
                    // If true, shows the default value next to each field that is not the default value.
                    'default_mark'       => '',
                    // What to print by the field's title if the value shown is default. Suggested: *
                    'show_import_export' => true,
                    // Shows the Import/Export panel when not used as a field.
                    // CAREFUL -> These options are for advanced use only
                    'transient_time'     => 60 * MINUTE_IN_SECONDS,
                    'output'             => true,
                    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                    'output_tag'         => true,
                    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.
                    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                    'database'           => '',
                    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
                    'system_info'        => false,
                    // REMOVE
                    // HINTS
                    'hints'              => array(
                        'icon'          => 'icon-question-sign',
                        'icon_position' => 'right',
                        'icon_color'    => 'lightgray',
                        'icon_size'     => 'normal',
                        'tip_style'     => array(
                            'color'   => 'light',
                            'shadow'  => true,
                            'rounded' => false,
                            'style'   => '',
                        ),
                        'tip_position'  => array(
                            'my' => 'top left',
                            'at' => 'bottom right',
                        ),
                        'tip_effect'    => array(
                            'show' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'mouseover',
                            ),

                            'hide' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'click mouseleave',
                            ),
                        ),
                    )
                );
                // Panel Intro text -> before the form
                if ( ! isset( $this->args['global_variable'] ) || $this->args['global_variable'] !== false ) {
                    if ( ! empty( $this->args['global_variable'] ) ) {
                        $v = $this->args['global_variable'];
                    } else {

                        $v = str_replace( '-', '_', $this->args['opt_name'] );

                    }
                    $this->args['intro_text'] = sprintf( __( '<p>Welcome to the region with the custom website, please consider carefully when process here!</p>', 'redux-framework-demo' ), $v );
                } else {

                    $this->args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
                }
            }
        }
        global $reduxConfig;
        $reduxConfig = new Sytem_Square_Theme_Options();
    }