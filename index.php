<?php 
    include_once __DIR__ . "/assets/db/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edusogno</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
</head>

<body>
    <?php require('header.php') ; ?>
    <main>
        <div class="container">
            <?php if (isset($_SESSION['success'])): ;?>
                <span>
                    <a href="logout.php">LOGOUT</a>
                </span>
                <span class="d-block t-center">
                    <?php echo $_SESSION['user'] ; ?>
                </span>
                <span>Questi sono i tuoi eventi:</span>
                <?php if(count($events) > 0) :  ?>
                    <?php foreach($events as $event) : ; ?>
                        <div class="event-container">
                            <h2>
                                <?php echo $event['nome_evento'] ; ?>
                            </h2>
                            <p>
                                <?php echo $event['data_evento'] ; ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                <? else : ?>
                    <span>Non hai eventi</span>
                <? endif ; ?>
            <?php else : ; ?>
                <span>BENVENUTO</span>
                <a href="login.php">LOGIN</a>
                <a href="register.php">REGISTER</a>  
            <?php endif ?>
        </div>
    </main>
</body>

</html>