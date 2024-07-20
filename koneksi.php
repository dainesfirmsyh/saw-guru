<?php
date_default_timezone_set('asia/jakarta');
    $host="localhost"; //SESUAIKAN DENGAN WEBSERVER ANDA
    $dbname="saw_guru"; //SESUAIKAN DENGAN WEBSERVER ANDA
    $username="root"; //SESUAIKAN DENGAN WEBSERVER ANDA
    $pass="";//SESUAIKAN DENGAN WEBSERVER ANDA

    $link = mysqli_connect($host,$username,$pass,$dbname) or die(mysqli_error());
?>