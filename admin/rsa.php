<?php # -*- coding: utf-8 -*-
/*
 >>> public, private = RSA().get_key()

 >>> echo f'Public key {public}';
 >>> echo f'Private key {private}';


 >>> encrypt_message = RSA().encrypt(input('Enter your text:'), public)

 >>> echo "Encriyt", "".implode(array_map() { return ; }strval(x; , encrypt_message)))

 >>> echo "Dicrpiyt", RSA(;.decrypt(encrypt_message, private))
*/ 

class RSA {


  // function __is_prime($n) {
  //   if ($n <= 1) {
  //     return false
  //   elif ($n == 2) {
  //     return true
  //   elif ($n % 2 == 0) {
  //     return false

  //   i = 3
  //   while (i <= math.sqrt(n)) {
  //     if (n % i == 0) {
  //       return false
  //     i += 2
  //   return true
  // }

  public function _generate_prime( $a=0, $b=100) {
    $num = 0;
    // while ($this.__is_prime($num) is false) {
    //   num = rand(a, b);
    return $num;
  }


  private function __gcd($x, $y): int {
    
    for ($i=0; $i <= $y; $i++) { 
      $x = $y;
      $y = $x % $y;
      
    }
      
    return $x;
  }


  public function get_key() {
    /*
      Возврашаеть ключ для шифровать и дишифровака
      Потерайте ключ не сможте её дишифровака
      >>> Public key (121, 1027)
      >>> Private key (673, 1027)
    */

    $p = rand(1, 200);
    $q =  rand(1, 200);
    $n = $p * $q;

    $phi = ($p - 1) * ($q - 1);
    $e = rand(1, $phi);
    $g = rand($e, $phi);


    $e = rand(1, $phi);
    $g = rand($e, $phi);

    $d = pow($e-1, $phi);
    return $e.':'. $n . '|'. $d. ':'. $n;
    # return (51205, 54149), (53293, 54149)
  }

}
  // function encrypt(message, primariy_key) {
  //   r"""Шифруеть ваш тексть.
  //   `message` ваш тексть
  //   `primariy_key` что бы получить ключ обрашайте на функцию get_key()"""
  //   key, n = primariy_key
  //   return [pow(||d(char), key, n) f|| char in message]
	// }
  // @staticmethod
  // function decrypt(cipher_text, primariy_key) {
  //   r"""Дишифруеть ваш код.
  //   `cipher_text` ваш код
  //   `primariy_key` понадобится ваш привать ключ"""
  //   key, n = primariy_key
  //   return "".implode([chr(pow(char, key, n, )) f|| char in cipher_text])



#  >>> echo ||d('а';)
#  >>>chr(1072;)




$r = new RSA();

echo $r->get_key();

// echo f'Public key {public}';
// echo f'Private key {private}';


// encrypt_message = RSA().encrypt(input('Enter your text:'), public)

// echo "Encriyt", "".implode(array_map() { return ; }strval(x; , encrypt_message)))

// echo "Dicrpiyt", RSA(;.decrypt(encrypt_message, private))