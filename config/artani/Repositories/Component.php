<?php

namespace Artani\Repositories;
use const App\artani\config\ARTANI_COMPONENTS_DIR;

class Component {
/**@param $component name to be rendered 
  *Components searched on /views/components/ 
  *@param $style false by default, true looks for .css with componet name
  *@param $script false by default, true looks for .js with componet name
  *.css e .js will be searched in CSS_DIR and JS_DIR         */

  /**@param $page Layout type variable
   * @param $component name with out extension
   */
  public static function render(
    Layout $page,
    string $component,
    //array $class = [], 
    //bool $style = false, 
    //bool $script = false,
    array $data = [] ): void   {
      
      //if ($class){}

      if(($cssComponentDir= searcher(CSS_DIR, "$component.css"))){
        echo '<link rel="stylesheet" type="text/css" href="'.htmlNormalizer($cssComponentDir).'">'; }

      $ArtaniComponentDir = searcher(ARTANI_COMPONENTS_DIR, "$component.php");
      require $ArtaniComponentDir;

      if(($jsComponentDir=searcher(JS_DIR, "$component.js"))){ 
        $page->jsPush($jsComponentDir); }
        
      if($data){
        extract($data); }            
    }   
   
} ?>