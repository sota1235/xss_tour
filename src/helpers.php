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

if (! function_exists('array_get')) {
    /**
     * Get an item from an array.
     *
     * @param  array   $array
     * @param  string  $key
     * @param  mixed   $default
     *
     * @return mixed
     */
    function array_get($array, $key, $default = null) {
        if (is_null($key)) {
            return $array;
        }

        if (isset($array[$key])) {
            return $array[$key];
        }

        return $default;
    }
}
