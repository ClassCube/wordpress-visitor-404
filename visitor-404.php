<?php

/**
 * Plugin Name:       Visitor 404
 * Plugin URI:        https://github.com/classcube
 * Description:       Blocks all visitors to your WordPress site by sending a 404 header and blank page to users that are not logged in. Intended for use with headless WordPress installations so you can still preview, but visitors can't view the WordPress site. 
 * Version:           0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            ClassCube.com
 * Author URI:        https://classcube.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

add_action('template_redirect', function () {
    if (!is_user_logged_in()) {
        header('HTTP/1.1 404');
        die();
    }
}, 1);
