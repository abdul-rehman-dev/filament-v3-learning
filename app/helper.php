<?php


if (!function_exists('checkImageExits')) {
    function checkImageExits($file, $module = "")
    {

        if ($file == "" && $module == "user") {
            return asset(config('constant.usersModel.default_user_image'));
        }

        if ($file && file_exists(public_path('storage/' . $file))) {
            return asset("storage/" . $file);
        } else {
            return asset(config('constant.placeholder_image'));
        }
    }
}
