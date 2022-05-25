<?php
$data =new DateTime();

$intervalo = new DateInterval('PT5M');
$data->add($intervalo);

var_dump($data);