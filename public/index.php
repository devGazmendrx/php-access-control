<?php

require_once("../vendor/autoload.php");
include_once("../config.php");

use App\PHPAccessControl\PHPAccessControl;
use App\PHPSession\PHPSession;

$siteSession = PHPSession::getInstance();

/**
 * Example registering pages for Access Control - check config.php
 */
PHPAccessControl::add($phpAccessControlPages);

$siteSession->guestSession = "iExist"; // unset this Session value to prevent access.

/**
 * Verifying Access Control for welcome page
 */
if(!PHPAccessControl::verify("welcome")){
    die("If guestSession is not set then you shall not pass!");
}

echo "Access Control verified - you can now access this page.";