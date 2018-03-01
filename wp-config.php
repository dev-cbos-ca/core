<?php

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ );
    // The path where the WordPress core is. Required.
}

if ( file_exists( __DIR__ . '/../config/wp-config-site.php' ) ) {
	require_once( __DIR__ . '/../config/wp-config-site.php' );
}
else {
	echo 'Could not locate the "config" file. Please check the path.";
}

// Remaining moved with intent to make directory structure more intuitive and user friendly.
