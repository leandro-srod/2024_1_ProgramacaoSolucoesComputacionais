<?php

include('protect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrículas Centro Musical</title>
</head>
<body>
    <h1>Bem vindo ao Sistema de Matrículas do Centro Musical</h1><br>
    <?php echo "Usuário logado: " . $_SESSION['nome']; ?>

    <p>
        <a href="logout.php">Sair</a>

    </p>

</body>
</html>