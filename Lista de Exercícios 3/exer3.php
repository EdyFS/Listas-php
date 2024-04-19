<?php

if (isset($_POST)){
    if (isset($_POST['valores'])){
        $vetor = $_POST['valores'];
        var_dump($vetor);
    }
}
?>