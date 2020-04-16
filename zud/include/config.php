<?php
// start session.
if(!isset($_SESSION)) {
    session_start();
}

// Directory separator.
defined("DIR_SEP") || define("DIR_SEP", DIRECTORY_SEPARATOR);

// Check if it is defined do nothing, otherwise define the constant.
// Website domain name with https.
defined("WEBSITE_URL") || define("WEBSITE_URL", "https://".$_SERVER['SERVER_NAME']);

// Root path.
defined("ROOT_PATH") || define("ROOT_PATH", realpath(dirname(__FILE__).DIR_SEP."..".DIR_SEP));

// Classes folder.
defined("CLASSES_FOLDER") || define("CLASSES_FOLDER", "classes");

// Pages folder.
defined("PAGES_FOLDER") || define("PAGES_FOLDER", "pages");

// Modules folder.
defined("MODULES_FOLDER") || define("MODULES_FOLDER", "modules");

// Include folder.
defined("INCLUDE_FOLDER") || define("INCLUDE_FOLDER", "include");

// Templates folder.
defined("TEMPLATE_FOLDER") || define("TEMPLATE_FOLDER", "template");

// Bin folder.
defined("BIN_FOLDER") || define("BIN_FOLDER", "bin");

defined("NEWS_FOLDER") || define("NEWS_FOLDER", ROOT_PATH.DIR_SEP."img".DIR_SEP."news");

defined("PROJECT_FOLDER") || define("PROJECT_FOLDER", ROOT_PATH.DIR_SEP."img".DIR_SEP."project");

// Add all above directories to the include path.
set_include_path(
    implode(
        PATH_SEPARATOR, array(
            realpath(ROOT_PATH.DIR_SEP.CLASSES_FOLDER),
            realpath(ROOT_PATH.DIR_SEP.PAGES_FOLDER),
            realpath(ROOT_PATH.DIR_SEP.MODULES_FOLDER),
            realpath(ROOT_PATH.DIR_SEP.INCLUDE_FOLDER),
            realpath(ROOT_PATH.DIR_SEP.TEMPLATE_FOLDER),
            realpath(ROOT_PATH.DIR_SEP.BIN_FOLDER),
            get_include_path()
        )
    )
);