<?php
session_start();
if (!isset($_SESSION['isSignedUp']) || $_SESSION['isSignedUp'] !== true) {
    echo "expired";
} else {
    echo "active";
}
?>

