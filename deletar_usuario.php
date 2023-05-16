<?php
    include('conexao.php');
    $id_usuario = $_GET['id_usuario'];
    $sql = "DELETE * FROM usuario where id_usuario=$id_usuario";
    $result = mysqli_query($con,$sql);
    if($result)
        echo "Dados alterados com sucesso!<br>";
    else
        echo "Erro ao alterar dados: $msqli_erro($con)!";
?>
    