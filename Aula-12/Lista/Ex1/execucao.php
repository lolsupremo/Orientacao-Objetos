<?php

require_once ('modelo/Ingresso.php');
require_once ('modelo/IngressoVip.php');
require_once ('modelo/IngressoCamarote.php');

$Ingresso1 = new Ingresso();
$Ingresso1->setValor(100);

$IngressoVip1 = new IngressoVip();
$IngressoVip1->setValor(100);
$IngressoVip1->setValorAdicional(50);

$IngressoCamarote1 = new IngressoCamarote();
$IngressoCamarote1->setValor(100);
$IngressoCamarote1->setValorAdicional(50);
$IngressoCamarote1->setValorAdicionalCamarote(25);

$Ingresso1->getValorTotal();
$IngressoVip1->getValorTotal();
$IngressoCamarote1->getValorTotal();