<?php

const SERVER = "localhost";
const LOGIN = "root";
const PASS = "root";
const DB = "edu";

$connect = mysqli_connect(SERVER,LOGIN,PASS,DB) or die("Ошибка соединения!");
