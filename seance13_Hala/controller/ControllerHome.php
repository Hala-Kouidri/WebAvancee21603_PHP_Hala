<?php

class ControllerHome{

    public function index(){
        // $view = new view('home-index');
        return Twig::render('home-index.php', ['' => '']);
    }

    public function error(){
        $view = new view('error');
    }
}