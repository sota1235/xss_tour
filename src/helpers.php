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

if (! function_exists('getUnsafeResponse')) {
    /**
     * Add unsefe HTTP header for XSS.
     *
     * @param \Psr\Http\Message\ResponseInterface  $response
     *
     * @return \Psr\Http\Message\ResponseInterface  $response
     */
    function getUnsafeResponse($response) {
        return $response->withHeader('x-xss-protection', '0');
    }
}
