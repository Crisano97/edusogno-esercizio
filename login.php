<?php 
    include('./assets/db/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./assets/js/script.js" defer></script>
</head>
<body>
    <?php require('header.php') ; ?>
    <main>
        <h1 class="t-center">Hai giá un account?</h1>
        <div class="container">
            <form action="login.php" method="POST">
                <div class="input-container">
                    <label class="d-block" for="email">Inserici l'email</label>
                    <?php if(isset($errors['email'])) {;?>
                        <span class="danger">
                            <?php echo $errors['email'];?>
                        </span>
                    <?php } ?>
                    <input class="d-block custom-input" type="email" name="email" id="email" placeholder="name@example.com">
                </div>
                <div class="input-container">
                    <label class="d-block" for="password">Inserici la password</label>
                    <?php if(isset($errors['password'])) {;?>
                        <span class="danger">
                            <?php echo $errors['password'];?>
                        </span>
                    <?php } ?>
                    <input class="d-block custom-input" type="password" name="password" id="password" placeholder="Scrivila qui">
                    <i class="fa-solid fa-eye icon" id="passwordToggler"></i>
                </div>
                <div class="button-container">
                    <button class="btn" type="submit" name="login">Accedi</button>
                </div>
                <div class="link-container">
                    <a href="register.php">Non hai ancora un profilo? <b>Registrati</b></a>
                </div>
            </form>
            <?php if(isset($_SESSION['message'])) : ; ?>
                <p class="danger-2">
                    <?php
                        echo $_SESSION['message'];
                        // session_destroy();
                    ?>
                </p>
            <?php endif  ; ?>
        </div>
    </main>
</body>
</html>