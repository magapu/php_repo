<?php

class Controller {

    public static $itemlist;

    function __construct() {
        $this->itemlist = array();
    }

    public static function setItem($s) {
        $count = 0;
        foreach ($s as $Iteam) {
            Controller::$itemlist[$count] = $Iteam;
            $count++;
        }
    }

    public static function getItems() {
        return Controller::$itemlist;
    }

}
