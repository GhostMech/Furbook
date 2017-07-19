<?php

namespace App\Services;

class Curl
{
    public function __construct()
    {
        
    }
    
    public function post($status)
    {
        var_dump('Using Curl to post: ' . $status);
    }
}