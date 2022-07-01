<?php

// Working basics
const HTML_LANGUAGE = 'pt-BR';
const VIEW_PORT = 'width=device-width,initial-scale=1.0';

define('BASE_DIR', "..");

const CONFIG_DIR_NAME = 'config';
const PUBLIC_DIR_NAME = 'public';
const CSS_DIR_NAME = 'css';
const JS_DIR_NAME = 'js';
const VIEWS_DIR_NAME = 'views';

const CONFIG_DIR = BASE_DIR.CONFIG_DIR_NAME.DIRECTORY_SEPARATOR;

// retirar para utilizar apenas searcher
define ('PUBLIC_DIR', searcher(BASE_DIR, PUBLIC_DIR_NAME).DIRECTORY_SEPARATOR);
define ('CSS_DIR', searcher(BASE_DIR, CSS_DIR_NAME).DIRECTORY_SEPARATOR);
define ('JS_DIR', searcher(PUBLIC_DIR, JS_DIR_NAME).DIRECTORY_SEPARATOR);
define ('VIEWS_DIR', searcher(BASE_DIR, VIEWS_DIR_NAME).DIRECTORY_SEPARATOR);
define ('VENDOR_DIR', searcher(BASE_DIR, 'vendor').DIRECTORY_SEPARATOR);
//  em algum momento

define('BASE_URL', rtrim($_SERVER['REQUEST_URI'], DIRECTORY_SEPARATOR.'index.php'));

define('HTML_SHORTCUT', htmlNormalizer(searcher(PUBLIC_DIR , 'Icon1.ico')));
                        //url string or htmlNormalizer(searcher(File dir, file.ext))
