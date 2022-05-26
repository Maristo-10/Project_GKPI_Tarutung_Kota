<?php
    $pass = "itdel1234";
    
    $hash = password_hash($pass, PASSWORD_DEFAULT);

    echo($hash);

    // $2y$10$cWUgr8n30O604Ht999nOFe50MQSPqfl.M/EI9xt3OegAy60iUDXDO