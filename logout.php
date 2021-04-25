<?php
require_once 'inc/head.php';
session_destroy();
header('Location:index.php');