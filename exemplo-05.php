<?php

require_once("config.php");

echo session_save_path() . "<br>";

var_dump(session_status());

echo "<br>";

switch( session_status()) {
    case PHP_SESSION_DISABLED;
        echo "as sessões estão desabilitadas";
    break;

    case PHP_SESSION_NONE;
        echo "as sessões estão ativadas, mas não existe nenhuma";
    break;

    case PHP_SESSION_ACTIVE;
        echo "as sessões estão ativadas, e existe uma atualmente";
    break;
}



?>