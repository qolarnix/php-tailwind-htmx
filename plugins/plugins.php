<?php declare(strict_types=1);

/**
 * Excerpt
 */
function get_excerpt(string $input, int $length, string $decor = '...') {
    $short = substr($input, 0, $length);
    $short = trim($short);

    $excerpt = $short . $decor;
    return $excerpt;
}

/**
 * Template
 */
function get_template(string $template, array $data = array()): void {
    $template = basename($template);
    $location = '';

    $paths = array();
    $paths[] = getcwd() . '/pages/' . $template . '.php';
    $paths[] = getcwd() . '/components/' . $template . '.php';

    foreach($paths as $path) {
        if(is_file($path)) {
            $location = $path;
            break;
        }
    }

    if(!$location) {
        $err_msg = 'Unable to locate template file: ';
        trigger_error($err_msg . $template, E_USER_WARNING);
        return;
    }

    extract($data, EXTR_SKIP);
    ob_start();

    include($location);

    $output = ob_get_clean();
    echo $output;
}