<?php
include_once('Controllers/users.php');
CheckIfAuthenticated();

include_once('Config/database.php');
include_once('Controllers/games.php');

$gameID = $_GET["gameID"]; // assigns the gameID from the URL

if($gameID != false) {
    DeleteGame($gameID);
}

// redirect to index page
header('Location: index.php?pageId=GamesList');

?>