<?php

    $rotas[] = ["/controller/index","Controller@index"];
    $rotas[] = ["/controller/salvar","Controller@salvar"];
    $rotas[] = ["/controller/bolinhas", "Controller@bolinhas"];
    $rotas[] = ["/controller/bolinha/{{id}}/mostrar", "Controller@bolinha"];

    return $rotas;
    
?>