<?php

	require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
	add_action( 'tgmpa_register', 'themeton_register_required_plugins' );

	function themeton_register_required_plugins() {

		/**
		 * Array of plugin arrays. Required keys are name and slug.
		 * If the source is NOT from the .org repo, then source is also required.
		 */
		$plugins = array(
			array(
				'name'     				=> 'Envato Toolkit', // The plugin name
				'slug'     				=> 'envato-wordpress-toolkit', // The plugin slug (typically the folder name)
				'source'   				=> get_template_directory().'/framework/addons/plugins/envato-wordpress-toolkit.zip',
				'required' 				=> true,
				'version' 				=> '1.7.3',
				'force_activation' 		=> true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
			),
            array(
				'name'     				=> 'Layer Slider', // The plugin name
				'slug'     				=> 'LayerSlider', // The plugin slug (typically the folder name)
				'source'   				=> get_template_directory().'/framework/addons/plugins/layersliderwp.zip',
				'required' 				=> true,
				'version' 				=> '6.3.0',
				'force_activation' 		=> true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
			),
            array(
				'name'     				=> 'Revolution Slider', // The plugin name
				'slug'     				=> 'revslider', // The plugin slug (typically the folder name)
				'source'   				=> get_template_directory().'/framework/addons/plugins/revslider.zip',
				'required' 				=> true,
				'version' 				=> '5.4.1',
				'force_activation' 		=> true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
			)

		);


	$config = array(
        'domain'            => 'flatter',           // Text domain - likely want to be the same as your theme.
        'default_path'      => '',                           // Default absolute path to pre-packaged plugins
        'parent_menu_slug'  => 'themes.php',         // Default parent menu slug
        'parent_url_slug'   => 'themes.php',         // Default parent URL slug
        'menu'              => 'install-required-plugins',   // Menu slug
        'has_notices'       => true,                         // Show admin notices or not
        'is_automatic'      => false,            // Automatically activate plugins after installation or not
        'message'           => '',               // Message to output right before the plugins table
        'strings'           => array(
            'page_title'                                => __('Install Required Plugins', 'sevenstars'),
            'menu_title'                                => __('Install Plugins', 'sevenstars'),
            'installing'                                => __('Installing Plugin: %s', 'sevenstars'), // %1$s = plugin name
            'oops'                                      => __('Something went wrong with the plugin API.', 'sevenstars'),
            'notice_can_install_required'               => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'sevenstars' ), // %1$s = plugin name(s)
            'notice_can_install_recommended'            => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'sevenstars' ), // %1$s = plugin name(s)
            'notice_cannot_install'                     => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'sevenstars' ), // %1$s = plugin name(s)
            'notice_can_activate_required'              => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'sevenstars' ), // %1$s = plugin name(s)
            'notice_can_activate_recommended'           => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'sevenstars' ), // %1$s = plugin name(s)
            'notice_cannot_activate'                    => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'sevenstars' ), // %1$s = plugin name(s)
            'notice_ask_to_update'                      => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'sevenstars' ), // %1$s = plugin name(s)
            'notice_cannot_update'                      => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'sevenstars' ), // %1$s = plugin name(s)
            'install_link'                              => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'sevenstars' ),
            'activate_link'                             => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'sevenstars' ),
            'return'                                    => __('Return to Required Plugins Installer', 'sevenstars'),
            'plugin_activated'                          => __('Plugin activated successfully.', 'sevenstars'),
            'complete'                                  => __('All plugins installed and activated successfully. %s', 'sevenstars') // %1$s = dashboard link
        )
    );
 
    tgmpa( $plugins, $config );
 
}
       



?>