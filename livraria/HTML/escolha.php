<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/logstyle.css">

    <title>usuario ou vendedor</title>
</head>
<body>

    <header class="nav">

        <div class="book"><a href="inicial.php"><h1>Bookshelf</h1></a></div>

      </header>

    <div class="card-2">
        <img src="../IMG/ICONS/user.png" id="can">
        <br>
        <form action="" method="post">

            <a href="../HTML/regvendedor.php"><button type="button">QUERO VENDER</button></a>
            <a href="../HTML/register.php"><button type="button">QUERO COMPRAR</button></a>

    </div>

    <div class="fundo">
        <img src="../IMG/FOTO/funlogin.jpg" alt="Tela-roxa-com-elementos-literários">
    </div>

    <?php
                $msg = isset($_GET['msg'])?$_GET['msg']:'';
                echo $msg;
            ?>
    
</body>
</html>