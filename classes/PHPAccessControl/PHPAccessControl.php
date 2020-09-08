<?php

namespace App\PHPAccessControl;

use App\PHPAccessControlHelper\PHPAccessControlHelper;

class PHPAccessControl{

    public function __constructor(){}

    public static function get(){
        return PHPAccessControlHelper::get();
    }

    /**
     * Add pages to Access Control -
     */
    public static function add($pages = []){
        return PHPAccessControlHelper::add($pages);
    }

    public static function verify($page = null){
        return PHPAccessControlHelper::verify($page);
    }
}