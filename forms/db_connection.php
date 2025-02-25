<?php

$con = mysqli_connect("localhost", "root", "", "pixel_web_studio");

if (mysqli_connect_errno()) {
    echo "Connection Fiald" . mysqli_connect_error();
}
