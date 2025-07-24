<?php
$hostname = "103.139.188.155";
$database = "siprida";
$username = "postgres";
$password = "admin";
$port = "5432";
// script cek koneksi   
$link = pg_connect("host=$hostname dbname=$database user=$username password=$password port=$port");

if (!$link) {
    echo "Gagal melakukan Koneksi";
}
