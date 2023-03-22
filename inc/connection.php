<?php

$connection = mysqli_connect("localhost", "root", "", "crud");

if (!$connection) {
    die('Connection failed.....' . mysqli_connect_error());
}
