<?php

    session_start();

    echo print_r($_SESSION);
    echo session_id();

    session_unset();
    session_destroy();
?>