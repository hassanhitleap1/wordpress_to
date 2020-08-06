<?php
/**
 * Plugin Name
 *
 * @package           alicaddd-plugin
 * @author            hasn kiwan
 * @copyright         2019 hasan  or kiwan
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       hasan kiwan
 * Plugin URI:        https://example.com/plugin-name
 * Description:       Description of the plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            hasan
 * Author URI:        https://example.com
 * Text Domain:       plugin-slug
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

defined('ABSPATH') or die('error delcalruin');

class AlicadedddPlugin{
    function __construct()
    {
         add_action('init', array($this,'custum_post_type'));
    }

    function activate(){
        $this->custum_post_type();
        flush_rewrite_rules();
    }

    function desactivate(){
        flush_rewrite_rules();
    }

    function uninstall(){

    }

    function custum_post_type(){
        register_post_type('boots',['public'=>true,'label'=>'book']);
    }
}

if(class_exists('AlicadedddPlugin')){
    $alicadeddd= new AlicadedddPlugin();

}

register_activation_hook(__file__,array($alicadeddd,'activate'));
register_deactivation_hook(__file__,array($alicadeddd,'desactivate'));
