<?php


if (!function_exists('checkImageExits')) {
    function checkImageExits($file) {
        if ($file && file_exists(public_path('storage/'.$file))) {
            return asset("storage/".$file); 
        } else {
            return asset('placeholder.jpg');
        }
    }
}