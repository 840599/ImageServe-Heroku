<?php

//   _
//  (_)    A self-hosted ShareX image serving solution.
//   _ _ __ ___   __ _  __ _  ___  ___  ___ _ ____   _____
//  | | '_ ` _ \ / _` |/ _` |/ _ \/ __|/ _ \ '__\ \ / / _ \
//  | | | | | | | (_| | (_| |  __/\__ \  __/ |   \ V /  __/
//  |_|_| |_| |_|\__,_|\__, |\___||___/\___|_|    \_/ \___|
//                      __/ |
//                     |___/   created by github.com/aerouk

/* More information on all these values can be found on the wiki page. */
/* https://github.com/aerouk/imageserve/wiki/Configuration */

define('RAW_IMAGE', true);
define('RAW_IMAGE_LINK', true);
define('IMAGE_EXTENSION', true);

define('TWITTER_CARDS', false);

// If you're using this, make sure to put a forward slash before.
// E.g. "/imageserve" not "imageserve"
define('IMAGESERVE_DIR', '/images');
define('TWITTER_HANDLE', '@aerouk_');

define('APP_NAME', 'h-image');
define('PASSKEY', getenv('copernicus'));
