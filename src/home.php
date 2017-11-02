<?php

//require_once 'vendor/autoload.php';

class Home
{
    public function __construct()
    {
        echo 'this is the home page!';
        $this->_other();
    }

    protected function _other()
    {
        $loader = new Twig_Loader_Filesystem('views');

        $twig = new Twig_Environment($loader);

        return $twig->render('index.twig', array('name' => 'Jan'));

    }
}