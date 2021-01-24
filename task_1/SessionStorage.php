<?php

class SessionStorage implements Storage
{
    var $name;

    function __construct()
    {
        session_start();
    }

    function save($figures)
    {
        $_SESSION[$name] = $figures;   // TODO: Implement save() method.
    }

    function load()
    {
        return $_SESSION[$name];// TODO: Implement load() method.
    }
}
