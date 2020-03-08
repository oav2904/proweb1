<?php

require_once __DIR__ .'/sessions.php';

if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    return header('Location: /');
}