<!-- 
    Le fichier index me dit c'est quoi le controller dans lequel je dois aller
      
-->

<?php

//on appel ce fichier dans index et donc il sera disponible partout dans le projet
require_once __DIR__.'/library/RequirePage.php';


//le nom qu'on donne c'Est le nom qu'on s'attend pour le controller
$url = isset($_SERVER['PATH_INFO']) ? explode ('/', ltrim($_SERVER['PATH_INFO'], '/')) : '/' ;


// print_r($url);

if($url=="/"){
    echo "page index";
} else {
    $requestUrl = $url[0];
    // echo $controllerPath;
    $requestUrl = ucfirst($requestUrl);
    $controllerPath = __DIR__.'/controller/Controller'.$requestUrl.'.php';

    if(file_exists($controllerPath)) {
        require_once $controllerPath;
        $controllerName = 'Controller'.$requestUrl;
        $controller = new $controllerName;
        echo $controller->index();
    }
    else {
        echo "Error 404";
    }
}


?>