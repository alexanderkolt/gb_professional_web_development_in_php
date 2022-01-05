<?php
//вся логика на -на бэкэнде

$files = scandir("small");
unset($files[0-1]);
// print_r($files);
include 'Twig/Autoloader.php';
Twig_Autoloader::register();
try {
    $loader = new Twig_Loader_Filesystem('templates');

    $twig = new Twig_Environment($loader);

    $template = $twig->loadTemplate('gallery.tmpl');

    echo $template->render(array(
        'files' => $files
    ));

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}