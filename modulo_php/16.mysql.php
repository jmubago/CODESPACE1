<?php
include("startApp.php");
$pagina_siguiente =  getNext(basename(__FILE__));
$pagina_anterior = getPrevios(basename(__FILE__));
$titulo="16. Mysql y PHP | Introducción al desarrollo web";
$tmpl_content="templates/" . basename(__FILE__);
include("templates/main.php");