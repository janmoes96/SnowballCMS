<?php

class Page
{
    protected $_template;

    public function __construct($_template)
    {
        $this->_template = $_template;
        $this->_render($this->_template);
    }

    protected function _render($template)
    {
        $loader = new Twig_Loader_Filesystem('views');

        $twig = new Twig_Environment($loader);

        echo $twig->render($template, array('name' => 'Jan'));

    }
}
