<?php

return [

    /*
     |--------------------------------------------------------------------------
     | Options for image transforming
     |--------------------------------------------------------------------------
     |
     | Bin path you can check easy with follow command in a shell:
     | which optipng
     |
     */
    'options' => [
        'ignore_errors' => false,

        # # Linux # #
        // 'pngquant_bin'     => env('PNGQUANT', '/usr/bin/pngquant'),
        // 'pngquant_options' => ['--force'],
        // 'gifsicle_bin'     => env('GIFSICLE', '/usr/bin/gifsicle'),
        // 'gifsicle_options' => ['-b', '-O5'],
        // 'jpegoptim_bin'     => env('JPEGOPTIM', '/usr/bin/jpegoptim'),
        # 'jpegoptim_options' => ['--strip-all'],

        # # Windows # #
        'pngquant_bin'     => env('PNGQUANT', base_path().'/public_html/plugins/pngquant.exe'),
        'pngquant_options' => ['--force'],
        'gifsicle_bin'     => env('GIFSICLE', base_path().'/public_html/plugins/gifsicle.exe'),
        'gifsicle_options' => ['-b', '-O5'],
        'jpegoptim_bin'     => env('JPEGOPTIM', base_path().'/public_html/plugins/jpegoptim.exe'),
        'jpegoptim_options' => ['--strip-all'],
        # #
    ],


    /*
     |--------------------------------------------------------------------------
     | Transformer for image
     |--------------------------------------------------------------------------
     |
     | You can choice which tranformer you will use
     |
     */
    'transform_handler' => [
        'png'  => 'pngquant',
        'jpg'  => 'jpegoptim',
        'jpeg' => 'jpegoptim',
        'gif'  => 'gifsicle',
    ],

    /*
     |--------------------------------------------------------------------------
     | Log file
     |--------------------------------------------------------------------------
     |
     | Only for image optimize errors
     |
     */
    'log_file' => storage_path().'/logs/image_optimize.log',

];
