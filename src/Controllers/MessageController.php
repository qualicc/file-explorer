<?php
namespace Qualicc\FileExplorer\Controllers;

class MessageController 
{
    public static function create(String $message) 
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['error_message'] = $message;

        header("Location: ./");
    }
}
