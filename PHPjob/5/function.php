<?php
function check_user_logged_in() {

session_start();

if (empty($_LOGIN())) {
    header("Location: login.php");
    exit;
}
}
