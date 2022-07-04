<?php
RequirePage::requireModel('CRUD');
RequirePage::requireModel('Client');

class ControllerClient{

    public function index(){

      // $view = new view('client-index');
      // $view->output('title', 'Page Client');
      // $view->output('text', 'Lorem ABC, abc Lorem');

      return twig::render('client-index.php');
    }

    public function list(){
        $client = new ModelClient;

        $select = $client->select();

    

      return Twig::render('client-list.php', ['clients' => $select]);

    }
}




