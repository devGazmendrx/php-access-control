<?php

namespace App\PHPAccessControlHelper;

class PHPAccessControlHelper{

    private static $pages = [];

    public function __construct(){}

    public static function add($pages){

        foreach($pages as $key => $value){
            //lets prevent duplicates
            if(!array_key_exists($key, self::$pages)){
                self::$pages[$key] = $value;
            }
        }

        return true;
    }

    public static function verify($page){
        GLOBAL $siteSession;

        $pageSessionRequirement = (isset(self::$pages[$page])) ? self::$pages[$page] : 0;
        if(!empty($siteSession->$pageSessionRequirement)){
            return true;
        }
        return false;
    }

    public static function get(){
        return self::$pages;
    }
}