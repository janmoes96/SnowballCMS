<?php

class About
{
    public function __construct()
    {
        echo 'this is the about page!';
        $this->_other();
    }

    protected function _other()
    {
        echo ' this is the other function.';
    }
}