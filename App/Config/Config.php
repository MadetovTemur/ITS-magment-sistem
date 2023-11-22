<?php 



namespace App\Config;


class Config 
{
  public function get(string $key, $defoult = null) :mixed
  {
    [$file, $key] = explode('.', $key);

    $filePath = APP_PATH . "/config/". $file .".php";

    if(! file_exists($filePath)) {
      return $defoult;
    }


    $config = require_once $filePath;
    
    return $config[$key] ?? $defoult;
  }
}