<?php
session_start();
session_destroy();
header("Location: index.php?msg=Sessão encerrada&tipo_msg=info");
?>
