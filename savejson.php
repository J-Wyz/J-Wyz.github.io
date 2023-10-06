<?php
    $fp = fopen('ballots.json', 'w');
    fwrite($fp, json_encode($_POST['ballot']));
    fclose($fp);
    echo "success";
?>