<?php

return [

    "timezones" => DateTimeZone::listIdentifiers(),

    "placeholder_image" => "placeholder.jpg",


    "role" => [
        "default" => "editor",
        "admin" => "admin",
        "admin_id" => "2"
    ],

    "usersModel" => [
        "status" => ["0" => "Inactive", "1" => "Active"],
        "verified" => ["0" => "Not Verified", "1" => "Verified"],
        "default_user_image" => "default-user.png"
    ],

];
