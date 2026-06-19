<?php
/**
 * This is needed for cookie based authentication to encrypt password in
 * cookie. Needs to be 32 chars long.
 */
$cfg['blowfish_secret'] = 'YcGH28i8oDhpbOCJAOq029YCans29XwQ'; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */

/**
 * Servers configuration
 */
$cfg['AllowArbitraryServer'] = false;

$i = 0;

/**
 * phpMyAdmin Database
 */
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
/* Server parameters */
$cfg['Servers'][$i]['host'] = 'phpmyadmin-db'; # CONFIG NEEDED: Your Cloud SQL Host IP
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;
$cfg['Servers'][$i]['ssl'] = false;

/**
 * Nmap Database
 */
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
/* Server parameters */
$cfg['Servers'][$i]['host'] = 'nmap-db'; # CONFIG NEEDED: Your Cloud SQL Host IP
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;
$cfg['Servers'][$i]['ssl'] = false;

/**
 * End of servers configuration
 */

$cfg['LoginCookieValidity'] = 36000; // 10h login validity

/**
 * Directories for saving/loading files from server
 */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';