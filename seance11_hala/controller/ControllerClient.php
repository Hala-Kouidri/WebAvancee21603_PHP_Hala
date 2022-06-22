<!-- 
    précisions prof en class : 

    - On instancie le model
    - JE cree un parent c'Est le CRUD - il va faire le insert etc pour moi,
    - CRUD est un abstract class qu'on ne peut utiliser tout seul
    - Donc on cree des enfants pour que le CRUD puisse être executé dedans la class enfant

 -->



<?php

RequirePage::requireModel('Client');


class ControllerClient{

    public function index(){
        return 'Yolo Halo';
    }

}






?>