<?php

$post = $_POST ?? null;

if ($post) {
    $media = ($post['nota1'] + $post['nota2']) / 2;
    echo "A média do aluno foi: $media";
}

?>