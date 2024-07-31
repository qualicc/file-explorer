<?php

namespace Qualicc\FileExplorer\Session;

class Session
{
    public static function set($nameOfValue, $value)
    {
        session_start();
        $_SESSION[$nameOfValue] = $value;
    }

    public static function get($nameOfValue)
    {
        session_start();
        return $_SESSION[$nameOfValue];
    }
}

