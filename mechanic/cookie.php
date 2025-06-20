<?php
setcookie('user', 'João Gabriel', time()+3600);
setcookie('email', "joaogabrielpmatozinhos@gmail.com", time()+3600);
setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);
var_dump($_COOKIE);

?>
