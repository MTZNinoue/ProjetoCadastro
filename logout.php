<?php
    include('criasessao.php');
// Limpa as variaveis da sessao
    session_unset();
// Destroi a sessao
    session_destroy();
// volta para a pagina inicial
    header('Location: index.php');
?>