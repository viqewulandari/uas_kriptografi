<?php

// Data JSON
$data = [
  "name" => "evan",
  "age" => 20,
  "address" => [
    "street" => "123 Main St",
    "city" => "Anytown", 
    "state" => "CA"
  ]
];

$json = json_encode($data);

// Enkripsi AES-256 CTR
$key = "0123456789abcdef0123456789abcdef0123456789abcdef0123456789abcdef";
$iv = 0;

$encrypted = openssl_encrypt($json, 'AES-256-CTR', $key, 0, $iv);

// Encode Base64
$b64encoded = base64_encode($encrypted);

// Simpan ke watermark
$watermark = $b64encoded;

echo $watermark;

?>