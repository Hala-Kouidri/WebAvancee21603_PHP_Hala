<?php
RequirePage::requireModel('CRUD');
RequirePage::requireModel('Client');
<<<<<<< HEAD
=======
RequirePage::requireModel('Ville');
>>>>>>> 942c79bd85a0fcdd73b600f85482439cc339d086

class ControllerClient{

    public function index(){

<<<<<<< HEAD
      // $view = new view('client-index');
      // $view->output('title', 'Page Client');
      // $view->output('text', 'Lorem ABC, abc Lorem');

      return twig::render('client-index.php');
=======
      return Twig::render('client-index.php');

>>>>>>> 942c79bd85a0fcdd73b600f85482439cc339d086
    }

    public function list(){
        $client = new ModelClient;
<<<<<<< HEAD

        $select = $client->select();

    

      return Twig::render('client-list.php', ['clients' => $select]);

    }
=======
        $select = $client->select();
        return Twig::render('client-list.php', ['clients' => $select]);
    }

    public function create(){
      $villes = new ModelVille;
      $villes = $villes->select('nom');
      return Twig::render('client-insert.php', ['villes'=> $villes]);
    }
    public function store(){
      $client = new ModelClient;
      $insert = $client->insert($_POST);
      RequirePage::redirect('../client/list');
    }

    public function show($value){

      return $value;
    
    }

>>>>>>> 942c79bd85a0fcdd73b600f85482439cc339d086
}




