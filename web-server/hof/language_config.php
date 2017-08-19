<?php
/*------------------------------------------*\
|  Language System V 1.0.1 By J0RG325        |
|   COCWeb 1.1.1                             |
|   www.ultrapowa.com                        |
\*------------------------------------------*/
session_start();

if(isSet($_GET['lang'])){
    $lang = $_GET['lang'];

    //registra sesion
    $_SESSION['lang'] = $lang;
    
    //define cookie
    @setcookie('lang', $lang, time() + (3600 * 24 * 30));
    
    //busca en variables cookie y session
}else if(isSet($_SESSION['lang'])){
    $lang = $_SESSION['lang'];
}else if(isSet($_COOKIE['lang'])){
    $lang = $_COOKIE['lang'];
}else{
    $lang = 'en';
}

switch ($lang) {
  case 'en': $lang_file = 'english.php'; break;
 
/*------------------------------------------*\
| Lenguages:                                 |
|                                            |
|  case 'es':                                |
|  $lang_file = 'spanishx.php';              | 
|  break;                                    |
\*------------------------------------------*/

  case 'en': $lang_file = 'english.php'; break;
  case 'es': $lang_file = 'spanish.php'; break;
  case 'chi': $lang_file = 'chinese.php'; break;
/*------------------------------------------*\
|  Language Default                          |
\*------------------------------------------*/
  default:
  $lang_file = 'english.php';

}
/*------------------------------------------*\
|  Carpeta Lenguages                         |
\*------------------------------------------*/
include_once 'languages/'.$lang_file;
?> 