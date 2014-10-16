<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Upload dir
    |--------------------------------------------------------------------------
    |
    | The dir where to store the images (relative from public)
    |
    */

    'dir' => 'files',

    /*
    |--------------------------------------------------------------------------
    | Access filter
    |--------------------------------------------------------------------------
    |
    | Filter callback to check the files
    |
    */

    'access' => 'Barryvdh\Elfinder\Elfinder::checkAccess',

    /*
    |--------------------------------------------------------------------------
    | Roots
    |--------------------------------------------------------------------------
    |
    | By default, the roots file is LocalFileSystem, with the above public dir.
    | If you want custom options, you can set your own roots below.
    |
    */
//local dropboxtxml
    'roots' => null,
    /*
        array(
                array(
                    'driver' => 'LocalFileSystem', // driver for accessing file system (REQUIRED)
                    'path' => public_path() . DIRECTORY_SEPARATOR . $dir, // path to files (REQUIRED)
                    'URL' => asset($dir), // URL to files (REQUIRED)
                    'accessControl' => Config::get($this->package . '::access') // filter callback (OPTIONAL)
                ),
                array(
                    'driver' => 'Dropbox', // driver for accessing file system (REQUIRED)
                    'path' => '/',// public_path() . DIRECTORY_SEPARATOR . $dir, // path to files (REQUIRED)
                )
            );
    */

);
