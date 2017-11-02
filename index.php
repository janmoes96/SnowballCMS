<?php
    require_once 'vendor/autoload.php';
    require_once 'src/route.php';
    require_once 'src/home.php';
    require_once 'src/about.php';
    require_once 'src/contact.php';

    $loader = new Twig_Loader_Filesystem('views');

    $twig = new Twig_Environment($loader);

    $route = new Route();

    $route->add('/', 'Home');
    $route->add('/about', 'About');
    $route->add('/contact', 'Contact');

    $route->submit();
//    echo $twig->render('index.twig', array('name' => 'Jan'));

