<?php

class RequirePage{
    static function requireModel($page){
        return require_once 'model/Model'.$page.'.php';
    }
<<<<<<< HEAD
=======

    static function redirect($url){
        header("location: $url");
    }
>>>>>>> 942c79bd85a0fcdd73b600f85482439cc339d086
}