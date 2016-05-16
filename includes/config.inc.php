<?php # Script 2.1 - config.inc.php

/* 
 *  File name: config.inc.php
 *  Created by: Larry E. Ullman
 *  Contact: Larry@LarryUllman.com, LarryUllman.com
 *  Last modified: June 5, 2012
 *  
 *  Configuration file does the following things:
 *  - Has site settings in one location.
 *  - Stores URLs and URIs as constants.
 *  - Sets how errors will be handled.
 */

# ******************** #
# ***** SETTINGS ***** #

// Errors are emailed here:
//$contact_email = 'address@example.com'; 

$GLOBALS['tips'] = NULL;
define('SYSTIME', date("Y-n-j",$time=time()));

// Determine whether we're working on a local server
// or on the real server:
$host = substr($_SERVER['HTTP_HOST'], 0, 5);
if (in_array($host, array('local', '127.0', '192.1'))) {
    $local = TRUE;
} else {
    $local = FALSE;
}

// Determine location of files and the URL of the site:
// Allow for development on different servers.
if ($local) {

    // Always debug when running locally:
    $debug = TRUE;
    
    // Define the constants:
    define('BASE_URI', '/demo/');
    define('BASE_URL', 'http://localhost:8088/demo/');
    define('DB', 'd:/WEB/BASE_Config/db.inc.php');
    
} else {

    define('BASE_URI', '/Mypage/');
    define('BASE_URL', 'http://mytritium.picp.net:8088/Mypage/');
    define('DB', 'd:/WEB/BASE_Config/db.inc.php');
    
}
