<?php

namespace Artani\Repositories;

use const App\artani\config\{
  ARTANI_HTML_DIR, 
  CSS_FRAMEWORK_LINK, 
  CSS_FRAMEWORK_FILE,
  JS_FRAMEWORK_LINK, 
  JS_FRAMEWORK_FILE
};

class Layout {
  public ?array $jsComponents;
  
  public function __construct()
  {
     $this->jsComponents[0] = 0;
  }

  public static function config($config){

    require __DIR__."/".ARTANI_HTML_DIR.$config.'.php';  }

  /**@param @title Title HTML */
  public static function title(string $title){
    self::config('Head');
    echo "<title>$title</title>";   }

  /**@param $descriptions meta descriptions Array  */
  public static function descriptions(array $descriptions): void{
    foreach ($descriptions as $description){  
      echo "<meta name='description' content='$description'>";  
    } }

  /**@param $sass name with out extension, if applicable */
  public static function endHead(string $sass = null): void{
    if (CSS_FRAMEWORK_LINK == 0){
      // set reset and normalize on browser if theres no css framwork
      $reset = searcher(CSS_DIR, 'reset.css');
      echo '<link rel="stylesheet" href="'.$reset.'">';
      $normalize = searcher(CSS_DIR,'normalize.css');
      echo '<link rel="stylesheet" href="'.$normalize.'">';   }

    if (CSS_FRAMEWORK_LINK != 0){
      // Set css framework link
      echo CSS_FRAMEWORK_LINK;    }
    
    if (CSS_FRAMEWORK_FILE != 0){
      echo '<link href="'.searcher(CSS_DIR, CSS_FRAMEWORK_FILE).'.css" rel="stylesheet">';
    }

    if (isset($sass)){
      $sassCompiled = htmlNormalizer(searcher(CSS_DIR, "$sass.css"));
      echo '<link rel="stylesheet" href="'.$sassCompiled.'">';   }
    
    self::config('endHead');    }

  public function endBody(): void{
    if (JS_FRAMEWORK_LINK != 0){
      // Set js framework link
      echo JS_FRAMEWORK_LINK;    }
    
    if (JS_FRAMEWORK_FILE != 0){
      echo '<link href="'.searcher(JS_DIR, JS_FRAMEWORK_FILE).'.js" rel="stylesheet">';
    }

    if ($this->jsComponents){
      foreach($this->jsComponents as $script){
        echo '<script type="text/javascript" src="'.htmlNormalizer($script).'"></script>';   }}
    
    self::config('endBody');  }
  
  public function jsPush(string $jsComponentDir){
    if ($this->jsComponents[0] == 0){
      $this->jsComponents[0] = $jsComponentDir;
      return;   }
    array_push($this->jsComponents, $jsComponentDir);   }
} ?>