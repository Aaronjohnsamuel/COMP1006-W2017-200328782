<?php
include_once("Config/database.php");

function _executeAndClose($statement) {
    $statement->execute(); // run on the db server
    $statement->closeCursor(); // close the connection
}


function CreateGame($gameName, $gameCost) {
    $db = DBConnection();
    $query = "INSERT INTO games (Name, Cost) VALUES (:game_name, :game_cost)";
    $statement = $db->prepare($query); // encapsulate the sql statement
    $statement->bindValue(':game_name', $gameName);
    $statement->bindValue(':game_cost', $gameCost);
    _executeAndClose($statement);
}

function ReadGames() {
    $db = DBConnection();
    $query = "SELECT * FROM games"; // SQL statement
    $statement = $db->prepare($query); // encapsulate the sql statement
    $statement->execute(); // run on the db server
    $games = $statement->fetchAll(); // returns an array
    $statement->closeCursor(); // close the connection
    return $games;
}

function UpdateGame($gameID, $gameName, $gameCost) {
    $db = DBConnection();
    $query = "UPDATE games SET Name = :game_name, Cost = :game_cost WHERE Id = :game_id "; // SQL statement
    $statement = $db->prepare($query); // encapsulate the sql statement
    $statement->bindValue(':game_id', $gameID);
    $statement->bindValue(':game_name', $gameName);
    $statement->bindValue(':game_cost', $gameCost);
    _executeAndClose($statement);
}

function GetGameById($gameID){
    $db = DBConnection();
    $query = "SELECT * FROM games WHERE Id = :game_id "; // SQL statement
    $statement = $db->prepare($query); // encapsulate the sql statement
    $statement->bindValue(':game_id', $gameID);
    $statement->execute(); // run on the db server
    $game = $statement->fetch(); // returns only one record
    $statement->closeCursor(); // close the connection
    return $game;
}

function DeleteGame($gameID) {
    $db = DBConnection();
    $query = "DELETE FROM games WHERE Id = :game_id ";
    $statement = $db->prepare($query);
    $statement->bindValue(":game_id", $gameID);
    _executeAndClose($statement);
}
?>