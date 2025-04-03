<?php
class Heaventree_Loader {
    public static function init() {
        // Load core modules
        require_once plugin_dir_path(__FILE__) . 'class-heaventree-logger.php';
        do_action('heaventree_ai_builder_loaded');
    }
}
