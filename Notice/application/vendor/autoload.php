<?php

spl_autoload_register( function ( $path ) {

    $path = str_replace( '\\', '/', $path );
    $paths = explode( '/', $path );
    // echo $path . "<br>";

    if ( preg_match( '/model/', strtolower( $paths[1] ) ) ) {
        $className = 'models';
    } else if ( preg_match( '/controller/', strtolower( $paths[1] ) ) ) {
        $className = 'controllers';
    } else $className = 'libs';

    $loadPath = $paths[0] . '/' . $className . '/' . $paths[2] . '.php';
    // echo 'autoload path : ' . $loadPath . "<br>";

    if ( !file_exists( $loadPath ) ) {
        echo '경로가 존재하지 않음';
        exit();
    }

    require_once $loadPath;

});

?>