<?php
define('DES_KEY', '12345678'); // Kunci DES, harus 8 byte

// Fungsi Enkripsi DES
function des_encrypt($data) {
    return openssl_encrypt($data, 'DES-ECB', DES_KEY, OPENSSL_RAW_DATA);
}

// Fungsi Dekripsi DES
function des_decrypt($encryptedData) {
    return openssl_decrypt($encryptedData, 'DES-ECB', DES_KEY, OPENSSL_RAW_DATA);
}

// Fungsi Enkripsi File
function encrypt_file($inputFile, $outputFile) {
    $key = DES_KEY;
    $data = file_get_contents($inputFile);
    $encryptedData = openssl_encrypt($data, 'DES-ECB', $key, OPENSSL_RAW_DATA);
    file_put_contents($outputFile, $encryptedData);
}

// Fungsi Dekripsi File
function decrypt_file($inputFile, $outputFile) {
    $key = DES_KEY;
    $encryptedData = file_get_contents($inputFile);
    $decryptedData = openssl_decrypt($encryptedData, 'DES-ECB', $key, OPENSSL_RAW_DATA);
    file_put_contents($outputFile, $decryptedData);
}
?>