<?php

namespace App\Http;

use App\Validator\Validator;


class Request
{
  private Validator $validator;

  public function __construct(
    public readonly array $get,
    public readonly array $post,
    public readonly array $server,
    public readonly array $files,
    public readonly array $cookies,
    public readonly array $globals
  )
  {
    #
  }

  public static function createFromGlobals():static
  {
    return new static($_GET, $_POST, $_SERVER, $_FILES, $_COOKIE, []);
  }

  public function uri():string
  {
    return $this->server['REQUEST_URI'];
  }

  public function method():string
  {
    return $this->server['REQUEST_METHOD'];
  }

  public function webUri()
  {
    return $this->server['REQUEST_SCHEME']."://".$this->server['HTTP_HOST'];;
  }

  public function input(string $key, $default = null): mixed
  {
    return $this->post[$key] ?? $this->get[$key] ?? $default;
  }

  public function setValidator(Validator $validator):void
  {
    $this->validator = $validator;
  }
  public function validator(array $rules):bool
  {
    $date = [];

    foreach($rules as $field => $rule) {
      $date[$field] = $this->input($field);
    }

    return $this->validator->validate($date, $rules);
  }

  public function errors():array
  {
    return $this->validator->errors();
  }
}
