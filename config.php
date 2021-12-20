<?php
$db = pg_connect('host=localhost dbname=project user=postgres password=Nikat3485');
if (!$db) {
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
