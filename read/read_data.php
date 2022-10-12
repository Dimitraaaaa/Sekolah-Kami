<?php
    include "connection.php";
    $read = mysqli_query($koneksi, "SELECT * FROM siswa");
    $result = array();
    while ($data = mysqli_fetch_array($read)) {
        $result[] = $data;
    }