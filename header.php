<header>
    <div>
        <img class="logo" src="./assets/images/logo-edusogno.png" alt="edusogno-logo">
    </div>
    <div>
        <a href="index.php">HOME</a>
    </div>
    <?php if(isset($_SESSION['success'])) : ?>
        <div>
            <a href="logout.php">LOGOUT</a>
        </div>
    <?php endif ?>
</header>