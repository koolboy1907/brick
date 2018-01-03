<?php
/**
 * Created by PhpStorm.
 * User: nhat.nb
 * Author: NhatNB - 3SI Company
 */
function system_square_plugin_activation() {
        $plugins = array(
        array(
            'name' => 'Redux Framework',
            'slug' => 'redux-framework',
            'required' => true
        )
        );
        $configs = array(
            'menu' => 'system_square_plugin_install',
            'has_notice' => true,
            'dismissable' => false,
            'is_automatic' => true
        );
        tgmpa( $plugins, $configs );
 
}
add_action('tgmpa_register', 'system_square_plugin_activation');
?>