<?php

/**
 * config for PHPAccessControl page restrictions
 * key is page name, value is the session name you want to access data for verification
 */
$phpAccessControlPages = [
    "welcome" => "guestSession",
    "about" => "guestSession",
    "dashboard" => "loggedIn",
    "admin" => "authorised"
];