<?php 
    include('./assets/db/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> 
    <script src="./assets/js/script.js" defer></script>
</head>
<body>
    <?php require('header.php') ; ?>
    <main>
        <h1 class="t-center">Crea il tuo account</h1>
        <div class="container">
            <?php if(isset($_SESSION['userRegistered']) && $_SESSION['userRegistered']): ; ?>
                <p>
                    <?php 
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                        unset($_SESSION['userRegistered']);
                    ?>
                    <a href="login.php">Vai al login</a>
                </p>
            <?php else : ; ?>
                <?php if(isset($errors['emailAlreadyExist'])){ ; ?>
                    <p class="danger-2">
                        <?php echo $errors['emailAlreadyExist']; ?>
                    </p>
                <?php } ; ?>
                <form action="register.php" method="POST">
                    <div class="input-container">
                        <label class="d-block" for="name">Inserici il nome</label>
                        <?php if(isset($errors['name'])) {;?>
                            <span class="danger">
                                <?php echo $errors['name'];?>
                            </span>
                        <?php } ?>
                        <input class="d-block custom-input" type="text" name="name" id="name" placeholder="Mario">
                        
                    </div>
                    <div class="input-container">
                        <label class="d-block" for="surname">Inserici il cognome</label>
                        <?php if(isset($errors['surname'])) {;?>
                            <span class="danger">
                                <?php echo $errors['surname'];?>
                            </span>
                        <?php } ?>
                        <input class="d-block custom-input" type="text" name="surname" id="surname" placeholder="Rossi">
                    </div>
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
                        <button class="btn" type="submit" name="register">REGISTRATI</button>
                    </div>
                    <div class="link-container">
                        <a href="login.php">Hai giá un account? <b>Accedi</b></a>
                    </div>
                </form>
            <?php endif ; ?>
            
        </div>
    </main>
</body>
</html>