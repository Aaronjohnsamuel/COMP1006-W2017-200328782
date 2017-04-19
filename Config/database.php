<?php
// connection string

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}


function DBConnection() {
    // exception handling - use a try / catch
    try {

        // cleardb access
        $dsn = 'mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=videogamesdb';
        $Username = 'b6ee96bd470785';
        $Password = 'dc381279';


        //local db access
        //$dsn = 'mysql:host=localhost;dbname=gamedb';
        //$Username = 'dasha';
        //$Password = '12345';
        // instantiates a new pdo - an db object
        return new PDO($dsn, $Username, $Password);
    }
    catch(PDOException $e) {
        $message = $e->getMessage();
        echo "An error occurred: " . $message;
        return null;
    }
}
?>