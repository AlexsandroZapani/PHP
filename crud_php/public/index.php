<?php
/*
PONTO DE ENTRADA DA APLICAÇÃO

Em aplicações web modernas existe o conceito de "Front Controller".
Significa que todas as requisições do navegador passam primeiro por
um único arquivo central.

Neste projeto esse arquivo é:
public/index.php

A função dele é iniciar a aplicação e carregar o sistema de rotas.
*/

require_once __DIR__ . '/../routes.php';
