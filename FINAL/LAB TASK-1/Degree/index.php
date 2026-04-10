<?php
if (isset($_REQUEST['degree'])) {
    foreach ($_REQUEST['degree'] as $d) {
        echo $d . " ";
    }
}
?>