<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the frameworks
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @link: https://codeigniter4.github.io/CodeIgniter4/
 */

defined('APP_NAME')        || define('APP_NAME', 'KICKOFF');
defined('CLIENT_TYPE_FREE')|| define('CLIENT_TYPE_FREE', 'freemium');
defined('CLIENT_TYPE_P1')  || define('CLIENT_TYPE_P1', 'premium_1');
defined('CLIENT_TYPE_P2')  || define('CLIENT_TYPE_P2', 'premium_2');

if (!function_exists('appGetClientType')) {
    function appGetClientType() {
        return array(
            CLIENT_TYPE_FREE => 'Free',
            CLIENT_TYPE_P1   => 'Paket 1',
            CLIENT_TYPE_P2   => 'Paket 2',
        );
    }
}