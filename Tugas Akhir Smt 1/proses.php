<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "dbsearchjob";

    $koneksi = new mysqli($hostname,$username,$password,$database);

    if ($koneksi -> connect_error) {
        die("Database tidak terkoneksi".$koneksi -> connect_error);
    }
?>