<?php


class RequirePage{
    static function requireModel($page) {
        return require_once 'model/Model' . $page . '.php';
    }
}





?>