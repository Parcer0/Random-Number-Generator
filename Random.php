<?php //Random bytes ...  you may use openssl_random_pseudo_bytes() vice random_bytes()

substr(str_shuffle(str_repeat("abcdef0123456789", 8)), 0, 8);
str_pad(dechex(mt_rand(0, 0xFFFFFFFF)), 8, '0', STR_PAD_LEFT);
bin2hex(random_bytes(8));
substr(uniqid('', true), mt_rand(0,9)); 
mt_rand(0x00,0xFFFFFFFF); //Not safe
hash("md5", random_bytes(8)); //var_dump(hash_algos());
sprintf("%02X%02X%02X", mt_rand(0x00,0xFFFFFFFF), mt_rand(0x00,0xFFFFFFFF), mt_rand(0x00,0xFFFFFFFF));

function randomx($a) { 
    $c = '!"#$%&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~'; 
    $r = ''; 
  
    for ($x = 0; $x < $a; $x++) $r .= $c[mt_rand(0, strlen($c) - 1)]; //$c[ord(openssl_random_pseudo_bytes(mt_rand(0,9))) % strlen($c)];

    return $r; 
}
?>
