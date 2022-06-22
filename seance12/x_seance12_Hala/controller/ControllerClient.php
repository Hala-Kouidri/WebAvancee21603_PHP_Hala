<?php

//Faire le lien entre le modelClient/ModelCRUD eb utilisant la class requirePage. Cette classe est dans le fichier RiquirePage.php qui a été lié directement dans l'index.php
RequirePage::requireModel('CRUD');
RequirePage::requireModel('Client');

class ControllerClient{

    public function index(){

        $client = new ModelClient; //utilise la classe ModelClient qui se trouve dans 

        $select = $client->select(); //utilise la fonction selec() (de la page ModelCRUD) sur la classe ModelClient (de la page ModelClient)

        return $select;
    }
}




