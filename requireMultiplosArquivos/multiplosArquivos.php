<?php

//include avisa que tem erro, mas continua executando.
//Require impede que o site execute se tiver erro.
//Require_once nao repete o que ja foi puxado


require("header.php");
require("config.php");

echo "Conteudo do site...";

echo "Nome de usuario: ".$usuario;
