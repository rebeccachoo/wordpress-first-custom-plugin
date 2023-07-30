<?php
/*
 * Plugin Name: Rebecca Plugin
 * Description: Rebecca's Test Plugin
 */
 
// add menu 
function pdev_create_menu(){
    // create custom top level menu
    add_menu_page('PDEV Setting Page', 'PDEV Settings', 'manage_options', 'pdev-options', 'pdev_settings_page', 'dashicons-smiley', 1);
}
add_action('admin_menu', 'pdev_create_menu');


function pdev_settings_page(){
    ?>
    <div class="wrap">
        <h2>This is my first plug in.</h2>
    </div>
    <?php
}
?>