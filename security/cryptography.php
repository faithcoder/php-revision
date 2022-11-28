<?php 

$realText = "Fifa world cup qatar";
$cipher = "aes-128-gcm";

if(in_array($cipher, openssl_get_cipher_methods())){
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivlen);
    $key = "zcpe2";
    $cypherText = openssl_encrypt($realText, $cipher, $key, $option=0, $iv, $tag);

    echo $cypherText, "<br>";

    $backToOriginal = openssl_decrypt($cypherText, $cipher, $key, $option=0, $iv, $tag );

    echo $backToOriginal;
}

// echo "<pre>";
//     print_r(openssl_get_cipher_methods());
// echo "</pre>";