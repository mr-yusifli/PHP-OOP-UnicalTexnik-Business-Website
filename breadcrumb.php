<?php
include 'db.php';
$conn = db_connect();
function breadcrumb($home = 'Kategoriler', $separator = ' > ') {
    $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
    $base_url = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
    $breadcrumbs = array("<a href=\"$base_url\">$home</a>");
    $last = end(array_keys($path));
    foreach ($path as $x => $crumb) {
        if($x > 1 && $crumb != '') { // ignore first 2 parts of URL path
            $title = ucwords(str_replace(array('.php', '_'), array('', ' '), $crumb));
            if ($x != $last) {
                $breadcrumbs[] = "<a href=\"$base_url$crumb\">$title</a>";
            } else {
                $breadcrumbs[] = $title;
            }
        }
    }
    return implode($separator, $breadcrumbs);
}


?>