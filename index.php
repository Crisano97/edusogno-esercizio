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
        <?php if (isset($_SESSION['success'])): ;?>
            <!-- <span>
                <a href="logout.php">LOGOUT</a>
            </span> -->
            <h1 class="t-center">
                Ciao
                <?php echo $_SESSION['user'] ; ?>,
                <span>Questi sono i tuoi eventi:</span>
            </h1>
            <div class="cards">
                <?php if(count($events) > 0) :  ?>
                    <?php foreach($events as $event) : ; ?>
                        <div class="event-container">
                            <h2>
                                <?php echo $event['nome_evento'] ; ?>
                            </h2>
                            <span class="t-light">
                                <?php echo $event['data_evento'] ; ?>
                            </span>
                            <button class="btn">JOIN</button>
                        </div>
                    <?php endforeach; ?>
                <? else : ?>
                    <span>Non hai eventi</span>
                <? endif ; ?>
            </div>
        <?php else : ; ?>
            <div class="container">
            <h1 class="t-center">BENVENUTO!</h1>
            <div class="inner-container">
                <h4>Effettua il Login per accedere ai tuoi eventi</h4>
                <a href="login.php">LOGIN</a>
            </div>
            <div class="inner-container">
                <h4>Oppure Registrati</h4>
                <a href="register.php">REGISTER</a>
            </div>
            </div>
              
        <?php endif ?>
    </main>
</body>

</html>