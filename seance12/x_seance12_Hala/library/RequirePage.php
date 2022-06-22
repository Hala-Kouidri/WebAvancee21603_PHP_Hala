<?php
//cree une classe, dans laquelle il y a une fonction va envoyer chque fichier de dossier model à 
class RequirePage{
    static function requireModel($page){
        return require_once 'model/Model'.$page.'.php';
    }
}