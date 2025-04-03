<?php
class Heaventree_Logger {
    public static function log($message, $level = 'info') {
        $timestamp = date('Y-m-d H:i:s');
        $log_entry = "[{$timestamp}] [{$level}] {$message}" . PHP_EOL;
        error_log($log_entry, 3, WP_CONTENT_DIR . '/heaventree-debug.log');
    }

    public static function error($message) {
        self::log($message, 'error');
    }

    public static function success($message) {
        self::log($message, 'success');
    }
}
