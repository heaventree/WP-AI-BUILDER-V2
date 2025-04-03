<?php
/**
 * Plugin Name: Heaventree AI Builder
 * Description: A smart AI-powered website builder for WordPress with Astra and page builder integration.
 * Version: 1.0.0
 * Author: Heaventree
 */

defined('ABSPATH') || exit;

require_once plugin_dir_path(__FILE__) . 'includes/class-heaventree-loader.php';

add_action('plugins_loaded', ['Heaventree_Loader', 'init']);
