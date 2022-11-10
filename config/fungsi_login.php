<?php

function cek_not_login()
{
    session_start();
    if (!isset($_SESSION['id_user'])) {
        echo "Anda harus login dahulu !";
        die();
    }
}
