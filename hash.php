<?php

// this program is made by Rishav kumar (lazy robo)

$i = readline('Enter your message: ');


echo "\033[01;32m The BASE64 Hash\n \033[0m";
echo base64_encode($i);
echo "\n \033[01;32m The SHA1 Hash\n \033[0m";
echo hash('sha1', $i);
echo "\n \033[01;32m The SHA256 Hash\n \033[0m";
echo hash('sha256', $i);
echo "\n \033[01;32m The SHA384 Hash\n \033[0m";
echo hash('sha384', $i);
echo "\n \033[01;32m The SHA512 Hash\n \033[0m";
echo hash('sha512', $i);
echo "\n \033[01;32m The MD2 Hash\n \033[0m";
echo hash('md2', $i);
echo "\n \033[01;32m The MD4 Hash\n \033[0m";
echo hash('md4', $i);
echo "\n \033[01;32m The MD5 Hash\n \033[0m";
echo hash('md5', $i);
