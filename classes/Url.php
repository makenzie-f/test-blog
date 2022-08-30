<?php

/**
 * URL
 *
 * Response methods
 */
class Url {
  /**
  * Redirect to another URL on the same site
  *
  * @param string $path The path to redirect todo
  *
  * @return void
  */

  public static function redirect($path){

    if (isset($_SERVER['HTTPS']) && $SERVER['HTTPS'] != 'off'){
      $protocol = 'https';
    } else {
      $protocol = 'http';
    }
      //This is bc the files are in the ~francom1 directory. Otherwise file won't be found.
      header("Location: $protocol://" . $_SERVER['HTTP_HOST'] . "/~francom1/MA16" . $path);
      exit;

  }
}
