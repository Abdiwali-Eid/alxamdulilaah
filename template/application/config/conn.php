<?php

$conn = new mysqli("localhost","root","","expenses");


if($conn->connect_error){
    echo $conn->error;
}