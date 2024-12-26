<?php
// Handle GET request
if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET)) {
    print_r($_GET);
}
?>
