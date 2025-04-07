<?php
if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];
    $nome = $arquivo['name'];
    $tmp_nome = $arquivo['tmp_name'];
    $error = $arquivo['error'];

    if ($error === UPLOAD_ERR_OK) {
        // Move o arquivo para a pasta "uploads"
        $destino = './' . $nome;
        if (move_uploaded_file($tmp_nome, $destino)) {
            echo 'Arquivo enviado com sucesso!';
        } else {
            echo 'Ocorreu um erro ao mover o arquivo.';
        }
    } else {
        echo 'Ocorreu um erro ao enviar o arquivo. Tente novamente mais tarde.';
    }
}
?>
