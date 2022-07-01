<?php

function htmlNormalizer($dir){
  $baseDirByHtmlRoot = str_replace(PUBLIC_DIR, '/', $dir);
  $trimFirstCaracter = substr($baseDirByHtmlRoot, 1);
  $normalizedDir = str_replace(DIRECTORY_SEPARATOR, '/', $trimFirstCaracter) ;
  return $normalizedDir;
}