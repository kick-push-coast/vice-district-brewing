<?php
    define('PERCH_LICENSE_KEY', 'P21701-QPN063-ALH268-VCM508-RYG012');

    define("PERCH_DB_USERNAME", 'root');
    define("PERCH_DB_PASSWORD", 'BigMT!6500');
    define("PERCH_DB_SERVER", "127.0.0.1");
    define("PERCH_DB_DATABASE", "vicedistrictbrewing");
    define("PERCH_DB_PREFIX", "perch2_");

    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'mktyler01@gmail.com');
    define('PERCH_EMAIL_FROM_NAME', 'Michael Tyler');
    define('PERCH_EMAIL_METHOD', 'smtp');
    define('PERCH_EMAIL_HOST', 'smtp.gmail.com');
    define('PERCH_EMAIL_AUTH', true);
    define('PERCH_EMAIL_SECURE', 'ssl');
    define('PERCH_EMAIL_PORT', 465);
    define('PERCH_EMAIL_USERNAME', 'mktyler01@gmail.com');
    define('PERCH_EMAIL_PASSWORD', 'Lee!1234');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');

    define('PERCH_HTML5', true);

?>
