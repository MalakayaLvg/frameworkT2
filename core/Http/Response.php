<?php

namespace Core\Http;

use http\Encoding\Stream;

class Response
{
    public static function redirect(string $route = null)
    {
        if(!$route){
            header("Location: index.php");
            exit;
        } else{
            header("Location: $route");
            exit;
        }
    }
}
