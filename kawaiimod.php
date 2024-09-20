<?php
/**
 * @package KawaiiMod
 */
/*
Plugin Name: kawaii mod
Description: Theme avec la kawaiiness de Kurby ^^
Version: 5.3.3
Requires at least: 5.8
Requires PHP: 5.6.20
Author: Lewis 
License: GPLv2 or later
Text Domain: Lewis
*/

 register_activation_hook(__FILE__, function (){
    touch(__DIR__ .'/kawaiimod');
 });

 /*register_desactivation_hook(__FILE__, function (){
    unlink(__DIR__ .'/kawaiimod');
 });

 register_uninstall_hook(__FILE__, function (){
    unlink(__DIR__ .'/kawaiimod');
 });*/

function kawaii_mod_enqueue_styles() {
    wp_enqueue_style('kawaii-mod-style', plugins_url('style.css', __FILE__));
}

add_action('wp_enqueue_scripts', 'kawaii_mod_enqueue_styles');
?>