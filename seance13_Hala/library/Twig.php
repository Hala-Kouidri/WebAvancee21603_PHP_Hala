<?php
class twig{
    static public function render($template, $data){
        $loader = new \Twig\Loader\FilesystemLoader('view');
        $twig = new \Twig\Environment($loader, array('auto_reload' => true,'cache' => false));
        echo $twig->render($template, $data);

    }
}