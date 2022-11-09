<?php

session_start();

//DEFINIAMO UNA NUOVA COSTANTE, CON IL VALORE ASSEGNATO COME SECONDO ARGOMENTO
define('DB_SERVER_ADDRESS', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'utenti');

//CONNESSIONE AL DB
$connection = new mysqli(DB_SERVER_ADDRESS, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($connection && $connection->connect_error){
    echo "Connection failed: " . $connection->connect_error;
}

// REGISTRATON VARIABLES
// $firstName = "";
// $lastName = "";
$email = "";
// $password = "";

//LOGIN ARRAYS
$errors = [];
$events = [];

//USER LOGIN
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    //EMAIL CHECK
    if (strlen(trim($email)) == 0) {
        $errors['email'] = 'Non hai inserito l\'email';
    } else if (strlen(trim($email)) > 255){
        $errors['email'] = 'L\'email inserita é troppo lunga';
    } elseif (strpos($email, '@') == false) {
        $errors['email'] = 'Inserisci una email valida.';
    }

    // CHECK PASSWORD
    if (strlen(trim($password)) == 0) {
        $errors['password'] = 'Devi inserire una password!';
    }

    // var_dump($errors);
    //LOGIN AUTH
    if(count($errors) == 0){
        $sql = "SELECT * FROM `utenti` WHERE `email`=? AND `password`=?";
        $userQuery = $connection->prepare($sql);
        $userQuery->bind_param('ss', $email, $password);
        $userQuery->execute();
        $result = $userQuery->get_result();
        if($result && $result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $_SESSION['user'] = $row['nome'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['success'] = 'Logged in';
                header('Location: login.php');
            }

        } else if ($result) {
            $_SESSION['message'] = 'Invalid email or password.';
        }
    } else {
        echo 'errori';
    }
}
//USER EVENTS
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    $eventsQuery = "SELECT * FROM `eventi` WHERE `attendees` LIKE '%$email%'";
    $result = $connection->query($eventsQuery);
    if($result && $result->num_rows > 0){
        $events = array();
        while ($row = $result->fetch_assoc()){
            array_push($events, $row);
            // var_dump($events);
        }
    }
    // var_dump($events);
}

//MIGRATION
// $sql = "CREATE TABLE IF NOT EXISTS utenti (
//     id int NOT NULL AUTO_INCREMENT,
//     nome varchar(45),
//     cognome varchar(45),
//     email varchar(255),
//     password varchar(255),
//     PRIMARY KEY (id)
//     );";
// if(mysqli_query($connection, $sql)){
//     echo "Table created successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
// }

// mysqli_close($connection);

// $sql = "CREATE TABLE IF NOT EXISTS eventi (
//     id int NOT NULL AUTO_INCREMENT,
//     attendees text,
//     nome_evento varchar(255),
//     data_evento datetime,
//     PRIMARY KEY (id)
//     );";
// if(mysqli_query($connection, $sql)){
//     echo "Table created successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
// }

// mysqli_close($connection);

//SEEDING USERS

// $sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('Stella', 'De Grandis', 'dgipolga@edume.me', 'EdusognoGia')";

// if ($connection->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $connection->error;
// }

// $connection->close();

//SEEDENG EVENTS

// $sql = "INSERT INTO eventi(`attendees`, `nome_evento`, `data_evento`) VALUES ('ulysses200915@varen8.com,qmonkey14@falixiao.com,mavbafpcmq@hitbase.net','Test Edusogno 1', '2022-10-13 14:00'), ('dgipolga@edume.me,qmonkey14@falixiao.com,mavbafpcmq@hitbase.net','Test Edusogno 2', '2022-10-15 19:00'), ('dgipolga@edume.me,ulysses200915@varen8.com,mavbafpcmq@hitbase.net','Test Edusogno 2', '2022-10-15 19:00')";

// if ($connection->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $connection->error;
// }

// $connection->close();



