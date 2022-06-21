<?php
if (!defined("BASEPATH")) exit("No direct script access allowed");

class Secure
{
    function encrypt_url($string)
    {
        $output = false;

        $security = parse_ini_file('security.ini'); // parsing file security.ini output:array asosiatif
        //Hasil parsing masukkan kedalam variable
        $secret_key     = $security['encryption_key'];
        $secret_iv      = $security['iv'];
        $encrypt_method = $security['encryption_mechanism'];

        //hash $secret_key dengan algoritma sha256 
        $key = hash("sha256", $secret_key);

        //iv(initialize vector), encrypt iv dengan encrypt method AES-256-CBC (16 bytes)
        $iv     = substr(hash("sha256", $secret_iv), 0, 16);
        $result = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($result);
        return $output;
    }
    function decrypt_url($string)
    {
        $output = false;

        $security = parse_ini_file('security.ini'); // parsing file security.ini output:array asosiatif
        //Hasil parsing masukkan kedalam variable
        $secret_key     = $security['encryption_key'];
        $secret_iv      = $security['iv'];
        $encrypt_method = $security['encryption_mechanism'];

        //hash $secret_key dengan algoritma sha256 
        $key = hash("sha256", $secret_key);

        //iv(initialize vector), encrypt $secret_iv dengan encrypt method AES-256-CBC (16 bytes)
        $iv     = substr(hash("sha256", $secret_iv), 0, 16);
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        return $output;
    }
}
