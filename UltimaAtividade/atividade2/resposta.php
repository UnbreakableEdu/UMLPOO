<?php
    require_once "ContaTelefone.php";


    $conta1 = new ContaTelefone('Loki', '555-555-555');
    print $conta1;
    print $conta1 -> gettotalContas();
?>