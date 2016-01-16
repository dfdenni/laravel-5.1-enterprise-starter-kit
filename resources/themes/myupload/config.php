<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Theme name
    |--------------------------------------------------------------------------
    |
    | Use in assets publishing etc
    |
    */

    'name' => 'myupload',

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists
    |
    */

    'inherit' => null,

    'myapp' => [
            'app_name'       => env('APP_NAME', 'UPLoader'),
            'app_desc'       => env('APP_DESCRIPTION', 'Laravel 5.1 Simple Uploader'),
            'app_ver'        => env('APP_VERSION', '1.0.1'),
            'app_copyright'  => env('APP_COPYRIGHT', '&copy; 2016'),
            'app_company'    => env('APP_COMPANY', 'DFDenni'),
        ],
);