<?php
    $data = json_decode($_POST['data'], true);
    $ballot = $data['ballot'];
    echo $ballot;
?>
