<?php
// ini_set ( "display_errors", true );
require_once (__DIR__ . "/Webdav_Client.class.php");
$host = "https://hostname/remote.php/webdav/";
$username = "username";
$password = "password";

$wc = new Webdav_Client ( $host, $username, $password );
$wc->debug = false;
print_r ( $wc->list_files ( "/Folder/Folder 2/" ) );
print_r ( $wc->list_files_recursive ( "/Folder/" ) );
print_r ( $wc->get_file ( "/Folder 2/Filename.doc" ) );
