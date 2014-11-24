<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15/11/14
 * Time: 00:35
 */

/**
 * Domains environments
 * IMPORTANT: This lines on the top of the file
 */
Configure::write('Environment.domains', array(
    'development' => '^(.*)localhost$',
    'fake' => '^dev.ornythorink.net$',
    'production' => '^(.+\.)?mysite\.com$'
));

/**
 * Development settings
 */
Environment::write(array(
    'debug' => 2,
    'Security.salt' => '6978hjkhKjkhskjhd698KGNSLdsDLsdKSAsdf8778sdfg',
    'Security.cipherSeed' => '57283694289374902834892039823756894'
), 'development');

/**
 * Production settings
 */
Environment::write(array(
    'debug' => 0
), 'production');