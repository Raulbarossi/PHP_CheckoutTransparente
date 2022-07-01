<?php
namespace App\artani\config;

// Working basics
const NAME_PATH = '';
const ADICIONAL_DIRECTORY = '';
const ARTANI_DIR = "../";
const REPOSITORIES_DIR = ARTANI_DIR.'Repositories'.DIRECTORY_SEPARATOR;
const ARTANI_HTML_DIR = ARTANI_DIR.'HTML/';
const ARTANI_COMPONENTS_DIR = VIEWS_DIR.'components'.DIRECTORY_SEPARATOR;

const ARTANI_INIT = REPOSITORIES_DIR.'Init.php';

// if not in use = 0
const CSS_FRAMEWORK_LINK = '<link href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">'; // BootStrap
/* materialize exemple
<link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
*/

// if not in use = 0, use just the name with out extension, it'll look for your file in /puvlic/css/
const CSS_FRAMEWORK_FILE = 0;

// if not in use = 0
const JS_FRAMEWORK_LINK = '<script src="
https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>'; // BootStrap
/* materialize exemple
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
*/

// if not in use = 0
// Use just the name with out extension, it'll look for your file.js in /puvlic/js/
const JS_FRAMEWORK_FILE = 0;