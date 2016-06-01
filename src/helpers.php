<?php

/**
 * Helpers
 */

if (! function_exists('e')) {
    /**
     * Escape HTML string
     *
     * @param string  $str
     *
     * @return string
     */
    function e($str) {
        return htmlspecialchars($str, ENT_QUOTES);
    }
}
