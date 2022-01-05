<?php
//вся логика на -на бэкэнде
$images = $_GET['img'];
// echo $images;

include 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
    $loader = new Twig_Loader_Filesystem('templates');

    $twig = new Twig_Environment($loader);

    $tamplate = $twig -> loadTemplate('fullimage.tmpl');

    echo $tamplate -> render(array(
        'images' => $images,
        'homepage' => $_SERVER['HTTP_REFERER']
    ));
} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}

?>