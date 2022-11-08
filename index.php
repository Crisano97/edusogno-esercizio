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
    <header>
        <img class="logo" src="./assets/images/logo-edusogno.png" alt="edusogno-logo">
    </header>
    <main>
        <h1 class="t-center">Hai giá un account?</h1>
        <div class="container">
        <form action="">
                <div class="input-container">
                    <label class="d-block" for="email">Inserici l'email</label>
                    <input class="d-block custom-input" type="email" name="email" id="email" placeholder="name@example.com">
                </div>
                <div class="input-container">
                    <label class="d-block" for="password">Inserici la password</label>
                    <input class="d-block custom-input" type="text" name="password" id="password" placeholder="Scrivila qui">
                </div>
                <div class="button-container">
                    <button class="btn" type="submit">Accedi</button>
                </div>
                <div class="link-container">
                    <a href="#">Non hai ancora un profilo? <b>Registrati</b></a>
                </div>
            </form>
            
            <!-- <form action="">
                <div class="input-container">
                    <label class="d-block" for="name">Inserici il nome</label>
                    <input class="d-block custom-input" type="text" name="name" id="name" placeholder="Mario">
                </div>
                <div class="input-container">
                    <label class="d-block" for="surname">Inserici il cognome</label>
                    <input class="d-block custom-input" type="text" name="surname" id="surname" placeholder="Rossi">
                </div>
                <div class="input-container">
                    <label class="d-block" for="email">Inserici l'email</label>
                    <input class="d-block custom-input" type="email" name="email" id="email" placeholder="name@example.com">
                </div>
                <div class="input-container">
                    <label class="d-block" for="password">Inserici la password</label>
                    <input class="d-block custom-input" type="text" name="password" id="password" placeholder="Scrivila qui">
                </div>
                <div class="button-container">
                    <button class="btn" type="submit">REGISTRATI</button>
                </div>
                <div class="link-container">
                    <a href="#">Hai giá un account? <b>Accedi</b></a>
                </div>
            </form> -->
        </div>
    </main>
</body>

</html>