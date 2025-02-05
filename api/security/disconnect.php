<?php
session_start();
session_destroy();

header("Location: ../../views/backend/security/login.php");
