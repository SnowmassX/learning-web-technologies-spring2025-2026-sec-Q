<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Name (Handler Page): " . $_POST['name'];
}
?>