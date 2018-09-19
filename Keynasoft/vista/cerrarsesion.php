<?php

    session_start();
    session_destroy();

echo "<a href='cerrarsesion.php'>cerar sesion</a>";

    echo "<meta http-equiv='refresh' content='0;url=index.php'>";

?>